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
            <form action="{{ route('rd2interviews.update', $prospect->id) }}" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="prospect_id" value="{{ $prospect->id }}">

                <div class="content-header mb-3">
                  <h4 class="mb-0">STEP-1: WEAR INFORMATION AND TEAR</h4>
                  <small>Enter WEAR INFORMATION AND TEAR</small>
              </div>
              <!-- Account Details -->
              <div class="row ">
                 @include('backend.rd2interviews.layouts.edit.caller')
                 @include('backend.rd2interviews.layouts.edit.browers')

              </div>
              <hr />

              <div class="row mt-2">
                @include('backend.rd2interviews.layouts.edit.landChargeInfo')
                  @include('backend.rd2interviews.layouts.edit.householdResourceCapacity')
              </div>
              <hr />
              <div class="row mt-2">
                @include('backend.rd2interviews.layouts.edit.householdDocument')

                @include('backend.rd2interviews.layouts.edit.financingCondition')
              </div>
              <hr />
             @include('backend.rd2interviews.layouts.edit.projectFinancing')
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
