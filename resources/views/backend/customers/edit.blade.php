@extends('layouts/layoutMaster')

@section('title', ' Edit - Application')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.css')}}" />
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{asset('assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.js')}}"></script>
@endsection


@section('content')
    <h4 class="py-3 breadcrumb-wrapper mb-4"><span class="text-muted fw-light">Dashboard/</span> Customer</h4>

<!-- Form with Tabs -->
<form action="{{route('customer.update', $customer->id)}}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')
<input type="hidden" name="application_id" value="{{$customer->application_id}}">
<div class="row">
  <div class="col">
    <h6 class="mt-4"> Applied customers </h6>
    <div class="card mb-3 p-3">
      <div class="row g-3">
          <div class="col-md-6">
              <label class="form-label" for="first_name">First Name</label>
              <input type="text" name="first_name[]" value="{{$customer->first_name}}" class="form-control" />
          </div>
          <div class="col-md-6">
              <label class="form-label" for="last_name">Last Name</label>
              <input type="text" name="last_name[]" value="{{$customer->last_name}}" class="form-control" />
          </div>
          <div class="col-md-6">
            <label class="form-label" for="email">Email</label>
            <input type="email" name="email[]" value="{{$customer->email}}" class="form-control"/>
          </div>
          <div class="col-md-6">
              <label class="form-label" for="hoa">HOA Name & Number</label>
              <input type="text" name="hoa" value="{{$customer->phone}}" class="form-control" required/>
          </div>
          <div class="col-md-6">
              <label class="form-label" for="phone">Phone No</label>
              <input type="text" name="phone[]" value="{{$customer->phone}}" class="form-control phone-mask"
                  placeholder="658 799 8941" aria-label="658 799 8941" />
          </div>
          <div class="col-md-6">
              <label class="form-label" for="Street">Street</label>
              <input type="text" name="street[]" value="{{$customer->street}}" class="form-control" />
            </div>
          <div class="col-md-6">
              <label class="form-label" for="City">City</label>
              <input type="text" name="city[]" value="{{$customer->city}}" class="form-control" />
          </div>
          <div class="col-md-6">
              <label class="form-label" for="Zip">Zip</label>
              <input type="number" name="zip[]" value="{{$customer->zip}}" class="form-control" />
          </div>
          <div class="col-md-6">
              <label class="form-label" for="State">State</label>
              <input type="text" name="state[]" value="{{$customer->state}}" class="form-control" />
          </div>
          <div class="col-md-6">
              <label class="form-label" for="dob">Date of birth</label>
              <input type="text" name="dob[]" value="{{$customer->dob}}"
                  class="form-control datepicker"/>
          </div>
      </div>
      <hr class="my-4 mx-n4" />
      <h6 class="fw-normal">Extra Information</h6>
      <div class="row g-3">
          <div class="col-12">
              <div class="form-password-toggle">
                <label class="form-label" for="ssn">SSN(Social Security Number)</label>
                <div class="input-group">
                    <input type="password" class="form-control" id="ssn" value="{{auth()->user()->role != 'sales' ? $customer->ssn : ""}}"
                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                        aria-describedby="basic-default-password" name="ssn[]" {{auth()->user()->role != 'sales' ? "" : "disabled"}}/>
                    <span id="basic-default-password" class="input-group-text cursor-pointer"><i
                            class="bx bx-hide"></i></span>
                </div>
          </div>
      </div>
      <div class="row g-3">
          <div class="col-md-4 col-sm-6">
              <label class="form-label" for="driver_license">Driver License Number</label>
              <input type="text" class="form-control" value="{{auth()->user()->role != 'sales' ? $customer->driver_license : ""}}" name="driver_license[]" {{auth()->user()->role != 'sales' ? "" : "disabled"}}/>
          </div>
          <div class="col-md-4 col-sm-6">
              <label class="form-label" for="dl_issue_date">Driver License Issue Date</label>
              <input type="text" class="form-control datepicker" value="{{$customer->dl_issue_date}}" name="dl_issue_date[]" />
          </div>
          <div class="col-md-4 col-sm-6">
              <label class="form-label" for="dl_exp_date">Driver License Exp Date</label>
              <input type="text" name="dl_exp_date[]" class="form-control datepicker" value="{{$customer->dl_exp_date}}"/>
          </div>
      </div>
      <div class="row g-3">
        <div class="col-md-4">
          <label class="form-label" for="anual_gross_income">Anual Gross Income</label>
          <input type="text" class="form-control" value="{{$customer->anual_gross_income}}" name="anual_gross_income[]">
        </div>
        <div class="col-md-4">
          <label class="form-label" for="additional_income">Additional Income</label>
            <input type="text" class="form-control" value="{{$customer->additional_income}}" name="additional_income[]">
        </div>
        <div class="col-md-4">
            <label class="form-label" for="driver_license_photo">Driver License Photo</label>
            <input type="file" class="form-control mb-1" value="/licenses/{{$customer->driver_license_photo}}" name="driver_license_photo[]">
            <a href="/licenses/{{$customer->driver_license_photo}}" class="" target="_blank"><img src="/licenses/{{$customer->driver_license_photo}}" class="border" style="max-height: 60px"></a>
        </div>
      </div>
    </div>
  </div>
</div>

@isset($customer->signer)
<div class="row">
  <div class="col">
    <h6 class="mt-4"> Signer 02 </h6>
    <div class="card mb-3 p-3">
      <div class="row g-3">
          <div class="col-md-6">
              <label class="form-label" for="first_name">First Name</label>
              <input type="text" name="first_name[]" value="{{$customer->signer->first_name}}" class="form-control" />
          </div>
          <div class="col-md-6">
              <label class="form-label" for="last_name">Last Name</label>
              <input type="text" name="last_name[]" value="{{$customer->signer->last_name}}" class="form-control" />
          </div>
          <div class="col-md-6">
            <label class="form-label" for="email">Email</label>
            <input type="email" name="email[]" value="{{$customer->signer->email}}" class="form-control"/>
          </div>
          <div class="col-md-6">
              <label class="form-label" for="phone">Phone No</label>
              <input type="text" name="phone[]" value="{{$customer->signer->phone}}" class="form-control phone-mask"
                  placeholder="658 799 8941" aria-label="658 799 8941" />
          </div>
          <div class="col-md-6">
              <label class="form-label" for="dob">Date of birth</label>
              <input type="text" name="dob[]" value="{{$customer->signer->dob}}"
                  class="form-control datepicker"/>
          </div>
      </div>
      <hr class="my-4 mx-n4" />
      <h6 class="fw-normal">Extra Information</h6>
      <div class="row g-3">
          <div class="col-12">
              <div class="form-password-toggle">
                <label class="form-label" for="ssn">SSN(Social Security Number)</label>
                <div class="input-group">
                    <input type="password" class="form-control" id="ssn" value="{{auth()->user()->role != 'sales' ? $customer->signer->ssn : ""}}"
                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                        aria-describedby="basic-default-password" name="ssn[]" {{auth()->user()->role != 'sales' ? "" : "disabled"}}/>
                    <span id="basic-default-password" class="input-group-text cursor-pointer"><i
                            class="bx bx-hide"></i></span>
                </div>
          </div>
      </div>
      <div class="row g-3">
          <div class="col-md-4 col-sm-6">
              <label class="form-label" for="driver_license">Driver License Number</label>
              <input type="text" class="form-control" value="{{auth()->user()->role != 'sales' ? $customer->signer->driver_license : ""}}" name="driver_license[]" {{auth()->user()->role != 'sales' ? "" : "disabled"}}/>
          </div>
          <div class="col-md-4 col-sm-6">
              <label class="form-label" for="dl_issue_date">Driver License Issue Date</label>
              <input type="text" class="form-control datepicker" value="{{$customer->signer->dl_issue_date}}" name="dl_issue_date[]" />
          </div>
          <div class="col-md-4 col-sm-6">
              <label class="form-label" for="dl_exp_date">Driver License Exp Date</label>
              <input type="text" name="dl_exp_date[]" class="form-control datepicker" value="{{$customer->signer->dl_exp_date}}"/>
          </div>
      </div>
      <div class="row g-3">
        <div class="col-md-4">
          <label class="form-label" for="anual_gross_income">Anual Gross Income</label>
          <input type="text" class="form-control" value="{{$customer->signer->anual_gross_income}}" name="anual_gross_income[]">
        </div>
        <div class="col-md-4">
          <label class="form-label" for="additional_income">Additional Income</label>
            <input type="text" class="form-control" value="{{$customer->signer->additional_income}}" name="additional_income[]">
        </div>
        <div class="col-md-4">
            <label class="form-label" for="driver_license_photo">Driver License Photo</label>
            <input type="file" class="form-control mb-1" value="/licenses/{{$customer->signer->driver_license_photo}}" name="signer_driver_license_photo">
            <a href="/licenses/{{$customer->signer->driver_license_photo}}" class="" target="_blank"><img src="/licenses/{{$customer->signer->driver_license_photo}}" class="border" style="max-height: 60px"></a>
        </div>
      </div>
    </div>
  </div>
</div>
@endisset

<div class="row">
  <div class="col-lg">
      <div class="card mb-4">
          <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th><small>Monthly KW per Usage</small></th>
                                <th>Monthly Payment</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                          @php
                              $monthly_usages = json_decode($customer->application->monthly_usage, true);
                              $monthly_payment = json_decode($customer->application->monthly_payment, true);
                              $total = 0;
                              $total_monthly_payments = 0;
                              $count = 0;
                              foreach ($monthly_usages as $key => $value) {
                                $total += (int)$value;
                              }
                              foreach ($monthly_payment as $key => $payment) {
                                $total_monthly_payments += (int)$payment;
                                if($payment) {
                                  $count++;
                                }
                              }
                              $monthly_avg = $total_monthly_payments / ($count == 0 ? 1 : $count);
                          @endphp
                            <tr>
                                <td>1</td>
                                <td><input type="number" value="{{$monthly_usages[0]}}" class="form-control form-control-sm monthly_usage text-end" name="monthly_usage[]" onkeyup="calculate()"></td>
                                <td><input type="number" value="{{$monthly_payment[0]}}" class="form-control form-control-sm monthly_payment text-end" name="monthly_payment[]" onkeyup="avg_monthly_payment()"></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><input type="number" value="{{$monthly_usages[1]}}" class="form-control form-control-sm monthly_usage text-end" name="monthly_usage[]" onkeyup="calculate()"></td>
                                <td><input type="number" value="{{$monthly_payment[1]}}" class="form-control form-control-sm monthly_payment text-end" name="monthly_payment[]" onkeyup="avg_monthly_payment()"></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><input type="number" value="{{$monthly_usages[2]}}" class="form-control form-control-sm monthly_usage text-end" name="monthly_usage[]" onkeyup="calculate()"></td>
                                <td><input type="number" value="{{$monthly_payment[2]}}" class="form-control form-control-sm monthly_payment text-end" name="monthly_payment[]" onkeyup="avg_monthly_payment()"></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><input type="number" value="{{$monthly_usages[3]}}" class="form-control form-control-sm monthly_usage text-end" name="monthly_usage[]" onkeyup="calculate()"></td>
                                <td><input type="number" value="{{$monthly_payment[3]}}" class="form-control form-control-sm monthly_payment text-end" name="monthly_payment[]" onkeyup="avg_monthly_payment()"></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td><input type="number" value="{{$monthly_usages[4]}}" class="form-control form-control-sm monthly_usage text-end" name="monthly_usage[]" onkeyup="calculate()"></td>
                                <td><input type="number" value="{{$monthly_payment[4]}}" class="form-control form-control-sm monthly_payment text-end" name="monthly_payment[]" onkeyup="avg_monthly_payment()"></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td><input type="number" value="{{$monthly_usages[5]}}" class="form-control form-control-sm monthly_usage text-end" name="monthly_usage[]" onkeyup="calculate()"></td>
                                <td><input type="number" value="{{$monthly_payment[5]}}" class="form-control form-control-sm monthly_payment text-end" name="monthly_payment[]" onkeyup="avg_monthly_payment()"></td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td><input type="number" value="{{$monthly_usages[6]}}" class="form-control form-control-sm monthly_usage text-end" name="monthly_usage[]" onkeyup="calculate()"></td>
                                <td><input type="number" value="{{$monthly_payment[6]}}" class="form-control form-control-sm monthly_payment text-end" name="monthly_payment[]" onkeyup="avg_monthly_payment()"></td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td><input type="number" value="{{$monthly_usages[7]}}" class="form-control form-control-sm monthly_usage text-end" name="monthly_usage[]" onkeyup="calculate()"></td>
                                <td><input type="number" value="{{$monthly_payment[7]}}" class="form-control form-control-sm monthly_payment text-end" name="monthly_payment[]" onkeyup="avg_monthly_payment()"></td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td><input type="number" value="{{$monthly_usages[8]}}" class="form-control form-control-sm monthly_usage text-end" name="monthly_usage[]" onkeyup="calculate()"></td>
                                <td><input type="number" value="{{$monthly_payment[8]}}" class="form-control form-control-sm monthly_payment text-end" name="monthly_payment[]" onkeyup="avg_monthly_payment()"></td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td><input type="number" value="{{$monthly_usages[9]}}" class="form-control form-control-sm monthly_usage text-end" name="monthly_usage[]" onkeyup="calculate()"></td>
                                <td><input type="number" value="{{$monthly_payment[9]}}" class="form-control form-control-sm monthly_payment text-end" name="monthly_payment[]" onkeyup="avg_monthly_payment()"></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td><input type="number" value="{{$monthly_usages[10]}}" class="form-control form-control-sm monthly_usage text-end" name="monthly_usage[]" onkeyup="calculate()"></td>
                                <td><input type="number" value="{{$monthly_payment[10]}}" class="form-control form-control-sm monthly_payment text-end" name="monthly_payment[]" onkeyup="avg_monthly_payment()"></td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td><input type="number" value="{{$monthly_usages[11]}}" class="form-control form-control-sm monthly_usage text-end" name="monthly_usage[]" onkeyup="calculate()"></td>
                                <td><input type="number" value="{{$monthly_payment[11]}}" class="form-control form-control-sm monthly_payment text-end" name="monthly_payment[]" onkeyup="avg_monthly_payment()"></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td class="yearly_total_usage text-bold text-end">{{ $total }}</td>
                              <td class="avg_monthly_payment text-bold text-end">{{ printf("%1\$.1f", (int)$monthly_avg) }}</td>
                            </tr>
                          </tbody>
                          <tfoot>
                            <tr>
                                <td></td>
                                <td class="text-end"><small><strong>Total Yearly Usage[KW]</strong></small></td>
                                <td class="text-end"><small><strong>Avg Monthly Bill[USD]</strong></small></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
          </div>
      </div>
      @if(auth()->user()->role != 'sales')
      <div class="card">
        <div class="card-body">
          <label class="form-label" for="Status">Status</label>
          <select name="status" id="" class="form-control">
            <option value="pending" {{$customer->status == 'pending' ? "selected" : ""}}>Pending</option>
            <option value="approved" {{$customer->status == 'approved' ? "selected" : ""}}>Approved</option>
            <option value="client" {{$customer->status == 'client' ? "selected" : ""}}>Client</option>
            <option value="decliend" {{$customer->status == 'decliend' ? "selected" : ""}}>Decliend</option>
          </select>
        </div>
      </div>
      @endif
  </div>
  <div class="col-lg">
      <div class="card mb-2 p-0">
          <div class="card-body p-0">

            <div class="table-responsive">
              <table class="table table-bordered">
                  <tbody class="table-border-bottom-0">
                      <tr>
                          <td><small><strong>Total Yearly Usage [KW]</strong></small></td>
                          <td><input type="number" value="{{$customer->application->total_yearly_usage}}" class="form-control form-control-sm total_yearly_usage text-end" name="total_yearly_usage" readonly></td>
                      </tr>
                      <tr>
                          <td>Monthly Avg [KW]</td>
                          <td><input type="number" value="{{$customer->application->monthly_avg}}" class="form-control form-control-sm monthly_avg text-end" name="monthly_avg" readonly></td>
                      </tr>
                      <tr>
                          <td>Daily [KW]</td>
                          <td><input type="number" value="{{$customer->application->daily}}" class="form-control form-control-sm daily text-end" name="daily" readonly></td>
                      </tr>
                    </tbody>
              </table>
            </div>
          </div>
      </div>
      <div class="card mb-2 p-0">
          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table table-bordered">
                  <tbody class="table-border-bottom-0">
                      <tr>
                          <td>Solar Program</td>
                          <td>
                            <select name="solar_program" class="form-control form-control-sm select_solar_panel" onchange="select_solar_panel();">
                              @foreach ($solar_programs as $sp)
                                    <?php
                                        $details = json_decode($sp->details, true);
                                    ?>
                                    @foreach ($details as $i=>$solar)
                                    <?php
                                        $net = (float)$solar['net_price'] / 100;
                                        $dealer_fee = number_format((float)$solar['dealer_fee'], 2, '.', '');
                                        $price = $net / (float)$solar['dealer_fee'];
                                        $name = $sp->name ."-". $solar['interest'] ."-". $solar['year'] ."Y-". $solar['net_price'];
                                    ?>
                                      <option value="{{ $name }}" price="{{$price}}" netprice="{{ $net }}" dealer_fee="{{$dealer_fee}}" {{$customer->application->solar_program == $name ? "selected" : ""}}>{{ $name }}</option>
                                    @endforeach
                              @endforeach
                            </select>
                          </td>
                      </tr>
                      <tr>
                          <td><small>Size of the Panel[W]</small></td>
                          <td>
                            <select name="size_of_panel" class="form-control form-control-sm select_size_of_panel" onchange="change_size_of_panel()">
                              @foreach ($panels as $panel)
                                <option value="{{ $panel->panel }}" {{$customer->application->size_of_panel == $panel->panel ? "selected" : ""}}>{{ $panel->panel }}</option>
                              @endforeach
                            </select>
                          </td>
                      </tr>
                    </tbody>
              </table>
            </div>
          </div>
      </div>
      <div class="card mb-2 p-0">
          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table table-bordered">
                  <tbody class="table-border-bottom-0">
                      <tr>
                          <td><small>Calculated KW/h System Size</small></td>
                          <td class="text-end"><input type="text" class="form-control form-control-sm kwh_system_size text-end" name="kwh_system_size" readonly value="{{ $customer->application->kwh_system_size }}"></td>
                      </tr>
                      <tr style="border-bottom: 8px solid rgb(220 215 215)">
                          <td><small>Calculated # of Panels</small></td>
                          <td><input type="number" class="form-control form-control-sm calculated_size_of_panel text-end" name="calculated_size_of_panel" readonly value="{{ $customer->application->calculated_size_of_panel }}"></td>
                      </tr>
                      <tr>
                          <td><small><strong>Recommended System Size</strong></small></td>
                          <td><input type="number" class="form-control form-control-sm text-end recommended_system_size" name="recommended_system_size" readonly value="{{ $customer->application->recommended_system_size }}"></td>
                      </tr>
                      <tr style="border-bottom: 8px solid rgb(220 215 215)">
                          <td><small><strong>Recommended # of Panels</strong></small></td>
                          <td><input type="number" class="form-control form-control-sm text-end recommended_size_of_panel" name="recommended_size_of_panel" readonly value="{{ $customer->application->recommended_size_of_panel }}"></td>
                      </tr>
                      <tr>
                          <td><small>Actual System Size</small></td>
                          <td><input type="number" class="form-control form-control-sm text-end actual_system_size" name="actual_system_size" readonly value="{{ $customer->application->actual_system_size }}"></td>
                      </tr>
                      <tr style="border-bottom: 8px solid rgb(220 215 215)">
                          <td><small>Actual # of Panels</small></td>
                          <td><input type="number" class="form-control form-control-sm text-end actual_no_panels" onkeyup="calculate_actual_system_size()" name="actual_no_panels" value="{{ $customer->application->actual_no_panels }}"></td>
                      </tr>
                      <tr>
                          <td>Guaranted KW per Month</td>
                          <td><input type="number" class="form-control form-control-sm text-end guaranted_kw_per_month" name="guaranted_kw_per_month" readonly value="{{ $customer->application->guaranted_kw_per_month }}"></td>
                      </tr>
                    </tbody>
              </table>
            </div>
          </div>
      </div>
      <div class="card mb-4">
          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table table-bordered">
                  <tbody class="table-border-bottom-0">
                      <tr>
                          <td class="text-end"><small><strong>Total Project Cost</strong></small></td>
                          <td class="text-end"><input type="number" class="form-control form-control-sm text-end total_project_cost" name="total_project_cost" readonly value="{{ $customer->application->total_project_cost }}"></td>
                      </tr>
                    </tbody>
              </table>
            </div>
          </div>
      </div>
  </div>
  <div class="col-lg">
      <div class="card mb-2">
        <div class="card-header py-1"><strong>Additional</strong></div>
          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table table-bordered">
                  <tbody class="table-border-bottom-0">
                      <tr>
                          <td>Panel upgrade</td>
                          <td>
                            <select class="form-control form-control-sm panel_upgrade" name="panel_upgrade">
                              <option value="{{ app_setting('panel_upgrade') }}">Y</option>
                              <option value="0" {{ (int)$customer->application->panel_upgrade == 0 ? "selected" : "" }}>N</option>
                            </select>
                          </td>
                      </tr>
                      <tr>
                          <td>HVAC system</td>
                          <td>
                            <select class="form-control form-control-sm hvac_system" name="hvac_system">
                              {{-- <option value="{{ app_setting('hvac_system') }}">Y</option> --}}
                              <option value="Y" {{ $customer->application->hvac_system == "Y" ? "selected" : "" }}>Y</option>
                              <option value="N" {{ $customer->application->hvac_system == "N" ? "selected" : "" }}>N</option>
                            </select>
                          </td>
                      </tr>
                      <tr>
                          <td>FPL connection fee</td>
                          <td>
                            <select class="form-control form-control-sm fpl_fee" name="fpl_fee">
                              <option value="{{ app_setting('connection_fee') }}">Y</option>
                              <option value="0" {{ (int)$customer->application->fpl_fee == 0 ? "selected" : "" }}>N</option>
                            </select>
                          </td>
                      </tr>
                      <tr>
                          <td>Line Conditioner</td>
                          <td>
                            <select class="form-control form-control-sm line_conditioner" name="line_conditioner">
                              <option value="{{ app_setting('line_conditioner') }}">Y</option>
                              {{-- <option value="0" {{ (int)$customer->application->line_conditioner == 0 ? "selected" : "" }}>N</option> --}}
                            </select>
                          </td>
                      </tr>
                      <tr>
                          <td>Tier2 insurance</td>
                          <td>
                            <select class="form-control form-control-sm tier_insurance" name="tier_insurance">
                              <option value="{{ app_setting('tier2_insurance') }}">Y</option>
                              <option value="0" {{ (int)$customer->application->tier_insurance == 0 ? "selected" : "" }}>N</option>
                            </select>
                          </td>
                      </tr><tr>
                        <td>Aeroseal</td>
                        <td>
                          <select class="form-control form-control-sm aeroseal" name="aeroseal">
                            <option value="{{ app_setting('aeroseal') }}" role="{{ app_setting('aeroseal') }}" {{ $customer->application->aeroseal != 0 ? "selected" : "" }}>Y</option>
                            <option value="0" {{ (int)$customer->application->aeroseal == 0 ? "selected" : "" }}>N</option>
                          </select>
                        </td>
                      </tr>
                    </tbody>
              </table>
          </div>
        </div>
      </div>
      <div class="card mb-2">
        <div class="card-header py-1"><strong>AC 1</strong></div>
          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table table-bordered">
                  <tbody class="table-border-bottom-0">
                      <tr>
                          <td>Brand</td>
                          <td>
                            <input type="hidden" class="selected_brand">
                            <select name="select_brand" class="form-control form-control-sm select_brand" id="">
                              <option value="">None</option>
                              @foreach ($brands as $item)
                                <option value="{{ $item->tonage }}" data-name="{{ $item->name }}" {{ $customer->application->brand == $item->tonage ? "selected" : "" }}>{{ $item->name }}</option>
                              @endforeach
                            </select>
                          </td>
                      </tr>
                      <tr>
                          <td>Tonage</td>
                          <td>
                            @php
                                $tonage = json_decode($customer->application->brand, true);
                            @endphp
                            <select name="tonage" class="form-control form-control-sm tonage" id="">
                              <option value="">None</option>
                              @isset($tonage)
                              @foreach ($tonage as $item)
                              <option value="{{$item['tonage']}}" price="{{$item['price']}}" {{$customer->application->tonage == $item['tonage'] ? "selected" : ""}}>{{$item['tonage']}}</option>
                            @endforeach
                              @endisset
                            </select>
                          </td>
                      </tr>
                      {{-- <tr>
                          <td>Financing</td>
                          <td>
                            <select name="financing" class="form-control form-control-sm financing">
                              <option value="">None</option>
                              @foreach ($finances as $finance)
                                <option value="{{ $finance->discount }}" {{ $customer->application->financ_discount == $finance->type ? "selected" : "" }}>{{ $finance->type }}</option>
                              @endforeach
                            </select>
                          </td>
                      </tr> --}}
                    </tbody>
              </table>
          </div>
        </div>
      </div>
      <div class="card mb-2">
        <div class="card-header py-1"><strong>Estimated Monthly Payment</strong></div>
          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table table-bordered">
                    <tbody class="table-border-bottom-0">
                      <tr>
                          <td>Service Finance payment</td>
                          <td><input type="number" name="service_finance_payment" class="form-control form-control-sm service_finance_payment text-end" value="{{$customer->application->service_finance_payment}}" readonly></td>
                      </tr>
                      <tr>
                          <td>PACE payment</td>
                          <td><input type="number" name="pace_payment" value="{{$customer->application->pace_payment}}" class="form-control form-control-sm text-end pace_payment" readonly></td>
                      </tr>
                      <tr>
                        <td>SUNLIGHT payment</td>
                        <td><input type="number" name="sunlight_payment" value="{{$customer->application->sunlight_payment}}" class="form-control form-control-sm text-end sunlight_payment" readonly></td>
                      </tr>
                      <tr>
                          <td>PACE after tax*</td>
                          <td><input type="number" name="pace_after_tax" value="{{$customer->application->pace_after_tax}}" class="form-control form-control-sm text-end pace_after_tax" readonly></td>
                      </tr>
                      <tr>
                          <td>Mosaic</td>
                          <td><input type="number" class="form-control form-control-sm text-end mosaic" value="{{$customer->application->mosaic}}" name="mosaic" readonly></td>
                      </tr>
                    </tbody>
              </table>
          </div>
      </div>
  </div>
</div>
<div class="row my-3">
  <div class="col">
    <div class="card">
      <h5 class="card-header pb-1">Added By</h5>
      <div class="card-body">
        <div class="row">
          <div class="col">
              <label class="form-label" for="Name">Name</label>
              <input type="text" value="{{$customer->user->name ?? 'Not Found' }}" class="form-control" readonly/>
          </div>
          <div class="col">
              <label class="form-label" for="Username">Username</label>
              <input type="text" value="{{$customer->user->user_name ?? 'Not Found' }}" class="form-control" readonly/>
          </div>
          <div class="col">
              <label class="form-label" for="Email">Email</label>
              <input type="text" value="{{$customer->user->email ?? 'Not Found' }}" class="form-control" readonly/>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@if(auth()->user()->role != 'sales')
  <div class="row mb-5">
      <div class="btn-group">
        <input type="submit" value="Update" class="btn btn-primary btn-block">
        <input type="button" value="Send Contract" class="btn btn-info" id="updateForm" data-bs-toggle="modal" data-bs-target="#updateCRM">
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</button>
      </div>
  </div>
@endif
</form>


{{-- Remove finance --}}
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <form action="{{route('customers.destroy', $customer->id)}}" method="POST">
              @csrf
              @method('DELETE')
                <div class="modal-header">
                  <h5 class="modal-title" id="deleteModalLabel">Delete Application</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <p>Are you sure to delete this Application?</p>
                  @csrf
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary text-white" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-danger text-white ">Delete</button>
              </div>
            </form>
        </div>
    </div>
</div>



{{-- Remove finance --}}
<div class="modal fade" id="updateCRM" tabindex="-1" aria-labelledby="updateCRM"
    aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <form action="" method="POST">
              @csrf
              @method('DELETE')
                <div class="modal-header">
                  <h5 class="modal-title" id="updateCRMLabel">Update to CRM</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <p>Are you sure to update the zoho crm?</p>
                  @csrf
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary text-white" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary text-white updatezoho" data-bs-dismiss="modal">Yes</button>
              </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/form-layouts.js') }}"></script>
    <script>
      $("body").on("click", "#basic-default-password", function() {
          if($('input[aria-describedby="basic-default-password"]').attr('type') == 'password') {
            $('input[aria-describedby="basic-default-password"]').attr('type', 'text');
          } else {
            $('input[aria-describedby="basic-default-password"]').attr('type', 'password');
          }
        })

        $("body").on("click", ".updatezoho", function() {
          var application_id = "{{$customer->application_id}}";
          var url = "{{route('update_zoho', ":id")}}";
          url = url.replace(":id", application_id);
          $.ajax({
            type: "GET",
            url : url,
            success: function(response) {
              console.log(response);
            }
          })
        })
    </script>
<script>
  $(document).ready(function () {
    $('.datepicker').datepicker({
        format: 'mm/dd/yyyy',
    });
  })
</script>
  @include('backend.calculation_scripts')

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
