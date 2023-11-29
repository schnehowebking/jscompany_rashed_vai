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
        <span class="text-muted fw-light">Prospect /</span> Create
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
                                    <input type="text" name="name" class="form-control" required />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="first_name">First Name</label>
                                    <input type="text" name="first_name" class="form-control" required />
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
                                <div class="col-md-6">
                                    <label class="form-label" for="telephone_prospect_1">Telephone</label>
                                    <input type="text" name="telephone_prospect_1" class="form-control" required />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="desired_work">Desired Work</label>
                                    <select class="form-control" name="desired_work" id="desired_work" required>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="desired_house_type">Desired House Type</label>
                                    <select class="form-control" name="desired_house_type" id="desired_house_type">
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="has_land">has_land</label>
                                    <select class="form-control" name="has_land" id="has_land">
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="land_municipality">land_municipality</label>
                                    <select class="form-control" name="land_municipality" id="land_municipality">
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label"
                                        for="land_document_requested">land_document_requested</label>
                                    <input type="file" name="land_document_requested" class="form-control" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="desired_municipality">desired_municipality</label>
                                    <input type="text" name="desired_municipality" class="form-control " />
                                </div>
                            </div>

                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label" for="desired_surface">desired_surface</label>
                                    <input type="text" name="desired_surface" class="form-control" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="financial_simulation">financial_simulation</label>
                                    <input type="text" name="financial_simulation" class="form-control " />
                                </div>

                            </div>
                            <div class="row g-3">
                                <div class="col-md-4 col-sm-6">
                                    <label class="form-label" for="simulation_amount">simulation_amount</label>
                                    <input type="number" class="form-control" name="simulation_amount" />
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <label class="form-label" for="simulation_bank">simulation_bank</label>
                                    <input type="text" class="form-control datepicker" name="simulation_bank" />
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <label class="form-label" for="simulation_broker">simulation_broker</label>
                                    <input type="text" class="form-control datepicker" name="simulation_broker" />
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
