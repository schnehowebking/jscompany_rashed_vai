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
    <h4 class="py-3 breadcrumb-wrapper mb-4">
        <span class="text-muted fw-light">RD2CallerInformation /</span> Create
    </h4>

    <!-- Default -->
    <div class="row gy-4">
        <div class="col-12">
            <h5>Default</h5>
        </div>

        <!-- Default Icons Wizard -->
        <div class="col-12">
            <small class="text-light fw-semibold">Basic Icons</small>
            <div class="bs-stepper wizard-icons wizard-icons-example mt-2">

                <div class="bs-stepper-header">
                    <div class="step" data-target="#account-details">
                        <button type="button" class="step-trigger">
                            <span class="bs-stepper-icon">
                                <svg viewBox="0 0 54 54">
                                    <use xlink:href='{{ asset('assets/svg/icons/form-wizard-account.svg#wizardAccount') }}'>
                                    </use>
                                </svg>
                            </span>
                            <span class="bs-stepper-label">Account Details</span>
                        </button>
                    </div>

                    <div class="line">
                        <i class="bx bx-chevron-right"></i>
                    </div>
                    <div class="step" data-target="#review-submit">
                        <button type="button" class="step-trigger">
                            <span class="bs-stepper-icon">
                                <svg viewBox="0 0 54 54">
                                    <use xlink:href='{{ asset('assets/svg/icons/form-wizard-submit.svg#wizardSubmit') }}'>
                                    </use>
                                </svg>
                            </span>
                            <span class="bs-stepper-label">Review & Submit</span>
                        </button>
                    </div>
                </div>
                <div class="bs-stepper-content">
                    <form onSubmit="return false">
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
                                <div class="col-md-6">
                                    <label class="form-label" for="professional_maturity_months">Professional Maturity Months</label>
                                    <input type="text" class="form-control" name="professional_maturity_months">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="professional_maturity_months">Professional Maturity Months</label>
                                    <input type="text" class="form-control" name="professional_maturity_months">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="email">Genre</label>
                                    <select class="form-control" name="genre" id="genre" required>
                                        <option value="">Choose</option>
                                        <option value="MR.">MR.</option>
                                        <option value="Mrs.">Mrs.</option>
                                        <option value="Ste.">Ste.</option>
                                    </select>

                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <label class="form-label" for="desired_rd1_date">desired_rd1_date</label>
                                    <input type="text" class="form-control datepicker" name="desired_rd1_date">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label" for="desired_rd1_time">desired_rd1_time</label>
                                    <input type="text" class="form-control" name="desired_rd1_time">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label" for="how_know_company">how_know_company</label>
                                    <input type="text" class="form-control" name="how_know_company">
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <label class="form-label"
                                        for="interlocutor_appointment">interlocutor_appointment</label>
                                    <input type="text" class="form-control datepicker" name="desired_rd1_date">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label" for="exchange_validated_by">exchange_validated_by</label>
                                    <input type="text" class="form-control" name="exchange_validated_by">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label"
                                        for="assignment_prospect_rd1_validation">assignment_prospect_rd1_validation</label>
                                    <input type="text" class="form-control" name="assignment_prospect_rd1_validation">
                                </div>
                            </div>
                            <hr class="container-m-nx mb-5">
                            <div class="row g-3">

                                <div class="col-12 d-flex justify-content-between">
                                    <button class="btn btn-label-secondary btn-prev" disabled>
                                        <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                        <span class="d-sm-inline-block d-none">Previous</span>
                                    </button>
                                    <button class="btn btn-primary btn-next">
                                        <span class="d-sm-inline-block d-none me-sm-1">Next</span>
                                        <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                                    </button>
                                </div>
                            </div>
                        </div>


                        <!-- Review -->
                        <div id="review-submit" class="content">

                            <p class="fw-semibold mb-2">Account</p>
                            <ul class="list-unstyled">
                                <li>Username</li>
                                <li>exampl@email.com</li>
                            </ul>
                            <hr>
                            <p class="fw-semibold mb-2">Personal Info</p>
                            <ul class="list-unstyled">
                                <li>First Name</li>
                                <li>Last Name</li>
                                <li>Country</li>
                                <li>Language</li>
                            </ul>
                            <hr>
                            <p class="fw-semibold mb-2">Address</p>
                            <ul class="list-unstyled">
                                <li>Address</li>
                                <li>Landmark</li>
                                <li>Pincode</li>
                                <li>City</li>
                            </ul>
                            <hr>
                            <p class="fw-semibold mb-2">Social Links</p>
                            <ul class="list-unstyled">
                                <li>https://twitter.com/abc</li>
                                <li>https://facebook.com/abc</li>
                                <li>https://plus.google.com/abc</li>
                                <li>https://linkedin.com/abc</li>
                            </ul>
                            <div class="col-12 d-flex justify-content-between">
                                <button class="btn btn-primary btn-prev">
                                    <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                    <span class="d-sm-inline-block d-none">Previous</span>
                                </button>
                                <button class="btn btn-success btn-submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /Default Icons Wizard -->


    </div>
@endsection
