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
       $profit = $request->input('profit') ?? '';
       $title = $request->input('title') ?? '';
       $is_hotdeal = $request->input('is_hotdeal') == 'on' ? 1 : 0;
       $lead->status = $status;
       $lead->profit = $profit;
       $lead->title = $title;
       $lead->is_hotdeal = $is_hotdeal;
       $lead->save();

       return redirect()->back()->withSuccess('Updated');

    }
}
