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
                                                <h4>{{ $user->fname . ' ' . $user->lname }}</h4>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <span>Phone: </span>
                                                <h4>{{ $user->phone_code.$user->phone }}</h4>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <span>Email: </span>
                                                <h4>{{ $user->email }}</h4>
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
                                            <h4>Bank Details</h4>
                                        </div>                                                                        
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <form>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <span>Bank Name: </span>
                                                <h4>{{ $bank->name }}</h4>
                                            </div>
                                        </div>
                                        <div class="form-row mb-4">
                                            <div class="form-group col-md-12">
                                                <span>Account Title: </span>
                                                <h4>{{ $bank->title ?? '--' }}</h4>
                                            </div>
                                        </div>
                                        <div class="form-row mb-4">
                                            <div class="form-group col-md-12">
                                                <span>Account Number: </span>
                                                <h4>{{ $bank->number ?? '--' }}</h4>
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
                                            <h4>Withdrawal Status</h4>
                                        </div>                                                                        
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <form action="{{ url()->action('WithdrawalDetailsController@updateStatus', ['id' => $idd]) }}" method="POST"  >
                                        {{ csrf_field() }}
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <span>Status: </span>
                                                <h4>{{ $withdraw->status }}</h4>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <span>Amount: </span>
                                                <h4>{{ $lead->profit }}</h4>
                                            </div>
                                        </div>
                                        @if($withdraw->status == 'pending')
                                        <button type="submit" class="btn btn-primary mt-3" style="float: right;">Mark As Completed</button>
                                        @endif
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection