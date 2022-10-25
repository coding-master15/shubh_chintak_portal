@extends('layouts.app')

@section('content')
            <div class="layout-px-spacing">

                <div class="row layout-top-spacing">
                
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    
                        <div class="widget-content widget-content-area br-6">
                        <select id="bannerSelect" class="form-select" aria-label="Default select example">
                        <?php $data = App\Models\Banner::get(); ?>
                        @foreach ($data as $banner)
                            <option value="{{ $banner->id}}">{{ $banner->url }}</option>
                        @endforeach
                        </select>
                            <div class="table-responsive mb-4 mt-4">
                                <table id="default-ordering" class="table table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Banner</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Property</th>
                                            <th>Occupation</th>
                                            <th>Added Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Banner</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Property</th>
                                            <th>Occupation</th>
                                            <th>Added Date</th>
                                            <th class="invisible"></th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
@endsection