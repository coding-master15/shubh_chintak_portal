<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\Lead;
use App\Models\Customer;
use App\Models\WithdrawalRequest;

class LeadController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getleads(Request $request)
    {
                $data = Lead::select('*')->where('type', $request->input('type') ?? 'buyer');
                return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $btn = '<a href="/lead/'.$row->id.'" class="edit btn btn-primary btn-sm">View</a>';
                            return $btn;
                        })
                    ->rawColumns(['action'])
                    ->make(true);
    }

    public function getusers(Request $request)
    {
                $data = Customer::select('*');
                return Datatables::of($data)
                    ->addIndexColumn()
                    ->editColumn('avatar', function(Customer $customer) {
                        return '<img src="' . $customer->avatar . '" alt="" width="60" height="60" />';
                    })
                    ->addColumn('action', function($row){
                        $btn = '<a href="/user/'.$row->id.'" class="edit btn btn-primary btn-sm">View</a>';
                            return $btn;
                        })
                    ->rawColumns(['action', 'avatar'])
                    ->make(true);
    }

    public function getwithdrawalrequests(Request $request)
    {
                $data = WithdrawalRequest::select('*');
                return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('name', function(WithdrawalRequest $customer) {
                        $lead = Lead::find($customer->lead_id);
                        $user = Customer::find($lead->user_id);
                        return $user->fname.' '.$user->lname;
                    })
                    ->addColumn('amount', function(WithdrawalRequest $customer) {
                        $lead = Lead::find($customer->lead_id);
                        return $user->profit;
                    })
                    ->addColumn('action', function($row){
                        $btn = '<a href="/withdrawal-request/'.$row->id.'" class="edit btn btn-primary btn-sm">View</a>';
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
    }
}
