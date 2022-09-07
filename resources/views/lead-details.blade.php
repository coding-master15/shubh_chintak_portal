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
                                            <h4>Customer Details</h4>
                                        </div>                                                                        
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <form>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <span>Name: </span>
                                                <h4>{{ $lead->name }}</h4>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <span>Refrence: </span>
                                                <h4>{{ $lead->contact_ref }}</h4>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <span>Contact 01: </span>
                                                <h4>{{ $lead->contact_one }}</h4>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <span>Contact 02: </span>
                                                <h4>{{ $lead->contact_two }}</h4>
                                            </div>
                                        </div>
                                        <!-- <div class="form-group">
                                            <div class="form-check pl-0">
                                                <div class="custom-control custom-checkbox checkbox-info">
                                                    <input type="checkbox" class="custom-control-input" id="gridCheck">
                                                    <label class="custom-control-label" for="gridCheck">Check me out</label>
                                                </div>
                                            </div>
                                        </div> -->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div id="flFormsGrid" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Lead Details</h4>
                                        </div>                                                                        
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <form>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <span>Service: </span>
                                                <h4>{{ $lead->product_type }}</h4>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <span>Type: </span>
                                                <h4>{{ $lead->service_type }}</h4>
                                            </div>
                                        </div>
                                        <div class="form-row mb-4">
                                            <div class="form-group col-md-12">
                                                <span>Description: </span>
                                                <h4>{{ $lead->description ?? '--' }}</h4>
                                            </div>
                                           
                                        </div>
                                        <div class="form-row mb-4">
                                            <div class="form-group col-md-6">
                                                <span>Budget: </span>
                                                <h4>{{ $lead->budget }}</h4>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <span>Zip Code: </span>
                                                <h4>{{ $lead->pincode }}</h4>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <span>Area: </span>
                                                <h4>{{ $lead->area }}</h4>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <span>City: </span>
                                                <h4>{{ $lead->city }}</h4>
                                            </div>
                                        </div>
                                        <!-- <div class="form-group">
                                            <div class="form-check pl-0">
                                                <div class="custom-control custom-checkbox checkbox-info">
                                                    <input type="checkbox" class="custom-control-input" id="gridCheck">
                                                    <label class="custom-control-label" for="gridCheck">Check me out</label>
                                                </div>
                                            </div>
                                        </div> -->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if($lead->type == 'seller')
                    <div class="row">
                        <div id="flFormsGrid" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Service Details</h4>
                                        </div>                                                                        
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <form>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <span>{{ $type_name }} Type: </span>
                                                <h4>{{ $lead->service_type }}</h4>
                                            </div>
                                            @if(in_array($lead->product_type, ['buy_house', 'rent_house']))
                                            <div class="form-group col-md-6">
                                                <span>No Of Rooms: </span>
                                                <h4>{{ $meta->no_of_bedrooms }}</h4>
                                            </div>
                                            @endif
                                            @if(in_array($lead->product_type, ['electronics', 'mobiles', 'vehicles']))
                                            <div class="form-group col-md-6">
                                                <span> Brand Name: </span>
                                                <h4>{{ $meta->brand_name }}</h4>
                                            </div>
                                            @endif
                                            @if(in_array($lead->product_type, ['events']))
                                            <div class="form-group col-md-6">
                                                <span> Event Location: </span>
                                                <h4>{{ $meta->location }}</h4>
                                            </div>
                                            @endif
                                            @if(in_array($lead->product_type, ['services']))
                                            <div class="form-group col-md-6">
                                                <span> Monthly/Annualy: </span>
                                                <h4>{{ $meta->monthly_annualy }}</h4>
                                            </div>
                                            @endif
                                        </div>
                                        <div class="form-row mb-4">
                                            @if(in_array($lead->product_type, ['buy_house', 'rent_house']))
                                            <div class="form-group col-md-6">
                                                <span>Super Builtup Area: </span>
                                                <h4>{{ $meta->super_builtup_area }}</h4>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <span>Carpet Area: </span>
                                                <h4>{{ $meta->carpet_area }}</h4>
                                            </div>
                                            @endif
                                            @if(in_array($lead->product_type, ['electronics', 'mobiles', 'vehicles']))
                                            <div class="form-group col-md-6">
                                                <span> Model No: </span>
                                                <h4>{{ $meta->model_no }}</h4>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <span> Warranty: </span>
                                                <h4>{{ $meta->warranty }}</h4>
                                            </div>
                                            @endif
                                            @if(in_array($lead->product_type, ['events']))
                                            <div class="form-group col-md-6">
                                                <span> Event Date: </span>
                                                <h4>{{ date('d M Y',strtotime($meta->event_date)) }}</h4>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <span> No Of Guests: </span>
                                                <h4>{{ $meta->no_of_guests }}</h4>
                                            </div>
                                            @endif
                                        </div>
                                        <div class="form-row mb-4">
                                            @if(in_array($lead->product_type, ['buy_house', 'rent_house']))
                                            <div class="form-group col-md-6">
                                                <span>Fursnishing Status: </span>
                                                <h4>{{ $meta->furnishing }}</h4>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <span>Construction Status: </span>
                                                <h4>{{ $meta->construction }}</h4>
                                            </div>
                                            @endif
                                            @if(in_array($lead->product_type, ['vehicles']))
                                            <div class="form-group col-md-6">
                                                <span> Manufacturing Date: </span>
                                                <h4>{{ date('d M Y',strtotime($meta->manufacturing_date)) }}</h4>
                                            </div>
                                            @endif
                                            @if(in_array($lead->product_type, ['electronics', 'mobiles', 'vehicles']))
                                            <div class="form-group col-md-6">
                                                <span> Billing Date: </span>
                                                <h4>{{ date('d M Y',strtotime($meta->billing_date)) }}</h4>
                                            </div>
                                            @endif
                                        </div>
                                        @if(in_array($lead->product_type, ['buy_house', 'rent_house']))
                                        <div class="form-row mb-4">
                                            <div class="form-group col-md-6">
                                                <span>Monthly Maintenance: </span>
                                                <h4>{{ $meta->maintenance }}</h4>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <span>Total Floors: </span>
                                                <h4>{{ $meta->total_floors }}</h4>
                                            </div>
                                        </div>
                                        <div class="form-row mb-4">
                                            <div class="form-group col-md-6">
                                                <span>Car Parking: </span>
                                                <h4>{{ $meta->car_parking }}</h4>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <span>Project Name: </span>
                                                <h4>{{ $meta->project_name }}</h4>
                                            </div>
                                        </div>
                                        @endif
                                        <!-- <div class="form-group">
                                            <div class="form-check pl-0">
                                                <div class="custom-control custom-checkbox checkbox-info">
                                                    <input type="checkbox" class="custom-control-input" id="gridCheck">
                                                    <label class="custom-control-label" for="gridCheck">Check me out</label>
                                                </div>
                                            </div>
                                        </div> -->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    <div class="row mt-4">
                        <div id="flFormsGrid" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Lead Status</h4>
                                        </div>                                                                        
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <form action="{{ url()->action('LeadDetailsController@updateStatus', ['id' => $idd]) }}" method="POST"  >
                                        {{ csrf_field() }}
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <span>Status: </span>
                                                @if($lead->status == 'withdrawn')
                                                <h4>Withdrawn</h4>
                                                @else
                                                <select name="status" id="success-select" class="form-control  basic">
                                                    <option value="confirming" <?php echo $lead->status == 'confirming' ? 'selected="selected"' : '' ?> >Confirming</option>
                                                    <option value="screening" <?php echo $lead->status == 'screening' ? 'selected="selected"' : '' ?> >Screening</option>
                                                    <option value="pitching" <?php echo $lead->status == 'pitching' ? 'selected="selected"' : '' ?> >Pitching</option>
                                                    <option value="pending" <?php echo $lead->status == 'pending' ? 'selected="selected"' : '' ?> >Pending</option>
                                                    <option value="success" <?php echo $lead->status == 'success' ? 'selected="selected"' : '' ?> >Success</option>
                                                    <option value="declined" <?php echo $lead->status == 'declined' ? 'selected="selected"' : '' ?> >Declined</option>
                                                </select>
                                                @endif
                                            </div>
                                            <div class="form-group col-md-6">
                                                <span>Profit: </span>
                                                <h4 style="<?php echo $lead->status == 'success' ? 'display: none;' : '' ?>" id="status-text">{{ $lead->profit }}</h4>
                                                <input name="profit" class="form-control" style="<?php echo $lead->status != 'success' ? 'display: none;' : '' ?>" value="{{ $lead->profit }}" id="status-input">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <span>Hot Deal Title: </span>
                                                <input name="title" class="form-control" value="{{ $lead->title }}">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="custom-control custom-checkbox checkbox-info pt-4">
                                                    <input name="is_hotdeal" <?php echo $lead->is_hotdeal == 1 ? 'checked="checked"' : '' ?> type="checkbox" class="custom-control-input" id="gridCheck">
                                                    <label class="custom-control-label" for="gridCheck">Add to Hot Deal</label>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <span>Min Profit: </span>
                                                <h4>{{ $lead->min_profit }}</h4>
                                                <input name="min_profit" class="form-control" value="{{ $lead->min_profit }}">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <span>Max Profit: </span>
                                                <h4>{{ $lead->max_profit }}</h4>
                                                <input name="max_profit" class="form-control" value="{{ $lead->max_profit }}">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary mt-3" style="float: right;">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script type='text/javascript'>
                $('#success-select').on('change', function (e) {
                    if(this.value === 'success') {
                        console.log('a');
                        $('#status-input').css({'display':'inline'});
                        $('#status-text').css({'display':'none'});
                    } else {
                        console.log('b');
                        $('#status-input').css({'display':'none'});
                        $('#status-text').css({'display':'block'});
                    }
                })
            </script>
            
@endsection