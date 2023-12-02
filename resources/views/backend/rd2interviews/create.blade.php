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
                <input type="hidden" name="prospect_id" value="{{ $id }}">

                <div class="nav-align-top mb-4">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                                data-bs-target="#navs-top-caller" aria-controls="navs-top-caller" aria-selected="true">Step
                                1</button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                data-bs-target="#navs-top-cobrower" aria-controls="navs-top-cobrower"
                                aria-selected="false">Step 2</button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                data-bs-target="#navs-top-landcharge" aria-controls="navs-top-landcharge"
                                aria-selected="false">Step 3</button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                data-bs-target="#navs-top-householdresource" aria-controls="navs-top-householdresource"
                                aria-selected="false">Step 4</button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                data-bs-target="#navs-top-householddocs" aria-controls="navs-top-householddocs"
                                aria-selected="false">Step 5</button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                data-bs-target="#navs-top-financialconds" aria-controls="navs-top-financialconds"
                                aria-selected="false">Step 6</button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                data-bs-target="#navs-top-projectfinc" aria-controls="navs-top-projectfinc"
                                aria-selected="false">Step 7</button>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="navs-top-caller" role="tabpanel">

                            @include('backend.rd2interviews.layouts.caller')

                        </div>
                        <div class="tab-pane fade" id="navs-top-cobrower" role="tabpanel">
                            @include('backend.rd2interviews.layouts.browers')
                        </div>
                        <div class="tab-pane fade" id="navs-top-landcharge" role="tabpanel">
                            @include('backend.rd2interviews.layouts.landChargeInfo')
                        </div>
                        <div class="tab-pane fade" id="navs-top-householdresource" role="tabpanel">

                           @include('backend.rd2interviews.layouts.householdResourceCapacity')

                        </div>
                        <div class="tab-pane fade" id="navs-top-householddocs" role="tabpanel">

                          @include('backend.rd2interviews.layouts.householdDocument')

                        </div>
                        <div class="tab-pane fade" id="navs-top-financialconds" role="tabpanel">
                          @include('backend.rd2interviews.layouts.financingCondition')

                        </div>
                        <div class="tab-pane fade" id="navs-top-projectfinc" role="tabpanel">
                          @include('backend.rd2interviews.layouts.projectFinancing')
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- /Default Icons Wizard -->


    </div>
@endsection
