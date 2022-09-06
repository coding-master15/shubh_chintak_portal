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
                                            <h4>Add Banner</h4>
                                        </div>                                                                        
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <form action="{{ url()->action('BannerController@addBanner', []) }}" method="POST" enctype="multipart/form-data" >
                                        {{ csrf_field() }}
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <span>Url: </span>
                                                <input class="form-control" required="required" type="text" name="url" id="">
                                            
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <span>Thumbnail: </span>
                                                <input required="required" type="file" name="image" id="">
                                            
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