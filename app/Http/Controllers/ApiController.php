<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;
use App\Models\Customer;

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
        return Lead::where('user_id', $this->request->input('user_id'))->paginate($this->request->input('per_page') ?? 10);
    }

    public function login() {
        return Customer::where('phone', $this->request->input('phone'))->where('phone_code', $this->request->input('phone_code'))->first();
    }

    public function register() {
        $customer = Customer::insert([
            'fname' =>  $this->request->input('fname'),
            'lname' =>  $this->request->input('lname'),
            'avatar' =>  $this->request->input('avatar'),
            'email' =>  $this->request->input('email'),
            'phone' =>  $this->request->input('phone'),
            'phone_code' =>  $this->request->input('phone_code'),
        ]);
        return Customer::find($customer);
    }
}
