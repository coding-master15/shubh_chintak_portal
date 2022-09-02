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
                                            <h4>Add Testimonial</h4>
                                        </div>                                                                        
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <form action="{{ url()->action('TestimonialController@addTestimonial', []) }}" method="POST"  >
                                        {{ csrf_field() }}
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <span>Person Name: </span>
                                                <input type="text" name="name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <span>Testimonial: </span>
                                                <textarea name="testimonial" class="form-control"></textarea>
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