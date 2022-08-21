<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\Lead;

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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.tables.table_lead');
    }

    public function getleads(Request $request)
    {
                $data = Lead::select('*') ;
                return Datatables::of($data)
                        ->addIndexColumn()
                        ->addColumn('action', function($row){
                                $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
                                return $btn;
                        })
                        ->rawColumns(['action'])
                        ->make(true);
    }
}
