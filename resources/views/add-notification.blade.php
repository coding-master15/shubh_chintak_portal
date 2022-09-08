@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="container">
                <div class="row mt-4">
                        <div id="flFormsGrid" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Send Notification</h4>
                                        </div>                                                                        
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <form action="{{ url()->action('NotificationController@sendNotification', []) }}" method="POST" enctype="multipart/form-data" >
                                        {{ csrf_field() }}
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <span>Title: </span>
                                                <input class="form-control" required="required" type="text" name="title" id="">
                                            
                                            </div>
                                            <div class="form-group col-md-12">
                                            <span>Message: </span>
                                                <textarea class="form-control" required="required" name="message" id="" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary mt-3" style="float: right;">Add</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
@endsection