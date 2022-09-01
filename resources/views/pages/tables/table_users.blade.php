@extends('layouts.app')

@section('content')
            <div class="layout-px-spacing">

                <div class="row layout-top-spacing">
                
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <div class="table-responsive mb-4 mt-4">
                                <table id="default-ordering" class="table table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Avatar</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Phone Code</th>
                                            <th>Phone</th>
                                            <th>Registeration Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Avatar</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Phone Code</th>
                                            <th>Phone</th>
                                            <th>Registeration Date</th>
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