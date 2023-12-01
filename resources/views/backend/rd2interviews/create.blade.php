@extends('layouts/layoutMaster')

@section('title', 'Prospect - RD2 Interview')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bs-stepper/bs-stepper.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/bs-stepper/bs-stepper.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/form-wizard-icons.js') }}"></script>
@endsection

@section('content')
    <h4 class="py-3 breadcrumb-wrapper">
        <span class="text-muted fw-light">RD2 Interview /</span> Create
    </h4>

    <!-- Default -->
    <div class="row gy-4">

        <!-- Default Icons Wizard -->
        <div class="col-12">
            <form action="{{ route('rd2interviews.store') }}" method="POST">
                @csrf

                <div class="content-header mb-3">
                    <h4 class="mb-0">STEP-1: WEAR INFORMATION AND TEAR</h4>
                    <small>Enter WEAR INFORMATION AND TEAR</small>
                </div>
                <!-- Account Details -->
                <div class="row ">
                    <div id="" class="content mt-2 col-md-6">
                        <div class="content-header mb-3">
                            <h6 class="mb-0">1(a). Caller's information</h6>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <label class="form-label" for="name">Name</label>
                                <input type="text" name="name_or_ste" class="form-control" required />
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="first_name">First Name</label>
                                <input type="text" name="first_name" class="form-control" required />
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="current_address">Current Address</label>
                                <input type="text" name="current_address" class="form-control" required />
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="municipality">Municipility</label>
                                <input type="text" name="municipality" class="form-control" required />
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="mobile_phone">Mobile Phone</label>
                                <input type="text" name="mobile_phone" class="form-control" required />
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="landline_phone">Landline Phone</label>
                                <input type="text" name="landline_phone" class="form-control" required />
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="date_of_birth">Date of Birth</label>
                                <input type="text" class="form-control datepicker" name="date_of_birth">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="place_of_birth">Place of Birth</label>
                                <input type="text" class="form-control datepicker" name="place_of_birth">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="current_residence">Current Residence</label>
                                <input type="text" class="form-control" name="current_residence">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="business_phone">Business Phone</label>
                                <input type="text" class="form-control" name="business_phone">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="email">Email</label>
                                <input type="text" class="form-control" name="email">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="profession">Profession</label>
                                <input type="text" class="form-control" name="profession">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="type_of_contract">Type Of Contract</label>
                                <input type="text" class="form-control" name="type_of_contract">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="professional_maturity_months">Professional Maturity
                                    Months</label>
                                <input type="text" class="form-control" name="professional_maturity_months">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="bank_name">Bank Name</label>
                                <input type="text" class="form-control" name="bank_name">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="savings_info">Savings Info</label>
                                <input type="text" class="form-control" name="savings_info">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="annual_tax_income">Annual Tax Income</label>
                                <input type="text" class="form-control" name="annual_tax_income">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="child_dependent_on_tax">Child Dependent on tax</label>
                                <input type="text" class="form-control" name="child_dependent_on_tax">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="rental_charge">Rental Charge</label>
                                <input type="text" class="form-control" name="rental_charge">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="rental_income">Rental Income</label>
                                <input type="text" class="form-control" name="rental_income">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="rental_income_70_percent">Rental Income (70%)</label>
                                <input type="text" class="form-control" name="rental_income_70_percent">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="bank_seniority_months">Bank Seniority Months</label>
                                <input type="text" class="form-control" name="bank_seniority_months">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="seniority_pel_months">Seniority Per Months</label>
                                <input type="text" class="form-control" name="seniority_pel_months">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="credit_remaining_to_settle">Credit Remaining to
                                    Settle</label>
                                <input type="text" class="form-control" name="credit_remaining_to_settle">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="credit_a_in_progress_per_month">Credit in progress
                                    permonth</label>
                                <input type="text" class="form-control" name="credit_a_in_progress_per_month">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="remaining_month_credit_a_in_progress">Remaining month
                                    credit in
                                    progress</label>
                                <input type="text" class="form-control" name="remaining_month_credit_a_in_progress">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="family_situation">Family Situation</label>
                                <textarea class="form-control" name="family_situation"></textarea>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="personal_contribution">Personal Contribution</label>
                                <input type="text" class="form-control" name="personal_contribution">
                            </div>

                        </div>

                    </div>
                    <div class="content mt-2 col-md-6">
                        <div class="content-header mb-3">
                            <h6 class="mb-0">1(b). Co-borrower's information</h6>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <label class="form-label" for="name_or_ste">Bank Name</label>
                                <input type="text" class="form-control" name="name_or_ste">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="first_name">First Name</label>
                                <input type="text" class="form-control" name="first_name">
                            </div>

                            <div class="col-md-3">
                                <label class="form-label" for="current_address">Current Address</label>
                                <input type="text" class="form-control" name="current_address">
                            </div>


                            <div class="col-md-3">
                                <label class="form-label" for="municipality">Municipality</label>
                                <input type="text" class="form-control" name="municipality">
                            </div>



                            <div class="col-md-3">
                                <label class="form-label" for="mobile_phone">Mobile Phone</label>
                                <input type="text" class="form-control" name="mobile_phone">
                            </div>



                            <div class="col-md-3">
                                <label class="form-label" for="landline_phone">Landline Phone</label>
                                <input type="text" class="form-control" name="landline_phone">
                            </div>



                            <div class="col-md-3">
                                <label class="form-label" for="date_of_birth">Date Of Birth</label>
                                <input type="text" class="form-control" name="date_of_birth">
                            </div>



                            <div class="col-md-3">
                                <label class="form-label" for="place_of_birth">Place Of Birth</label>
                                <input type="text" class="form-control" name="place_of_birth">
                            </div>



                            <div class="col-md-3">
                                <label class="form-label" for="current_residence">Current Residence</label>
                                <input type="text" class="form-control" name="current_residence">
                            </div>



                            <div class="col-md-3">
                                <label class="form-label" for="business_phone">Business Phone</label>
                                <input type="text" class="form-control" name="business_phone">
                            </div>



                            <div class="col-md-3">
                                <label class="form-label" for="email">Email</label>
                                <input type="text" class="form-control" name="email">
                            </div>



                            <div class="col-md-3">
                                <label class="form-label" for="profession">Profession</label>
                                <input type="text" class="form-control" name="profession">
                            </div>



                            <div class="col-md-3">
                                <label class="form-label" for="type_of_contract">Type Of Contract</label>
                                <input type="text" class="form-control" name="type_of_contract">
                            </div>



                            <div class="col-md-3">
                                <label class="form-label" for="professional_maturity_months">Professional Maturity
                                    Months</label>
                                <input type="text" class="form-control" name="professional_maturity_months">
                            </div>



                            <div class="col-md-3">
                                <label class="form-label" for="bank_name">Bank Name</label>
                                <input type="text" class="form-control" name="bank_name">
                            </div>



                            <div class="col-md-3">
                                <label class="form-label" for="savings_info">Savings Info</label>
                                <input type="text" class="form-control" name="savings_info">
                            </div>


                            <div class="col-md-3">
                                <label class="form-label" for="annual_tax_income">Annual Tax Income</label>
                                <input type="text" class="form-control" name="annual_tax_income">
                            </div>


                            <div class="col-md-3">
                                <label class="form-label" for="child_dependent_on_tax">Child Dependent On Tax</label>
                                <input type="text" class="form-control" name="child_dependent_on_tax">
                            </div>


                            <div class="col-md-3">
                                <label class="form-label" for="rental_charge">Rental Charge</label>
                                <input type="text" class="form-control" name="rental_charge">
                            </div>


                            <div class="col-md-3">
                                <label class="form-label" for="rental_income">Rental Income</label>
                                <input type="text" class="form-control" name="rental_income">
                            </div>


                            <div class="col-md-3">
                                <label class="form-label" for="rental_income_70_percent">Rental Income 70
                                    Percent</label>
                                <input type="text" class="form-control" name="rental_income_70_percent">
                            </div>


                            <div class="col-md-3">
                                <label class="form-label" for="bank_seniority_months">Bank Seniority Months</label>
                                <input type="text" class="form-control" name="bank_seniority_months">
                            </div>


                            <div class="col-md-3">
                                <label class="form-label" for="seniority_pel_months">Seniority Pel Months</label>
                                <input type="text" class="form-control" name="seniority_pel_months">
                            </div>


                            <div class="col-md-3">
                                <label class="form-label" for="credit_remaining_to_settle">Credit Remaining To
                                    Settle</label>
                                <input type="text" class="form-control" name="credit_remaining_to_settle">
                            </div>



                            <div class="col-md-3">
                                <label class="form-label" for="credit_a_in_progress_per_month">Credit A In Progress
                                    Per
                                    Month</label>
                                <input type="text" class="form-control" name="credit_a_in_progress_per_month">
                            </div>



                            <div class="col-md-3">
                                <label class="form-label" for="remaining_month_credit_a_in_progress">Remaining Month
                                    Credit A In Progress</label>
                                <input type="text" class="form-control" name="remaining_month_credit_a_in_progress">
                            </div>


                            <div class="col-md-3">
                                <label class="form-label" for="family_situation">Family Situation</label>
                                <input type="text" class="form-control" name="family_situation">
                            </div>


                            <div class="col-md-3">
                                <label class="form-label" for="personal_contribution">Personal Contribution</label>
                                <input type="text" class="form-control" name="personal_contribution">
                            </div>
                        </div>
                    </div>
                </div>
                <hr />

                <div class="row mt-2">

                <div class="content mt-2 col-md-6">
                    <div class="content-header mb-3">
                        <h4 class="mb-0">STEP-2: LAND CHARGE INFORMATION</h4>
                        <small>Enter LAND CHARGE INFORMATION Details.</small>
                    </div>
                    <div class="row mt-2">

                        <div class="col-md-3">
                            <label class="form-label" for="site_address">Site Address</label>
                            <input type="text" class="form-control" name="site_address">
                        </div>

                        <div class="col-md-3">
                            <label class="form-label" for="site_municipality">Current Address</label>
                            <input type="text" class="form-control" name="site_municipality">
                        </div>

                        <div class="col-md-3">
                            <label class="form-label" for="geotechnical_study">Geotechnical Study</label>
                            <input type="text" class="form-control" name="geotechnical_study">
                        </div>

                        <div class="col-md-3">
                            <label class="form-label" for="land_serviced">Land Serviced</label>
                            <input type="text" class="form-control" name="land_serviced">
                        </div>

                        <div class="col-md-3">
                            <label class="form-label" for="everything_in_sewer">Everything In Sewer</label>
                            <input type="text" class="form-control" name="everything_in_sewer">
                        </div>

                        <div class="col-md-3">
                            <label class="form-label" for="parcel_or_lot_number">Parcel Or Lot Number</label>
                            <input type="text" class="form-control" name="parcel_or_lot_number">
                        </div>

                        <div class="col-md-3">
                            <label class="form-label" for="type_of_work_selected">Type Of Work Selected</label>
                            <input type="text" class="form-control" name="type_of_work_selected">
                        </div>

                        <div class="col-md-3">
                            <label class="form-label" for="land_on_excessive_slope">Land On Excessive Slope</label>
                            <input type="text" class="form-control" name="land_on_excessive_slope">
                        </div>

                        <div class="col-md-3">
                            <label class="form-label" for="cadastral_section">Cadastral Section</label>
                            <input type="text" class="form-control" name="cadastral_section">
                        </div>

                        <div class="col-md-3">
                            <label class="form-label" for="urban_planning_area">Urban Planning Area</label>
                            <input type="text" class="form-control" name="urban_planning_area">
                        </div>

                        <div class="col-md-3">
                            <label class="form-label" for="land_acquisition_stage">Land Acquisition Stage</label>
                            <input type="text" class="form-control" name="land_acquisition_stage">
                        </div>

                        <div class="col-md-3">
                            <label class="form-label" for="surface_in_square_meters">Surface In Square Meters</label>
                            <input type="text" class="form-control" name="surface_in_square_meters">
                        </div>

                        <div class="col-md-3">
                            <label class="form-label" for="price_per_square_meter">Price Per Square Meter</label>
                            <input type="text" class="form-control" name="price_per_square_meter">
                        </div>

                        <div class="col-md-3">
                            <label class="form-label" for="venal_value_of_land">Venal value Of Land</label>
                            <input type="text" class="form-control" name="venal_value_of_land">
                        </div>

                    </div>
                </div>
                <div class="content mt-2 col-md-6">
                    <div class="content-header mb-3">
                        <h4 class="mb-0">STEP-3: HOUSEHOLD RESOURCE CAPACITY</h4>
                        <small>Enter HOUSEHOLD RESOURCE CAPACITY (excluding intake).</small>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <label class="form-label" for="annual_tax_income">Annual Tax Income</label>
                            <input type="text" class="form-control" name="annual_tax_income">
                        </div>

                        <div class="col-md-3">
                            <label class="form-label" for="annual_rental_income_before_abatement">Annual Rental Income
                                Before Abatement</label>
                            <input type="text" class="form-control" name="annual_rental_income_before_abatement">
                        </div>

                        <div class="col-md-3">
                            <label class="form-label" for="annual_rental_income_after_abatement">Annual Rental Income
                                After Abatement</label>
                            <input type="text" class="form-control" name="annual_rental_income_after_abatement">
                        </div>

                        <div class="col-md-3">
                            <label class="form-label" for="potential_help_financial_assistance">Potential Help Financial
                                Assistance</label>
                            <input type="text" class="form-control" name="potential_help_financial_assistance">
                        </div>

                        <div class="col-md-3">
                            <label class="form-label" for="financial_capacity_of_household">Financial Capacity Of
                                Household</label>
                            <input type="text" class="form-control" name="financial_capacity_of_household">
                        </div>
                    </div>
                </div>
                </div>
                <hr />
                <div class="row mt-2">
                <div class="content mt-2 col-md-6">
                    <div class="content-header mb-3">
                        <h4 class="mb-0">STEP-4: HOUSEHOLD DUCTMENT</h4>
                        <small>Enter HOUSEHOLD DUCTMENT</small>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <label class="form-label" for="eligible_debt_before_credit">Eligible Debt Before
                                Credit</label>
                            <input type="text" class="form-control" name="eligible_debt_before_credit">
                        </div>

                        <div class="col-md-3">
                            <label class="form-label" for="current_credit">Current Credit</label>
                            <input type="text" class="form-control" name="current_credit">
                        </div>

                        <div class="col-md-3">
                            <label class="form-label" for="debt_with_monthly_credit">Debt With Monthly Credit</label>
                            <input type="text" class="form-control" name="debt_with_monthly_credit">
                        </div>

                        <div class="col-md-3">
                            <label class="form-label" for="debt_with_annual_credit">Debt With Annual Credit</label>
                            <input type="text" class="form-control" name="debt_with_annual_credit">
                        </div>

                        <div class="col-md-3">
                            <label class="form-label" for="capacity">Capacity</label>
                            <input type="text" class="form-control" name="capacity">
                        </div>

                    </div>
                </div>
                <div class="content mt-2 col-md-6">
                    <div class="content-header mb-3">
                        <h4 class="mb-0">STEP-5: FINANCING CONDITION</h4>
                        <small>Enter FINANCING CONDITION</small>
                    </div>

                    <div class="row mt-2">

                        <div class="col-md-3">
                            <label class="form-label" for="loan_rate">Loan Rate</label>
                            <input type="text" class="form-control" name="loan_rate">
                        </div>

                        <div class="col-md-3">
                            <label class="form-label" for="insurance_rate">Insurance Rate</label>
                            <input type="text" class="form-control" name="insurance_rate">
                        </div>

                        <div class="col-md-3">
                            <label class="form-label" for="teag">Teag</label>
                            <input type="text" class="form-control" name="teag">
                        </div>

                        <div class="col-md-3">
                            <label class="form-label" for="duration_in_years">Duration In Years</label>
                            <input type="text" class="form-control" name="duration_in_years">
                        </div>

                        <div class="col-md-3">
                            <label class="form-label" for="duration_in_months">Duration In Months</label>
                            <input type="text" class="form-control" name="duration_in_months">
                        </div>

                        <div class="col-md-3">
                            <label class="form-label" for="current_credit">Current Credit</label>
                            <input type="text" class="form-control" name="current_credit">
                        </div>

                    </div>
                </div>
                </div>
                <hr />
                <div class="content mt-2">
                    <div class="content-header mb-3">
                        <h4 class="mb-0">STEP-6: PROJECT FINANCING</h4>
                        <small>Enter PROJECT FINANCING</small>
                    </div>
                    <div class="row mt-2">

                        <div class="col-md-3">
                            <label class="form-label" for="contribution">Contribution</label>
                            <input type="text" class="form-control" name="contribution">
                        </div>



                        <div class="col-md-3">
                            <label class="form-label" for="loan_at_zero_rate">Loan At Zero Rate</label>
                            <input type="text" class="form-control" name="loan_at_zero_rate">
                        </div>



                        <div class="col-md-3">
                            <label class="form-label" for="employer_loan">Employer Loan</label>
                            <input type="text" class="form-control" name="employer_loan">
                        </div>



                        <div class="col-md-3">
                            <label class="form-label" for="relay_loan">Relay Loan</label>
                            <input type="text" class="form-control" name="relay_loan">
                        </div>



                        <div class="col-md-3">
                            <label class="form-label" for="regional_subsidy">Regional Subsidy</label>
                            <input type="text" class="form-control" name="regional_subsidy">
                        </div>



                        <div class="col-md-3">
                            <label class="form-label" for="non_loan_financing_capacity">Non Loan Financing
                                Capacity</label>
                            <input type="text" class="form-control" name="non_loan_financing_capacity">
                        </div>



                        <div class="col-md-3">
                            <label class="form-label" for="ready">Ready</label>
                            <input type="text" class="form-control" name="ready">
                        </div>



                        <div class="col-md-3">
                            <label class="form-label" for="schedule">Schedule</label>
                            <input type="text" class="form-control" name="schedule">
                        </div>



                        <div class="col-md-3">
                            <label class="form-label" for="debt">Debt</label>
                            <input type="text" class="form-control" name="debt">
                        </div>



                        <div class="col-md-3">
                            <label class="form-label" for="debt_with_credit">Debt With Credit</label>
                            <input type="text" class="form-control" name="debt_with_credit">
                        </div>



                        <div class="col-md-3">
                            <label class="form-label" for="total_financing_of_project">Total Financing Of Project</label>
                            <input type="text" class="form-control" name="total_financing_of_project">
                        </div>

                    </div>
                </div>
                <hr />


                <div class="row g-3 mt-2">
                    <div class="col-md-3">
                        <input type="submit" class="btn btn-primary" value="Submit">
                    </div>
                </div>

            </form>
        </div>
        <!-- /Default Icons Wizard -->


    </div>
@endsection
