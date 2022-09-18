<h5>Dear <strong>{{ $customer->fname.' '.$customer->lname }}</strong></h5>
<p>Congratulations on adding your lead and let me assure you that this is just the beginning of sea-like opportunities to make money and goodwill together.</p>
<p>Please find below details of your lead</p>
<h6>Entire Lead Details:</h6>

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
                </div>

<p>It's time for you to mint money with every possible lead around you.</p>
<br>
<p>Regards,</p>
<p>Team <strong>Shubh Chintak</strong></p>