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
                                                <input class="form-control" type="text" name="name" id="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <span>Reference: </span>
                                                <select class="form-control" name="reference" id="">
                                                    <option value="For Self">For Self</option>
                                                    <option value="For Family & Relatives">For Family & Relatives</option>
                                                    <option value="For Friends">For Friends</option>
                                                    <option value="General Reference">Neighbors</option>
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
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
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

                var services = $('#service_type');
                services.empty();
                $.each(houseTypes, function(key,value) {
                services.append($("<option></option>")
                    .attr("value", value).text(value));
                });

            $('#product_type').change(function () {
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