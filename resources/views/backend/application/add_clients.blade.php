@extends('layouts/layoutMaster')

@section('title', 'Add Clients')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.css')}}" />
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.js')}}"></script>
@endsection


@section('content')
    <h4 class="py-3 breadcrumb-wrapper mb-4"><span class="text-muted fw-light">Dasbhoard/</span> Add Clients</h4>

    <!-- Add client form -->
    <form class="form_client" action="{{ route('customers.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card mb-4">
            <h5 class="card-header">
              <span>Add client</span>
              <span style="width: 200px" class="d-inline-block ms-2">
                <select name="add_multiple_client" class="form-control" id="add_multiple_client" onchange="add_new()">
                  <option value="single">1 Signer</option>
                  <option value="dual">2 Signer</option>
                </select>
              </span>
            </h5>
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label" for="first_name">First Name</label>
                        <input type="text" name="first_name[]" class="form-control" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="last_name">Last Name</label>
                        <input type="text" name="last_name[]" class="form-control" />
                    </div>
                    <div class="col-md-6">
                      <label class="form-label" for="email">Email</label>
                      <input type="email" name="email[]" class="form-control"/>
                    </div>
                    <div class="col-md-6">
                      <label class="form-label" for="email">HOA Name & Number</label>
                      <input type="text" name="hoa" class="form-control" required/>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="phone">Phone No</label>
                        <input type="text" name="phone[]" class="form-control phone-mask" placeholder="658 799 8941"
                            aria-label="658 799 8941" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="Street">Street</label>
                        <input type="text" name="street[]" class="form-control" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="City">City</label>
                        <input type="text" name="city[]" class="form-control" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="Zip">Zip</label>
                        <input type="number" name="zip[]" class="form-control" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="State">State</label>
                        <input type="text" name="state[]" class="form-control" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="dob">Date of birth</label>
                        <input type="text" name="dob[]" class="form-control datepicker" placeholder="10/10/1997" />
                    </div>
                </div>
                <hr class="my-4 mx-n4" />
                <h6 class="fw-normal">Extra Information</h6>
                <div class="row g-3">
                    <div class="col-12">
                        <div class="form-password-toggle">
                            <label class="form-label" for="ssn">SSN(Social Security Number)</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="ssn"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-describedby="basic-default-password" name="ssn[]"/>
                                <span id="basic-default-password" class="input-group-text cursor-pointer"><i
                                        class="bx bx-hide"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-md-4 col-sm-6">
                        <label class="form-label" for="driver_license">Driver License Number</label>
                        <input type="text" class="form-control" name="driver_license[]" />
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <label class="form-label" for="dl_issue_date">Driver License Issue Date</label>
                        <input type="text" class="form-control datepicker" name="dl_issue_date[]" />
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <label class="form-label" for="dl_exp_date">Driver License Exp Date</label>
                        <input type="text" class="form-control datepicker" name="dl_exp_date[]" />
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-md-4">
                        <label class="form-label" for="anual_gross_income">Anual Gross Income</label>
                        <input type="text" class="form-control" name="anual_gross_income[]">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="additional_income">Additional Income</label>
                        <input type="text" class="form-control" name="additional_income[]">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="driver_license_photo">Driver License Photo</label>
                        <input type="file" class="form-control" name="driver_license_photo[]">
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
          if($('input[aria-describedby="basic-default-password"]').attr('type') == 'password') {
            $('input[aria-describedby="basic-default-password"]').attr('type', 'text');
          } else {
            $('input[aria-describedby="basic-default-password"]').attr('type', 'password');
          }
        })

        function add_new() {
          var val = $("#add_multiple_client").val();
          if(val == 'dual') {
                add_new_client();
          } else {
            $('[client_no="second"]').remove();
          }
        }

        function add_new_client() {
            var street = $('[name="street[]"]').val();
            var city = $('[name="city[]"]').val();
            var zip = $('[name="zip[]"]').val();
            var state = $('[name="state[]"]').val();
            var html = `
    <div client_no="second">
    <hr style="border: 1px solid red">
    <h3 class="d-flex justify-content-between"><span>New client form</h3>
    <div class="row g-3">
        <div class="col-md-6">
            <label class="form-label" for="first_name">First Name 02</label>
            <input type="text" id="first_name" name="first_name[]" class="form-control" />
        </div>
        <div class="col-md-6">
            <label class="form-label" for="last_name">Last Name 02</label>
            <input type="text" id="last_name" name="last_name[]" class="form-control" />
        </div>
        <div class="col-md-6">
            <label class="form-label" for="email">Email 02</label>
            <input type="email" name="email[]" class="form-control"/>
        </div>
        <div class="col-md-6">
            <label class="form-label" for="phone">Phone No 02</label>
            <input type="text" id="phone" name="phone[]" class="form-control phone-mask"
                placeholder="658 799 8941" aria-label="658 799 8941" />
        </div>

        <div class="col-md-6">
            <label class="form-label" for="dob">Date of birth</label>
            <input type="text" id="dob" name="dob[]"
                class="form-control datepicker" />
        </div>
    </div>
    <hr class="my-4 mx-n4" />
    <h6 class="fw-normal">Extra Information</h6>
    <div class="row g-3">
        <div class="col-12">
            <label class="form-label" for="ssn">SSN(Social Security Number)</label>
            <input type="text" id="ssn" class="form-control" name="ssn[]" />
        </div>
    </div>
    <div class="row g-3">
        <div class="col-md-4 col-sm-6">
            <label class="form-label" for="driver_license">Driver License Number</label>
            <input type="text" id="driver_license" class="form-control" name="driver_license[]" />
        </div>
        <div class="col-md-4 col-sm-6">
            <label class="form-label" for="dl_issue_date">Driver License Issue Date</label>
            <input type="text" id="dl_issue_date" class="form-control datepicker" name="dl_issue_date[]" />
        </div>
        <div class="col-md-4 col-sm-6">
            <label class="form-label" for="dl_exp_date">Driver License Exp Date</label>
            <input type="text" id="dl_exp_date" class="form-control datepicker" name="dl_exp_date[]" />
        </div>
    </div>
    <div class="row g-3">
      <div class="col-md-4">
            <label class="form-label" for="anual_gross_income">Anual Gross Income</label>
            <input type="text" class="form-control" name="anual_gross_income[]">
        </div>
        <div class="col-md-4">
          <label class="form-label" for="additional_income">Additional Income</label>
            <input type="text" class="form-control" name="additional_income[]">
        </div>
        <div class="col-md-4">
            <label class="form-label" for="driver_license_photo">Driver License Number</label>
            <input type="file" class="form-control" name="driver_license_photo[]">
        </div>
      </div>
    </div>
    `;
            $(".form_client .card-body").append(html);
        }
    </script>

  <script>
    $(document).ready(function () {
      $('.datepicker').datepicker({
          format: 'mm/dd/yyyy',
      });
    })
  </script>
@endsection
