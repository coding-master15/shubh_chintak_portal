<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;
use App\Models\LeadMeta;
use App\Models\Customer;
use App\Models\WithdrawalRequest;
use App\Models\Bank;

class WithdrawalDetailsController extends Controller
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

        $withdraw = WithdrawalRequest::find($id);
        $lead = Lead::find($withdraw->lead_id);
        $user = Customer::find($lead->user_id);
        $bank = Bank::where('user_id', $lead->user_id)->first();
        $data['idd'] = $id;
        $data['withdraw'] = $withdraw;
        $data['lead'] = $lead;
        $data['user'] = $user;

        return view('withdrawal-details')->with($data);
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
       $lead = WithdrawalRequest::find($request->input('id'));
       $lead->status = 'completed';
       $lead->save();

       return redirect()->back()->withSuccess('Updated');

    }
}
