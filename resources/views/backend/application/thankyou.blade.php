@extends('layouts/layoutMaster')

@section('title', 'Thank you')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
@endsection

@section('content')
    <h4 class="py-3 breadcrumb-wrapper mb-4"><span class="text-muted fw-light">Dashboard/</span> Application submitted</h4>


    <div class="row mb-5">
      <div class="col-md-3 col-lg-4"></div>
      <div class="col-md-6 col-lg-4 mb-3">
        <div class="card">
          <h5 class="card-header text-center">Application Submission</h5>
          <div class="card-body">
            <blockquote class="blockquote mb-0 text-center">
              <p>
                Thank you so much. Your application is under review. Authority will contact with you soon.
              </p>
            </blockquote>
          </div>
        </div>
      </div>
    </div>

@endsection
@section('page-style')
<style>
.table > :not(caption) > * > * {
  padding: 0.25rem .5rem;
}
.text-bold {
  font-weight: bold;
}
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
input[type=number] {
  -moz-appearance: textfield;
}
input[readonly],
input[readonly]:focus {
  background: #ddd;
}
</style>
@endsection
