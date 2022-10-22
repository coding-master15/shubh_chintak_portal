<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\Lead;
use App\Models\Customer;
use App\Models\Notification;
use App\Models\Submission;
use App\Models\Testimonial;
use App\Models\SuccessStory;
use App\Models\WithdrawalRequest;
use App\Models\Banner;

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
                $data = Lead::select('*')->where('type', $request->input('type') ?? 'buyer')->where('status', $request->input('status') ?? 'confirming');
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
                      $btn = '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                      View
                    </button>';
                      $btn.='<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">'.$row->fname.' '.$row->lname.'</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>';
                    $btn .= '<button type="button" class="btn btn-danger mt-2" data-toggle="modal" data-target="#exampleModal'.$row->id.'">
                      Delete
                    </button>';
                    $btn.='<div class="modal fade" id="exampleModal'.$row->id.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel'.$row->id.'" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel2">Alert</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            Are you sure want to delete this item?
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <form action="'.url()->action('TestimonialController@deleteUser', ['id' => $row->id]).'" method="POST"  >
                                      '.csrf_field().'
                            <button type="submit" class="edit btn btn-danger mt-2 btn-sm">Delete</a>
                          </div>
                        </div>
                      </div>
                    </div>';
                          return $btn;
                      })
                    ->rawColumns(['action', 'avatar'])
                    ->make(true);
    }

    public function getnotifications(Request $request)
    {
                $data = Notification::select('*');
                return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                      $btn = '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                      View
                    </button>';
                      $btn.='<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">'.$row->title.'</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                          '.$row->message.'
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>';
                    $btn .= '<button type="button" class="btn btn-danger mt-2" data-toggle="modal" data-target="#exampleModal'.$row->id.'">
                      Delete
                    </button>';
                    $btn.='<div class="modal fade" id="exampleModal'.$row->id.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel'.$row->id.'" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel2">Alert</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            Are you sure want to delete this item?
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <form action="'.url()->action('TestimonialController@deleteNotification', ['id' => $row->id]).'" method="POST"  >
                                      '.csrf_field().'
                            <button type="submit" class="edit btn btn-danger mt-2 btn-sm">Delete</a>
                          </div>
                        </div>
                      </div>
                    </div>';
                          return $btn;
                      })
                    ->rawColumns(['action'])
                    ->make(true);
    }

    public function getsubmissions(Request $request)
    {
                $data = Submission::select('*');
                return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('banner', function($row){
                      $banner = Banner::find($row->banner_id);
                      return '<img src="'.$banner->image.'" />';
                    })
                    ->addColumn('action', function($row){
                      $btn = '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                      View
                    </button>';
                      $btn.='<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">'.$row->title.'</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                          '.$row->message.'
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>';
                    $btn .= '<button type="button" class="btn btn-danger mt-2" data-toggle="modal" data-target="#exampleModal'.$row->id.'">
                      Delete
                    </button>';
                    $btn.='<div class="modal fade" id="exampleModal'.$row->id.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel'.$row->id.'" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel2">Alert</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            Are you sure want to delete this item?
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <form action="'.url()->action('TestimonialController@deleteSubmission', ['id' => $row->id]).'" method="POST"  >
                                      '.csrf_field().'
                            <button type="submit" class="edit btn btn-danger mt-2 btn-sm">Delete</a>
                          </div>
                        </div>
                      </div>
                    </div>';
                          return $btn;
                      })
                    ->rawColumns(['action', 'banner'])
                    ->make(true);
    }

    public function gettestimonials(Request $request)
    {
                $data = Testimonial::select('*');
                return Datatables::of($data)
                    ->addIndexColumn()
                    ->editColumn('created_at', function(Testimonial $testimonial) {
                        return date('d-M-Y g:i A', strtotime($testimonial->created_at));
                    })
                    ->addColumn('action', function($row){
                        $btn = '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        View
                      </button>';
                        $btn.='<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">'.$row->name.'</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              '.$row->review.'
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>';
                      $btn .= '<button type="button" class="btn btn-danger mt-2" data-toggle="modal" data-target="#exampleModal'.$row->id.'">
                        Delete
                      </button>';
                      $btn.='<div class="modal fade" id="exampleModal'.$row->id.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel'.$row->id.'" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel2">Alert</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              Are you sure want to delete this item?
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <form action="'.url()->action('TestimonialController@deleteTestimonial', ['id' => $row->id]).'" method="POST"  >
                                        '.csrf_field().'
                              <button type="submit" class="edit btn btn-danger mt-2 btn-sm">Delete</a>
                            </div>
                          </div>
                        </div>
                      </div>';
                            return $btn;
                        })
                    ->rawColumns(['action'])
                    ->make(true);
    }

    public function getstories(Request $request)
    {
                $data = SuccessStory::select('*');
                return Datatables::of($data)
                    ->addIndexColumn()
                    ->editColumn('created_at', function(SuccessStory $testimonial) {
                        return date('d-M-Y g:i A', strtotime($testimonial->created_at));
                    })
                    ->editColumn('image', function(SuccessStory $story) {
                      return '<img src="'.$story->image.'" alt="" width="70px" height="70px" />';
                  })
                    ->addColumn('action', function($row){
                        $btn = '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        View
                      </button>';
                        $btn.='<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">'.$row->name.'</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              ---
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>';
                      $btn .= '<button type="button" class="btn btn-danger mt-2" data-toggle="modal" data-target="#exampleModal'.$row->id.'">
                        Delete
                      </button>';
                      $btn.='<div class="modal fade" id="exampleModal'.$row->id.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel'.$row->id.'" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel'.$row->id.'">Alert</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              Are you sure want to delete this item?
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <form action="'.url()->action('StoryController@deleteStory', ['id' => $row->id]).'" method="POST"  >
                                        '.csrf_field().'
                              <button type="submit" class="edit btn btn-danger mt-2 btn-sm">Delete</a>
                            </div>
                          </div>
                        </div>
                      </div>';
                            return $btn;
                        })
                    ->rawColumns(['action', 'image'])
                    ->make(true);
    }

    public function getbanners(Request $request)
    {
                $data = Banner::select('*');
                return Datatables::of($data)
                    ->addIndexColumn()
                    ->editColumn('created_at', function(Banner $testimonial) {
                        return date('d-M-Y g:i A', strtotime($testimonial->created_at));
                    })
                    ->editColumn('image', function(Banner $story) {
                      return '<img src="'.$story->image.'" alt="" width="70px" height="70px" />';
                  })
                    ->addColumn('action', function($row){
                        $btn = '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        View
                      </button>';
                        $btn.='<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">'.$row->name.'</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <img src="'.$row->image.'" width="400px" alt="" />
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>';
                      $btn .= '<button type="button" class="btn btn-danger mt-2" data-toggle="modal" data-target="#exampleModal'.$row->id.'">
                        Delete
                      </button>';
                      $btn.='<div class="modal fade" id="exampleModal'.$row->id.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel'.$row->id.'" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel'.$row->id.'">Alert</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              Are you sure want to delete this item?
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <form action="'.url()->action('StoryController@deleteStory', ['id' => $row->id]).'" method="POST"  >
                                        '.csrf_field().'
                              <button type="submit" class="edit btn btn-danger mt-2 btn-sm">Delete</a>
                            </div>
                          </div>
                        </div>
                      </div>';
                            return $btn;
                        })
                    ->rawColumns(['action', 'image'])
                    ->make(true);
    }

    public function getwithdrawalrequests(Request $request)
    {
                $data = WithdrawalRequest::select('*')->where('status', $request->input('status'));
                return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('name', function(WithdrawalRequest $customer) {
                        $lead = Lead::find($customer->lead_id);
                        $user = Customer::find($lead->user_id);
                        return $user->fname.' '.$user->lname;
                    })
                    ->addColumn('amount', function(WithdrawalRequest $customer) {
                        $lead = Lead::find($customer->lead_id);
                        return $lead->profit;
                    })
                    ->editColumn('created_at', function(WithdrawalRequest $customer) {
                        return date('d-M-Y g:i A', strtotime($customer->created_at));
                    })
                    ->addColumn('action', function($row){
                        $btn = '<a href="/withdrawal-request/'.$row->id.'" class="edit btn btn-primary btn-sm">View</a>';
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
    }
}
