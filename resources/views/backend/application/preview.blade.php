@extends('layouts/layoutMaster')

@section('title', ' Preview - Application')

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
    <h4 class="py-3 breadcrumb-wrapper mb-4"><span class="text-muted fw-light">Dashboard/</span> Preview</h4>

<!-- Form with Tabs -->
<form action="{{route('customers.update')}}" method="POST" enctype="multipart/form-data">
@csrf
<input type="hidden" name="application_id" value="{{$application->id}}">
<div class="row">
  <div class="col">
    <h6 class="mt-4"> Applied customers <small>({{ count($customers) == 2 ? 2 : 1 }} Signer)</small></h6>
    <div class="card mb-3">
      <div class="card-header border-bottom">
        <ul class="nav nav-tabs card-header-tabs" role="tablist">
          @foreach ($customers as $i => $customer)
            <li class="nav-item">
              <button type="button" class="nav-link {{$i == 0 ? 'active' : ''}}" data-bs-toggle="tab" data-bs-target="#form-tabs-{{$customer->id}}" role="tab" aria-selected="true">{{ $customer->first_name }}  {{ $customer->last_name }}</button>
            </li>
          @endforeach
        </ul>
      </div>

      <div class="tab-content">
        <!-- Personal Info -->
        @foreach ($customers as $i => $customer)
          <div class="tab-pane fade {{$i == 0 ? 'active show' : ''}}" id="form-tabs-{{$customer->id}}" role="tabpanel">
            <input type="hidden" name="ids[]" value="{{$customer->id}}">
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
                    <input type="text" name="email[]" value="{{$customer->email}}" class="form-control"/>
                  </div>
                  @if($i == 0)
                    <div class="col-md-6">
                      <label class="form-label" for="email">HOA Name & Number</label>
                      <input type="text" name="hoa" value="{{$customer->hoa_name_number}}" class="form-control" required/>
                    </div>
                  @endif
                  <div class="col-md-6">
                      <label class="form-label" for="phone">Phone No</label>
                      <input type="text" name="phone[]" value="{{$customer->phone}}" class="form-control phone-mask"
                          placeholder="658 799 8941" aria-label="658 799 8941" />
                  </div>
                  @if($i == 0)
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
                  @endif
                  <div class="col-md-6">
                      <label class="form-label" for="dob">Date of birth</label>
                      <input type="text" name="dob[]" value="{{$customer->dob}}"
                          class="form-control datepicker"  placeholder="10/10/1997" />
                  </div>
              </div>
              <hr class="my-4 mx-n4" />
              <h6 class="fw-normal">Extra Information</h6>
              <div class="row g-3">
                  <div class="col-12">
                    <div class="input-group">
                      <input type="password" class="form-control" id="ssn" value="{{$customer->ssn}}"
                          placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                          aria-describedby="basic-default-password{{$i}}" name="ssn[]"/>
                      <span target="basic-default-password{{$i}}" class="input-group-text view_ssn cursor-pointer"><i
                              class="bx bx-hide"></i></span>
                  </div>
                  </div>
              </div>
              <div class="row g-3">
                  <div class="col-md-4 col-sm-6">
                      <label class="form-label" for="driver_license">Driver License Number</label>
                      <input type="text" class="form-control" value="{{$customer->driver_license}}" name="driver_license[]"/>
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
                      <input type="file" class="form-control" value="/licenses/{{$customer->driver_license_photo}}" name="driver_license_photo[]">
                      <a href="/licenses/{{$customer->driver_license_photo}}" target="_blank"><img src="/licenses/{{$customer->driver_license_photo}}" class="border" style="max-height: 60px"></a>
                  </div>
              </div>

          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>


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
                              $monthly_usages = json_decode($application->monthly_usage, true);
                              $monthly_payment = json_decode($application->monthly_payment, true);
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
                              <td class="avg_monthly_payment text-bold text-end">{{ $monthly_avg }}</td>
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
  </div>
  <div class="col-lg">
      <div class="card mb-2 p-0">
          <div class="card-body p-0">

            <div class="table-responsive">
              <table class="table table-bordered">
                  <tbody class="table-border-bottom-0">
                      <tr>
                          <td><small><strong>Total Yearly Usage [KW]</strong></small></td>
                          <td><input type="number" value="{{$application->total_yearly_usage}}" class="form-control form-control-sm total_yearly_usage text-end" name="total_yearly_usage" readonly></td>
                      </tr>
                      <tr>
                          <td>Monthly Avg [KW]</td>
                          <td><input type="number" value="{{$application->monthly_avg}}" class="form-control form-control-sm monthly_avg text-end" name="monthly_avg" readonly></td>
                      </tr>
                      <tr>
                          <td>Daily [KW]</td>
                          <td><input type="number" value="{{$application->daily}}" class="form-control form-control-sm daily text-end" name="daily" readonly></td>
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
                                      <option value="{{ $name }}" price="{{$price}}" netprice="{{ $net }}" dealer_fee="{{$dealer_fee}}" {{$application->solar_program == $name ? "selected" : ""}}>{{ $name }}</option>
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
                                <option value="{{ $panel->panel }}" {{$application->size_of_panel == $panel->panel ? "selected" : ""}}>{{ $panel->panel }}</option>
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
                          <td class="text-end"><input type="text" class="form-control form-control-sm kwh_system_size text-end" name="kwh_system_size" readonly value="{{ $application->kwh_system_size }}"></td>
                      </tr>
                      <tr style="border-bottom: 8px solid rgb(220 215 215)">
                          <td><small>Calculated # of Panels</small></td>
                          <td><input type="number" class="form-control form-control-sm calculated_size_of_panel text-end" name="calculated_size_of_panel" readonly value="{{ $application->calculated_size_of_panel }}"></td>
                      </tr>
                      <tr>
                          <td><small><strong>Recommended System Size</strong></small></td>
                          <td><input type="number" class="form-control form-control-sm text-end recommended_system_size" name="recommended_system_size" readonly value="{{ $application->recommended_system_size }}"></td>
                      </tr>
                      <tr style="border-bottom: 8px solid rgb(220 215 215)">
                          <td><small><strong>Recommended # of Panels</strong></small></td>
                          <td><input type="number" class="form-control form-control-sm text-end recommended_size_of_panel" name="recommended_size_of_panel" readonly value="{{ $application->recommended_size_of_panel }}"></td>
                      </tr>
                      <tr>
                          <td><small>Actual System Size</small></td>
                          <td><input type="number" class="form-control form-control-sm text-end actual_system_size" name="actual_system_size" readonly value="{{ $application->actual_system_size }}"></td>
                      </tr>
                      <tr style="border-bottom: 8px solid rgb(220 215 215)">
                          <td><small>Actual # of Panels</small></td>
                          <td><input type="number" class="form-control form-control-sm text-end actual_no_panels" onkeyup="calculate_actual_system_size()" name="actual_no_panels" value="{{ $application->actual_no_panels }}"></td>
                      </tr>
                      <tr>
                          <td>Guaranted KW per Month</td>
                          <td><input type="number" class="form-control form-control-sm text-end guaranted_kw_per_month" name="guaranted_kw_per_month" readonly value="{{ $application->guaranted_kw_per_month }}"></td>
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
                          <td class="text-end"><input type="number" class="form-control form-control-sm text-end total_project_cost" name="total_project_cost" readonly value="{{ $application->total_project_cost }}"></td>
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
                              <option value="0" {{ (int)$application->panel_upgrade == 0 ? "selected" : "" }}>N</option>
                            </select>
                          </td>
                      </tr>
                      <tr>
                          <td>HVAC system</td>
                          <td>
                            <select class="form-control form-control-sm hvac_system" name="hvac_system">
                              {{-- <option value="{{ app_setting('hvac_system') }}">Y</option> --}}
                              <option value="Y" {{ $application->hvac_system == "Y" ? "selected" : "" }}>Y</option>
                              <option value="N" {{ $application->hvac_system == "N" ? "selected" : "" }}>N</option>
                            </select>
                          </td>
                      </tr>
                      <tr>
                          <td>FPL connection fee</td>
                          <td>
                            <select class="form-control form-control-sm fpl_fee" name="fpl_fee">
                              <option value="{{ app_setting('connection_fee') }}">Y</option>
                              <option value="0" {{ (int)$application->fpl_fee == 0 ? "selected" : "" }}>N</option>
                            </select>
                          </td>
                      </tr>
                      <tr>
                          <td>Line Conditioner</td>
                          <td>
                            <select class="form-control form-control-sm line_conditioner" name="line_conditioner">
                              <option value="{{ app_setting('line_conditioner') }}">Y</option>
                              {{-- <option value="0" {{ (int)$application->line_conditioner == 0 ? "selected" : "" }}>N</option> --}}
                            </select>
                          </td>
                      </tr>
                      <tr>
                          <td>Tier2 insurance</td>
                          <td>
                            <select class="form-control form-control-sm tier_insurance" name="tier_insurance">
                              <option value="{{ app_setting('tier2_insurance') }}">Y</option>
                              <option value="0" {{ (int)$application->tier_insurance == 0 ? "selected" : "" }}>N</option>
                            </select>
                          </td>
                      </tr>
                      <tr>
                        <td>Aeroseal price per watt</td>
                        <td>
                          <select class="form-control form-control-sm aeroseal" name="aeroseal">
                            <option value="{{ app_setting('aeroseal') }}" role="{{ app_setting('aeroseal') }}" {{ $application->aeroseal != 0 ? "selected" : "" }}>Y</option>
                            <option value="0" {{ (int)$application->aeroseal == 0 ? "selected" : "" }}>N</option>
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
                                <option value="{{ $item->tonage }}" data-name="{{ $item->name }}" {{ $application->brand == $item->tonage ? "selected" : "" }}>{{ $item->name }}</option>
                              @endforeach
                            </select>
                          </td>
                      </tr>
                      <tr>
                          <td>Tonage</td>
                          <td>
                            @php
                                $tonage = json_decode($application->brand, true);
                            @endphp
                            <select name="tonage" class="form-control form-control-sm tonage" id="">
                              <option value="">None</option>
                              @isset($tonage)
                              @foreach ($tonage as $item)
                              <option value="{{$item['tonage']}}" price="{{$item['price']}}" {{$application->tonage == $item['tonage'] ? "selected" : ""}}>{{$item['tonage']}}</option>
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
                                <option value="{{ $finance->discount }}" {{ $application->financ_discount == $finance->type ? "selected" : "" }}>{{ $finance->type }}</option>
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
                          <td><input type="number" name="service_finance_payment" class="form-control form-control-sm service_finance_payment text-end" value="{{$application->service_finance_payment}}" readonly></td>
                      </tr>
                      <tr>
                          <td>PACE payment</td>
                          <td><input type="number" name="pace_payment" value="{{$application->pace_payment}}" class="form-control form-control-sm text-end pace_payment" readonly></td>
                      </tr>
                      <tr>
                        <td>SUNLIGHT payment</td>
                        <td><input type="number" name="sunlight_payment" value="{{$application->sunlight_payment}}" class="form-control form-control-sm text-end sunlight_payment" readonly></td>
                      </tr>
                      <tr>
                          <td>PACE after tax*</td>
                          <td><input type="number" name="pace_after_tax" value="{{$application->pace_after_tax}}" class="form-control form-control-sm text-end pace_after_tax" readonly></td>
                      </tr>
                      <tr>
                          <td>Mosaic</td>
                          <td><input type="number" class="form-control form-control-sm text-end mosaic" value="{{$application->mosaic}}" name="mosaic" readonly></td>
                      </tr>
                    </tbody>
              </table>
          </div>
      </div>
  </div>
</div>
<div class="row">
  <div class="col">
    <input type="submit" value="Update & Next" class="btn btn-primary btn-block w-100">
  </div>
</div>
</form>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/form-layouts.js') }}"></script>
    @include('backend.calculation_scripts')
    <script>
      $("body").on("click", ".view_ssn", function() {
          var target = $(this).attr('target');
          if($('input[aria-describedby="'+target+'"]').attr('type') == 'password') {
            $('input[aria-describedby="'+target+'"]').attr('type', 'text');
          } else {
            $('input[aria-describedby="'+target+'"]').attr('type', 'password');
          }
      })
    </script>

<script>
  $(document).ready(function () {
    $('.datepicker').datepicker({
        format: 'mm/dd/yyyy',
    });
  })
</script>
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
