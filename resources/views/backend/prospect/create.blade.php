@extends('layouts/layoutMaster')

@section('title', 'Add Clients')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.css') }}" />
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>
@endsection


@section('content')
    <h4 class="py-3 breadcrumb-wrapper mb-4"><span class="text-muted fw-light">Dasbhoard/</span> Add Clients</h4>

    <!-- Add client form -->
    <form class="form_client" action="#" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card mb-4">
            <h5 class="card-header">
                <span>Add client</span>

            </h5>
            <div class="card-body">
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
                        <label class="form-label" for="land_document_requested">land_document_requested</label>
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
                        <label class="form-label" for="interlocutor_appointment">interlocutor_appointment</label>
                        <input type="text" class="form-control datepicker" name="desired_rd1_date">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="exchange_validated_by">exchange_validated_by</label>
                        <input type="text" class="form-control" name="exchange_validated_by">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="assignment_prospect_rd1_validation">assignment_prospect_rd1_validation</label>
                        <input type="text" class="form-control" name="assignment_prospect_rd1_validation">
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                {{-- <button type="button" class="btn btn-info me-sm-3 me-1" onclick="add_new_client()">Add New
                    Client</button> --}}
            </div>
        </div>
    </form>

@endsection

@section('page-script')
    <script src="{{ asset('assets/js/form-layouts.js') }}"></script>
    <script>
        $("body").on("click", ".remove_client", function() {
            $(this).parent().parent().remove();
        })

        $("body").on("click", "#basic-default-password", function() {
            if ($('input[aria-describedby="basic-default-password"]').attr('type') == 'password') {
                $('input[aria-describedby="basic-default-password"]').attr('type', 'text');
            } else {
                $('input[aria-describedby="basic-default-password"]').attr('type', 'password');
            }
        })

    </script>

    <script>
        $(document).ready(function() {
            $('.datepicker').datepicker({
                format: 'mm/dd/yyyy',
            });
        })
    </script>
@endsection
