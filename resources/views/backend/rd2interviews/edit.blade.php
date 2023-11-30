@extends('layouts/layoutMaster')

@section('title', 'Prospect - Forms')

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
        <span class="text-muted fw-light">RD2CallerInformation /</span> Create
    </h4>

    <!-- Default -->
    <div class="row gy-4">

        <!-- Default Icons Wizard -->
        <div class="col-12">
            <form action="{{ route('rd2brower.update', [$brower->id])}}" method="POST">
              @csrf
                <!-- Account Details -->
                <div id="account-details" class="content">
                    <div class="content-header mb-3">
                        <h6 class="mb-0">Account Details</h6>
                        <small>Enter Your Account Details.</small>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label" for="name">Name</label>
                            <input type="text" name="name_or_ste" class="form-control" required />
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="first_name">First Name</label>
                            <input type="text" name="first_name" class="form-control" required />
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="current_address">Current Address</label>
                            <input type="text" name="current_address" class="form-control" required />
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="municipality">Municipility</label>
                            <input type="text" name="municipality" class="form-control" required />
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="mobile_phone">Mobile Phone</label>
                            <input type="text" name="mobile_phone" class="form-control" required />
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="landline_phone">Landline Phone</label>
                            <input type="text" name="landline_phone" class="form-control" required />
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="date_of_birth">Date of Birth</label>
                            <input type="text" class="form-control datepicker" name="date_of_birth">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="place_of_birth">Place of Birth</label>
                            <input type="text" class="form-control datepicker" name="place_of_birth">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="current_residence">Current Residence</label>
                            <input type="text" class="form-control" name="current_residence">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="business_phone">Business Phone</label>
                            <input type="text" class="form-control" name="business_phone">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="email">Email</label>
                            <input type="text" class="form-control" name="email">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="profession">Profession</label>
                            <input type="text" class="form-control" name="profession">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="type_of_contract">Type Of Contract</label>
                            <input type="text" class="form-control" name="type_of_contract">
                        </div>

                    </div>

                    <div class="row g-3 mt-2">
                        <div class="col-md-3">
                          <label class="form-label" for="professional_maturity_months">Professional Maturity Months</label>
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
                        <label class="form-label" for="credit_remaining_to_settle">Credit Remaining to Settle</label>
                        <input type="text" class="form-control" name="credit_remaining_to_settle">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label" for="credit_a_in_progress_per_month">Credit in progress permonth</label>
                        <input type="text" class="form-control" name="credit_a_in_progress_per_month">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label" for="remaining_month_credit_a_in_progress">Remaining month credit in progress</label>
                        <input type="text" class="form-control" name="remaining_month_credit_a_in_progress">
                    </div>
                  </div>
                  <div class="row mt-2">
                      <div class="col-md-6">
                        <label class="form-label" for="family_situation">Family Situation</label>
                        <textarea class="form-control" name="family_situation"></textarea>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="personal_contribution">Personal Contribution</label>
                        <input type="text" class="form-control" name="personal_contribution">
                    </div>
                  </div>
                    <div class="row g-3 mt-2">
                        <div class="col-md-3">
                          <input type="submit" class="btn btn-primary" value="Submit">
                      </div>
                    </div>

                </div>

            </form>
        </div>
        <!-- /Default Icons Wizard -->


    </div>
@endsection
