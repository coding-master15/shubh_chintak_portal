<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;
use App\Models\LeadMeta;

class LeadDetailsController extends Controller
{
    private $request;

    public function __construct(Request $request) {
        $this->request = $request;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id)
    {

        $data = [
            'category_name' => 'datatable',
            'page_name' => 'ordering_sorting',
            'has_scrollspy' => 0,
            'scrollspy_offset' => '',
        ];

        $metas = LeadMeta::where('lead_id', $id)->get();

        $arr = new \stdClass();

        foreach($metas as $meta) {
            $arr->{$meta->key} = $meta->value;
        }

        $data['idd'] = $id;
        $data['lead'] = Lead::find($id);
        $data['meta'] = $arr;
        $data['type_name'] = $this->getTypeShortName($data['lead']->product_type);

        return view('lead-details')->with($data);
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function updateStatus(Request $request)
    {
       $lead = Lead::find($request->input('id'));
       $status = $request->input('status') ?? 'confirming';
       $min_profit = $request->input('min_profit') ?? '';
       $max_profit = $request->input('max_profit') ?? '';
       $profit = $request->input('profit') ?? '';
       $title = $request->input('title') ?? '';
       $is_hotdeal = $request->input('is_hotdeal') == 'on' ? 1 : 0;
       $lead->status = $status;
       $lead->profit = $profit;
       $lead->min_profit = $min_profit;
       $lead->max_profit = $max_profit;
       $lead->title = $title;
       $lead->is_hotdeal = $is_hotdeal;
       $lead->save();

        $url = 'https://fcm.googleapis.com/fcm/send';

        $fields = array (
                'to' => '/topics/offers',
                'notification' => array (
                        "title" => 'Lead Status',
                        "body" => 'Lead #'.$lead->code.' status updated to '.$status,
                )
        );
        $fields = json_encode ( $fields );

        $headers = array (
                'Authorization: key=' . "AAAANO67b58:APA91bHprWIp8Q4Bp-riu0bfH7mBCv-ja1YTEtRlmPWcOf5iWTUwwuX-U328kp2w-_lRC3z31GSZXuumV-4oTEsOX6WgQ_imrxLYh4g82vcInLRS7sxtmQSlLRfHGg6N8ZojjTQMvW-x",
                'Content-Type: application/json'
        );

        $ch = curl_init ();
        curl_setopt ( $ch, CURLOPT_URL, $url );
        curl_setopt ( $ch, CURLOPT_POST, true );
        curl_setopt ( $ch, CURLOPT_HTTPHEADER, $headers );
        curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
        curl_setopt ( $ch, CURLOPT_POSTFIELDS, $fields );

        $result = curl_exec ( $ch );
        curl_close ( $ch );

       return redirect()->back()->withSuccess('Updated');

    }

    public function addLead() {
        $lead = \DB::table('leads')->insertGetId([
          'user_id' => 2,
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
                  'pincode',
                  'description',
              ])) {
                  if($value != '') {
                      LeadMeta::insert([
                          'key' => $key,
                          'value' => $value,
                          'lead_id' => $lead,
                      ]);
                  }
              }
          }
      }
      $leada = Lead::find($lead);
      $lastId = strval($lead);
      $code = '';
      for($i = 0; $i < (10-strlen($lastId)); $i++) {
          $code.='0';
      }
      $code.=$lastId;
      $leada->code = $code;
      $leada->save();
      return $leada;
    }

}
