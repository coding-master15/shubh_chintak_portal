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
                                            <h4>User Details</h4>
                                        </div>                                                                        
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <form>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <span>Name: </span>
                                                <h4>{{ $user->name }}</h4>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <span>Phone: </span>
                                                <h4>{{ $user->phone_code.$user->phone }}</h4>
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
                                        <div class="form-group">
                                            <div class="form-check pl-0">
                                                <div class="custom-control custom-checkbox checkbox-info">
                                                    <input name="is_hotdeal" <?php echo $lead->is_hotdeal == 1 ? 'checked="checked"' : '' ?> type="checkbox" class="custom-control-input" id="gridCheck">
                                                    <label class="custom-control-label" for="gridCheck">Add to Hot Deal</label>
                                                </div>
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