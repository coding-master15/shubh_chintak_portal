@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="container">
            <form action="{{ url()->action('LeadDetailsController@addLead', []) }}" method="POST" enctype="multipart/form-data" >
                <div class="row mt-4">
                            <input type="hidden" name="type" value="<?php echo $type ?>">
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
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <span>Name: </span>
                                                    <input class="form-control" type="text" name="name" id="">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <span>Reference: </span>
                                                    <select class="form-control" name="reference" id="">
                                                        <option value="For Self">For Self</option>
                                                        <option value="For Family & Relatives">For Family & Relatives</option>
                                                        <option value="For Friends">For Friends</option>
                                                        <option value="For Neighbors">For Neighbors</option>
                                                        <option value="General Reference">Others</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <span>Contact 01: </span>
                                                    <input class="form-control" type="text" name="contact_one" id="">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <span>Contact 02: </span>
                                                    <input class="form-control" type="text" name="contact_two" id="">
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
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <span>Service: </span>
                                                    <select class="form-control" name="product_type" id="product_type">
                                                        @if($type == 'buyer')
                                                        <option value="buy_house">Buy House/Apartments/Lands & Plots/Shops & Offices</option>
                                                        <option value="rent_house">Rent or Lease House/Apartments/Lands & Plots/Shops & Offices</option>
                                                        <option value="loan">Looking For Loan</option>
                                                        <option value="insurance">Looking For Insurance</option>
                                                        <option value="electronics">TV/Appliances/Electronics</option>
                                                        <option value="mobiles">Mobiles/Computers/Laptops/Printers/Accessories</option>
                                                        <option value="events">Events Planning</option>
                                                        <option value="vehicles">Looking for Two/Three or Four Wheelers (Bike/Car, etc.)</option>
                                                        <option value="health">Monthly Medicines, Monthly Lab Tests, etc.</option>
                                                        <option value="services">Accounting Services</option>
                                                        @endif
                                                        @if($type == 'seller')
                                                        <option value="buy_house">Sell House/Apartments/Lands & Plots/Shops & Offices</option>
                                                        <option value="rent_house">Rent or Lease House/Apartments/Lands & Plots/Shops & Offices</option>
                                                        <option value="electronics">TV/Appliances/Electronics</option>
                                                        <option value="mobiles">Mobiles/Computers/Laptops/Printers/Accessories</option>
                                                        <option value="events">Events Planning</option>
                                                        <option value="vehicles">Selling Two/Three or Four Wheelers (Bike/Car, etc.)</option>
                                                        <option value="services">Accounting Services</option>
                                                        @endif
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <span>Type: </span>
                                                    <select class="form-control" name="service_type" id="service_type">

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row mb-4">
                                                <div class="form-group col-md-12">
                                                    <span>Description: </span>
                                                    <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
                                                </div>
                                            
                                            </div>
                                            <div class="form-row mb-4">
                                                <div class="form-group col-md-6">
                                                    <span id="budget_heading">{{ $type == 'buyer' ? 'Budget:' : 'Selling Price' }}</span>
                                                    <input class="form-control" type="text" name="budget">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <span>Zip Code: </span>
                                                    <input class="form-control" type="text" name="picode" id="">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <span>Area: </span>
                                                    <input class="form-control" type="text" name="area" id="">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <span>City: </span>
                                                    <input class="form-control" type="text" name="city" id="">
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <input type="hidden" name="type" value="<?php echo $type ?>">
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
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <span>No Of Bedrooms: </span>
                                                    <input class="form-control" type="number" name="no_of_bedrooms" id="no_of_bedrooms">
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <span>Furnishing: </span>
                                                    <select class="form-control" name="furnishing" id="furnishing" >
                                                        <option value="Furnished">Furnished</option>
                                                        <option value="Semi-Furnished">Semi-Furnished</option>
                                                        <option value="Unfurnished">Unfurnished</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <span>Brand Name: </span>
                                                    <input class="form-control" type="text" name="brand_name" id="brand_name">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <span>Model No: </span>
                                                    <input class="form-control" type="text" name="model_no" id="model_no">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <span>Manufacturing Date: </span>
                                                    <input class="form-control" type="date" name="manufacturing_date" id="manufacturing_date">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <span>Event Date: </span>
                                                    <input class="form-control" type="date" name="event_date" id="event_date">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <span>Warranty: </span>
                                                    <select class="form-control" name="warranty" id="warranty" >
                                                        <option value="Available">Available</option>
                                                        <option value="Not-Available">Not Available</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <span>Billing Date: </span>
                                                    <input class="form-control" type="date" name="billing_date" id="billing_date">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <span>Construction Status: </span>
                                                    <select class="form-control" name="construction" id="construction" >
                                                        <option value="New Launch">New Launch</option>
                                                        <option value="Ready to Move">Ready to Move</option>
                                                        <option value="Under Construction">Under Construction</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <span>Super Builtup Area: </span>
                                                    <input class="form-control" type="number" name="super_builtup_area" id="super_builtup_area">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <span>Event Location: </span>
                                                    <input class="form-control" type="text" name="location" id="location">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <span>No Of Guests: </span>
                                                    <input class="form-control" type="number" name="no_of_guests" id="no_of_guests">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <span>Carpet Area: </span>
                                                    <input class="form-control" type="number" name="carpet_area" id="carpet_area">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <span>Maintenence Monthly: </span>
                                                    <input class="form-control" type="number" name="maintenance" id="maintenance">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <span>Total Floors: </span>
                                                    <input class="form-control" type="number" name="total_floors" id="total_floors">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <span>Car Parking: </span>
                                                    <select class="form-control" name="car_parking" id="car_parking" >
                                                        <option value="Available">Available</option>
                                                        <option value="Not-Available">Not Available</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <span>Project Name: </span>
                                                    <input class="form-control" type="text" name="project_name" id="project_name">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <span>Monthly/Annually: </span>
                                                    <select class="form-control" name="monthly_annually" id="monthly_annually" >
                                                        <option value="Monthly">Monthly</option>
                                                        <option value="Annually">Annually</option>
                                                    </select>
                                                </div>
                                            </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-3" style="float: right;">Add Lead</button>
                                </div>
                            </div>
                        </div>
            </form>
        </div>
        </div>

        <script type="text/javascript">
                var houseTypes = [
                    'Apartment',
                    'Independent House',
                    'Villas & Bungalows',
                    'Builder Floor',
                    'Farm House',
                    'Plot',
                    'Agricultural Land',
                    'Other',
                ];

                var loanTypes = [
                    'Personal Loan',
                    'Auto Loan',
                    'Housing Loan',
                    'Student Loan',
                    'Mortgage Loan',
                    'Gold Loan',
                    'Agricultural Loan',
                    'Other',
                ];

                var insuranceTypes = [
                    'Life Insurance',
                    'Health Insurance',
                    'Motor Insurance',
                    'Home Insurance',
                    'Fire Insurance',
                    'Travel Insurance',
                    'Other',
                ];

                var electronicTypes = [
                    'TV',
                    'Air Conditioning (A/C)',
                    'Air Coolers',
                    'Fridge/Freezer',
                    'Washing Machine',
                    'Water Purifier',
                    'Microwave',
                    'Electric Chimney',
                    'Blender',
                    'Gas Cooker/Oven',
                    'Pressure Cooker',
                    'Toaster Sandwich maker',
                    'Juicer',
                    'Food Processor',
                    'Water Heater',
                    'Other',
                ];

                var mobileTypes = [
                    'Mobile Phones',
                    'Laptops',
                    'Desktops',
                    'Tablets',
                    'Wearable Devices',
                    'Smart Home',
                    'Printers & Scanners',
                    'Power Banks',
                    'Others',
                ];

                var eventTypes = [
                    'Wedding Planning',
                    'Birthday Parties',
                    'Engagement Parties',
                    'Baby Showers',
                    'Fundraising & Charity Events',
                    'Trade Shows',
                    'Corporate Events',
                    'Award Ceremonies',
                    'Festivals',
                    'Other',
                ];

                var carTypes = [
                    'Two Wheeler Bike',
                    'Two Wheeler Scooter',
                    'Two Wheeler Electrical Bike',
                    'Two Wheeler Electrical Scooter',
                    'Three Wheeler Auto',
                    'Three Wheeler Auto Electric',
                    'Three Wheeler Goods Vehicle',
                    'Three Wheeler Goods Vehicle Electric',
                    'Petrol Car',
                    'Diesel Car',
                    'Electric Car',
                    '6 Wheeler Truck',
                    '8 Wheeler Truck',
                    '10 Wheeler Truck',
                    'Other',
                ];

                var healthTypes = [
                    'Diabetes Medicines',
                    'Blood Pressure Medicines',
                    'Cardiac Medicines',
                    'Joint Pain (arthritis) Medicines',
                    'Thyroid Medicines',
                    'Epilepsy Medicines',
                    'Lab Tests',
                    'Other',
                ];

                var accountingTypes = [
                    'IT Return Filling',
                    'Book Keeping',
                    'Financial Accounting',
                    'Cost Accounting',
                    'Tax Accounting',
                    'Project Reports',
                ];

                var metas = [
                    'no_of_bedrooms',
                    'furnishing',
                    'brand_name',
                    'model_no',
                    'manufacturing_date',
                    'event_date',
                    'warranty',
                    'billing_date',
                    'construction',
                    'super_builtup_area',
                    'location',
                    'no_of_guests',
                    'carpet_area',
                    'maintenance',
                    'total_floors',
                    'car_parking',
                    'project_name',
                    'monthly_annually',
                ];

                var houseMetas = [
                    'no_of_bedrooms',
                    'furnishing',
                    'construction',
                    'super_builtup_area',
                    'no_of_guests',
                    'carpet_area',
                    'maintenance',
                    'total_floors',
                    'car_parking',
                    'project_name',
                ];

                var electronicsMetas = [
                    'brand_name',
                    'model_no',
                    'warranty',
                    'billing_date',
                ];

                var mobileMetas = [
                    'brand_name',
                    'model_no',
                    'warranty',
                    'billing_date',
                ];

                var eventMetas = [
                    'event_date',
                    'location',
                    'no_of_guests',
                ];

                var vehiclesMetas = [
                    'brand_name',
                    'model_no',
                    'warranty',
                    'billing_date',
                    'manufacturing_date',
                ];

                var servicesMetas = [
                    'monthly_annually'
                ];

                function changeValues() {
                    $type = $('#product_type').val();
                    $.each(metas, function(key,value) {
                        $item = $('#'+value);
                        $item.val('');
                        $item.parent().css({'display' : 'none'});
                    });
                    var newInputs;
                    if($type == 'buy_house' || $type == 'rent_house') {
                        newInputs = houseMetas;
                    } else if ($type == 'electronics') {
                        newInputs = electronicsMetas;
                    } else if ($type == 'mobiles') {
                        newInputs = mobileMetas;
                    } else if ($type == 'services') {
                        newInputs = servicesMetas;
                    } else if ($type == 'events') {
                        newInputs = eventMetas;
                    } else if ($type == 'vehicles') {
                        newInputs = vehiclesMetas;
                    }
                    $.each(newInputs, function(key,value) {
                        $item = $('#'+value);
                        $item.parent().css({'display' : 'inline'});
                        $item.val('');
                    });
                }

                changeValues();

                var services = $('#service_type');
                services.empty();
                $.each(houseTypes, function(key,value) {
                services.append($("<option></option>")
                    .attr("value", value).text(value));
                });

            $('#product_type').change(function () {
                changeValues();
                var newOptions;
                var budgetName;
                if($(this).val() == 'buy_house' || $(this).val() == 'rent_house') {
                    newOptions = houseTypes;
                    if($(this).val() == 'buy_house') {
                        budgetName = 'Selling Price';
                    } else {
                        budgetName = 'Monthly Rent';
                    }
                }
                if($(this).val() == 'loan') {
                    newOptions = loanTypes;
                }
                if($(this).val() == 'insurance') {
                    newOptions = insuranceTypes;
                }
                if($(this).val() == 'electronics') {
                    newOptions = electronicTypes;
                    budgetName = 'Selling Price';
                }
                if($(this).val() == 'mobiles') {
                    newOptions = mobileTypes;
                    budgetName = 'Selling Price';
                }
                if($(this).val() == 'events') {
                    newOptions = eventTypes;
                    budgetName = 'Budget';
                }
                if($(this).val() == 'vehicles') {
                    newOptions = carTypes;
                    budgetName = 'Selling Price';
                }
                if($(this).val() == 'health') {
                    newOptions = healthTypes;
                }
                if($(this).val() == 'services') {
                    newOptions = accountingTypes;
                    budgetName = 'Service Fee';
                }
                if('{{ $type }}' == 'buyer') {
                    $('#budget_heading').html('Budget');
                } else {
                    $('#budget_heading').html(budgetName);
                }
                var services = $('#service_type');
                services.empty();
                $.each(newOptions, function(key,value) {
                    services.append($("<option></option>")
                        .attr("value", value).text(value));
                });
            });
        </script>

@endsection