<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;
use App\Models\LeadMeta;
use App\Models\Customer;
use App\Models\Address;
use App\Models\Submission;
use App\Models\Bank;
use App\Models\Banner;
use App\Models\BannerClick;
use App\Models\SuccessStory;
use App\Models\Testimonial;
use App\Models\Notification;
use App\Models\WithdrawalRequest;

class ApiController extends Controller
{
    private $request;

    public function __construct(Request $request) {
        $this->request = $request;
        $header = $request->bearerToken();

        if($header != '9fb65ce4-3908-475e-8e67-4893e5b5cd9d') {
            throw new \Exception('INVALID API KEY');
        }
    }

    public function getLeads() {
        $data = Lead::where('user_id', $this->request->input('user_id'))->paginate($this->request->input('per_page') ?? 10);
        foreach($data as $lead) {
            if($lead->type == 'seller') {
                $lead->meta = LeadMeta::where('lead_id', $lead->id)->get();
            }
        }
        return $data;
    }

    public function getSuccessStories() {
        return SuccessStory::paginate($this->request->input('per_page') ?? 10);
    }

    public function getNotifications() {
        return Notification::whereIn('user_id', array($this->request->input('user_id'), 0))->paginate($this->request->input('per_page') ?? 10);
    }

    public function getBanners() {
        return Banner::paginate($this->request->input('per_page') ?? 10);
    }

    public function withdrawalRequests() {
        return WithdrawalRequest::where('lead_id', $this->request->input('lead_id'))->get();
    }

    public function requestWithdrawal() {
        $data = WithdrawalRequest::insert([
            'lead_id' => $this->request->input('lead_id'),
            'status' => 'pending',
        ]);

        return WithdrawalRequest::find($data);
    }

    public function getTestimonials() {
        return Testimonial::paginate($this->request->input('per_page') ?? 10);
    }

    public function getLeadById() {
        $lead = Lead::find($this->request->input('id'));
        $lead->meta = LeadMeta::where('lead_id', $lead->id)->get();
        return $lead;
    }

    public function getHotDeals() {
        $data = Lead::where('is_hotdeal', 1)->orderBy(DB::raw("3959 * acos( cos( radians({$request->input('lat')}) ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians(-{$request->input('lon')}) ) + sin( radians({$request->input('lat')}) ) * sin(radians(latitude)) )"), 'ASC')->paginate($this->request->input('per_page') ?? 10);
        foreach($data as $lead) {
            if($lead->type == 'seller') {
                $lead->meta = LeadMeta::where('lead_id', $lead->id)->get();
            }
        }
        return $data;
    }

    public function getTypeShortName($type) {
        switch ($type) {
          case 'buy_house':
            return 'House';
          case 'rent_house':
            return 'House';
          case 'loan':
            return 'Loan';
          case 'insurance':
            return 'Insurance';
          case 'vehicles':
            return 'Vehicle';
          case 'mobiles':
            return 'Mobile';
          case 'electronics':
            return 'Electronic';
          case 'events':
            return 'Event';
          case 'accounting':
            return 'Service';
          default:
            return '';
        }
      }

    
      public function addLead() {
        
        $leadIID = \DB::table('leads')->insertGetId([
            'user_id' => $this->request->input('user_id'),
            'name' => $this->request->input('name'),
            'contact_ref' => $this->request->input('contact_ref'),
            'contact_one' => $this->request->input('contact_one'),
            'contact_two' => $this->request->input('contact_two'),
            'status' => $this->request->input('status'),
            'product_type' => $this->request->input('product_type'),
            'service_type' => $this->request->input('service_type'),
            'type' => $this->request->input('type'),
            'budget' => $this->request->input('budget'),
            'area' => $this->request->input('area'),
            'city' => $this->request->input('city'),
            'lat' => $this->request->input('lat'),
            'long' => $this->request->input('long'),
            'pincode' => $this->request->input('pincode'),
            'description' => $this->request->input('description'),
        ]);
        if($this->request->input('type') == 'seller') {
            foreach($this->request->all() as $key => $value) {
                if(!in_array($key, [
                    'user_id',
                    'name',
                    'contact_one',
                    'contact_two',
                    'status',
                    'product_type',
                    'service_type',
                    'type',
                    'budget',
                    'area',
                    'city',
                    'lat',
                    'long',
                    'pincode',
                    'description',
                ])) {
                    if($value != '') {
                        LeadMeta::insert([
                            'key' => $key,
                            'value' => $value,
                            'lead_id' => $leadIID,
                        ]);
                    }
                }
            }
        }
        $lead = Lead::find($leadIID);
        $lastId = strval($leadIID);
        $code = '';
        for($i = 0; $i < (10-strlen($lastId)); $i++) {
            $code.='0';
        }
        $code.=$lastId;
        $lead->code = $code;
        $lead->save();

        $customer = Customer::find($this->request->input('user_id'));

        $type_name = $this->getTypeShortName($lead->product_type);

        $data = array('customer'=> $customer, 'lead' => $lead, 'type_name' => $type_name);
        \Mail::send('emails.lead', $data, function($message) use ($customer, $lead, $type_name) {
            $message->to($customer->email, $customer->fname.' '.$customer->lname)->subject
                ('Lead Added Successfully!');
            $message->from('support@theshubhchintaq.com','Shubh Chintak');
        });

        return $lead;
    }

    public function getToken() {
        $value = Customer::find($this->request->input('user_id'));
        return $value->token;
    }

    public function login() {
        return Customer::where('phone', $this->request->input('phone'))->where('phone_code', $this->request->input('phone_code'))->first();
    }

    public function register() {
        $value = Customer::insertGetId([
            'fname' =>  $this->request->input('fname'),
            'lname' =>  $this->request->input('lname'),
            'avatar' =>  $this->request->input('avatar'),
            'email' =>  $this->request->input('email'),
            'phone' =>  $this->request->input('phone'),
            'phone_code' =>  $this->request->input('phone_code'),
        ]);

        $customer = Customer::find($value);

        $data = array('customer'=> $customer);

        try {
        \Mail::send('emails.register', $data, function($message) use ($customer) {
            $message->to($customer->email, $customer->fname.' '.$customer->lname)->subject
                ('Thanks for Joining Shubh Chintak');
            $message->from('support@theshubhchintaq.com','Shubh Chintak');
        });
    } catch (\Exception $e) {
        return $e->toString();
    }

        return $customer;
    }

    public function saveSubmission() {
        $value = Submission::insertGetId([
            'user_id' =>  $this->request->input('user_id'),
            'banner_id' =>  $this->request->input('banner_id'),
            'name' =>  $this->request->input('name'),
            'email' =>  $this->request->input('email'),
            'phone' =>  $this->request->input('phone'),
            'occupation' =>  $this->request->input('occupation'),
            'property' =>  $this->request->input('property'),
        ]);

        $submission = Submission::find($value);

        $data = array('submission'=> $submission);

    //     try {
    //     \Mail::send('emails.register', $data, function($message) use ($submission) {
    //         $message->to($customer->email, $customer->fname.' '.$customer->lname)->subject
    //             ('Thanks for Joining Shubh Chintak');
    //         $message->from('support@theshubhchintaq.com','Shubh Chintak');
    //     });
    // } catch (\Exception $e) {
    //     return $e->toString();
    // }

        return $submission;
    }

    public function saveAddress() {
        $address = Address::where('user_id', $this->request->input('user_id'))->first();
        if($address) {
            $address->country = $this->request->input('country');
            $address->city = $this->request->input('city');
            $address->zip = $this->request->input('zip');
            $address->state = $this->request->input('state');
            $address->address = $this->request->input('address');
            $address->save();
        } else {
            $addressId = Address::insert([
                'user_id' => $this->request->input('user_id'),
                'country' => $this->request->input('country'),
                'city' => $this->request->input('city'),
                'zip' => $this->request->input('zip'),
                'state' => $this->request->input('state'),
                'address' => $this->request->input('address'),
            ]);
            $address = Address::find($addressId);
        }
        return $address;
    }

    public function setToken() {
        $customer = Customer::find($this->request->input('user_id'));
        if($customer) {
            $customer->token = $this->request->input('token');
            $customer->save();
        }
        return $customer;
    }
    

    public function saveBankDetails() {
        
        $bank = Bank::where('user_id', $this->request->input('user_id'))->first();
        if($bank) {
            $bank->name = $this->request->input('name');
            $bank->title = $this->request->input('title');
            $bank->number = $this->request->input('number');
        } else {
            $bankId = Bank::insert([
                'user_id' => $this->request->input('user_id'),
                'name' => $this->request->input('name'),
                'title' => $this->request->input('title'),
                'number' => $this->request->input('number'),
            ]);
            $bank = Bank::find($bankId);
        }
        return $bank;
    }

    public function addBannerClick() {
            $bankId = BannerClick::insert([
                'user_id' => $this->request->input('user_id'),
                'banner_id' => $this->request->input('banner_id'),
            ]);
        return $bankId;
    }

    public function getBankDetails() {
        return Bank::where('user_id', $this->request->input('user_id'))->first();
    }

    public function getAddress() {
        return Address::where('user_id', $this->request->input('user_id'))->first();
    }
}
