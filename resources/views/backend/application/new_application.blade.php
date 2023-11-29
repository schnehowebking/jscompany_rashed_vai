@extends('layouts/layoutMaster')

@section('title', 'New Application')

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
    <h4 class="py-3 breadcrumb-wrapper mb-4"><span class="text-muted fw-light">Settings/</span> New Application</h4>

    <!-- Basic Layout -->
    <form action="{{ route('application.store') }}" method="POST">
      <div class="row">
        @csrf
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
                                  <tr>
                                      <td>1</td>
                                      <td><input type="number" class="form-control form-control-sm monthly_usage text-end calculate" name="monthly_usage[]"></td>
                                      <td><input type="number" class="form-control form-control-sm monthly_payment text-end" name="monthly_payment[]" onkeyup="avg_monthly_payment()"></td>
                                  </tr>
                                  <tr>
                                      <td>2</td>
                                      <td><input type="number" class="form-control form-control-sm monthly_usage text-end calculate" name="monthly_usage[]"></td>
                                      <td><input type="number" class="form-control form-control-sm monthly_payment text-end" name="monthly_payment[]" onkeyup="avg_monthly_payment()"></td>
                                  </tr>
                                  <tr>
                                      <td>3</td>
                                      <td><input type="number" class="form-control form-control-sm monthly_usage text-end calculate" name="monthly_usage[]"></td>
                                      <td><input type="number" class="form-control form-control-sm monthly_payment text-end" name="monthly_payment[]" onkeyup="avg_monthly_payment()"></td>
                                  </tr>
                                  <tr>
                                      <td>4</td>
                                      <td><input type="number" class="form-control form-control-sm monthly_usage text-end calculate" name="monthly_usage[]"></td>
                                      <td><input type="number" class="form-control form-control-sm monthly_payment text-end" name="monthly_payment[]" onkeyup="avg_monthly_payment()"></td>
                                  </tr>
                                  <tr>
                                      <td>5</td>
                                      <td><input type="number" class="form-control form-control-sm monthly_usage text-end calculate" name="monthly_usage[]"></td>
                                      <td><input type="number" class="form-control form-control-sm monthly_payment text-end" name="monthly_payment[]" onkeyup="avg_monthly_payment()"></td>
                                  </tr>
                                  <tr>
                                      <td>6</td>
                                      <td><input type="number" class="form-control form-control-sm monthly_usage text-end calculate" name="monthly_usage[]"></td>
                                      <td><input type="number" class="form-control form-control-sm monthly_payment text-end" name="monthly_payment[]" onkeyup="avg_monthly_payment()"></td>
                                  </tr>
                                  <tr>
                                      <td>7</td>
                                      <td><input type="number" class="form-control form-control-sm monthly_usage text-end calculate" name="monthly_usage[]"></td>
                                      <td><input type="number" class="form-control form-control-sm monthly_payment text-end" name="monthly_payment[]" onkeyup="avg_monthly_payment()"></td>
                                  </tr>
                                  <tr>
                                      <td>8</td>
                                      <td><input type="number" class="form-control form-control-sm monthly_usage text-end calculate" name="monthly_usage[]"></td>
                                      <td><input type="number" class="form-control form-control-sm monthly_payment text-end" name="monthly_payment[]" onkeyup="avg_monthly_payment()"></td>
                                  </tr>
                                  <tr>
                                      <td>9</td>
                                      <td><input type="number" class="form-control form-control-sm monthly_usage text-end calculate" name="monthly_usage[]"></td>
                                      <td><input type="number" class="form-control form-control-sm monthly_payment text-end" name="monthly_payment[]" onkeyup="avg_monthly_payment()"></td>
                                  </tr>
                                  <tr>
                                      <td>10</td>
                                      <td><input type="number" class="form-control form-control-sm monthly_usage text-end calculate" name="monthly_usage[]"></td>
                                      <td><input type="number" class="form-control form-control-sm monthly_payment text-end" name="monthly_payment[]" onkeyup="avg_monthly_payment()"></td>
                                  </tr>
                                  <tr>
                                      <td>11</td>
                                      <td><input type="number" class="form-control form-control-sm monthly_usage text-end calculate" name="monthly_usage[]"></td>
                                      <td><input type="number" class="form-control form-control-sm monthly_payment text-end" name="monthly_payment[]" onkeyup="avg_monthly_payment()"></td>
                                  </tr>
                                  <tr>
                                      <td>12</td>
                                      <td><input type="number" class="form-control form-control-sm monthly_usage text-end calculate" name="monthly_usage[]"></td>
                                      <td><input type="number" class="form-control form-control-sm monthly_payment text-end" name="monthly_payment[]" onkeyup="avg_monthly_payment()"></td>
                                  </tr>
                                  <tr>
                                    <td></td>
                                    <td class="yearly_total_usage text-bold text-end">-</td>
                                    <td class="avg_monthly_payment text-bold text-end">-</td>
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
                                <td><input type="number" class="form-control form-control-sm total_yearly_usage text-end" name="total_yearly_usage" readonly></td>
                            </tr>
                            <tr>
                                <td>Monthly Avg [KW]</td>
                                <td><input type="number" class="form-control form-control-sm monthly_avg text-end" name="monthly_avg" readonly></td>
                            </tr>
                            <tr>
                                <td>Daily [KW]</td>
                                <td><input type="number" class="form-control form-control-sm daily text-end" name="daily" readonly></td>
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
                                          $net = number_format((float)$solar['net_price'] / 100, 2, '.', '');
                                          $dealer_fee = number_format((float)$solar['dealer_fee'], 2, '.', '');
                                          $price = number_format($net / (float)$solar['dealer_fee'], 2, '.', '');
                                          $name = $sp->name ."-". $solar['interest'] ."-". $solar['year'] ."Y-". $solar['net_price'];
                                      ?>
                                        <option value="{{ $name }}" price="{{$price}}" dealer_fee="{{$dealer_fee}}" netprice="{{ $net }}">{{ $name }}</option>
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
                                      <option value="{{ $panel->panel }}">{{ $panel->panel }}</option>
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
                                <td class="text-end"><input type="text" class="form-control form-control-sm kwh_system_size text-end" name="kwh_system_size" readonly></td>
                            </tr>
                            <tr style="border-bottom: 8px solid rgb(220 215 215)">
                                <td><small>Calculated # of Panels</small></td>
                                <td><input type="number" class="form-control form-control-sm calculated_size_of_panel text-end" name="calculated_size_of_panel" readonly></td>
                            </tr>
                            <tr>
                                <td><small><strong>Recommended System Size</strong></small></td>
                                <td><input type="number" class="form-control form-control-sm text-end recommended_system_size" name="recommended_system_size" readonly></td>
                            </tr>
                            <tr style="border-bottom: 8px solid rgb(220 215 215)">
                                <td><small><strong>Recommended # of Panels</strong></small></td>
                                <td><input type="number" class="form-control form-control-sm text-end recommended_size_of_panel" name="recommended_size_of_panel" readonly></td>
                            </tr>
                            <tr>
                                <td><small>Actual System Size</small></td>
                                <td><input type="number" class="form-control form-control-sm text-end actual_system_size" name="actual_system_size" onchange="calculate_actual_system_size()" readonly></td>
                            </tr>
                            <tr style="border-bottom: 8px solid rgb(220 215 215)">
                                <td><small>Actual # of Panels</small></td>
                                <td><input type="number" class="form-control form-control-sm text-end actual_no_panels" onkeyup="calculate_actual_system_size()" name="actual_no_panels"></td>
                            </tr>
                            <tr>
                                <td>Guaranted KW per Month</td>
                                <td><input type="number" class="form-control form-control-sm text-end guaranted_kw_per_month" name="guaranted_kw_per_month" readonly></td>
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
                                <td class="text-end"><input type="number" class="form-control form-control-sm text-end total_project_cost" name="total_project_cost" readonly></td>
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
                    <table class="table table-bordered text-nowrap">
                        <tbody class="table-border-bottom-0">
                            <tr>
                                <td>Panel upgrade</td>
                                <td>
                                  <select class="form-control form-control-sm panel_upgrade" name="panel_upgrade">
                                    <option value="{{ app_setting('panel_upgrade') }}">Y</option>
                                    <option value="0">N</option>
                                  </select>
                                </td>
                            </tr>
                            <tr>
                                <td>HVAC system</td>
                                <td>
                                  <select class="form-control form-control-sm hvac_system" name="hvac_system">
                                    {{-- <option value="{{ app_setting('hvac_system') }}">Y</option> --}}
                                    <option value="Y">Y</option>
                                    <option value="N" selected>N</option>
                                  </select>
                                </td>
                            </tr>
                            <tr>
                                <td>FPL connection fee</td>
                                <td>
                                  <select class="form-control form-control-sm fpl_fee" name="fpl_fee">
                                    <option value="{{ app_setting('connection_fee') }}">Y</option>
                                    <option value="0">N</option>
                                  </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Line Conditioner</td>
                                <td>
                                  <select class="form-control form-control-sm line_conditioner" name="line_conditioner">
                                    <option value="{{ app_setting('line_conditioner') }}">Y</option>
                                    {{-- <option value="0">N</option> --}}
                                  </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Tier2 insurance</td>
                                <td>
                                  <select class="form-control form-control-sm tier_insurance" name="tier_insurance">
                                    <option value="{{ app_setting('tier2_insurance') }}">Y</option>
                                    <option value="0">N</option>
                                  </select>
                                </td>
                            </tr>
                            <tr>
                              <td>Aeroseal</td>
                              <td>
                                <select class="form-control form-control-sm aeroseal" name="aeroseal">
                                  <option value="{{ app_setting('aeroseal') }}" role="{{ app_setting('aeroseal') }}">Y</option>
                                  <option value="0" selected>N</option>
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
                                      <option value="{{ $item->tonage }}" data-name="{{ $item->name }}">{{ $item->name }}</option>
                                    @endforeach
                                  </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Tonage</td>
                                <td>
                                  <select name="tonage" class="form-control form-control-sm tonage" id="">
                                    <option value="">None</option>
                                  </select>
                                </td>
                            </tr>
                            {{-- <tr>
                                <td>Financing</td>
                                <td>
                                  <select name="financing" class="form-control form-control-sm financing">
                                    <option value="">None</option>
                                    @foreach ($finances as $finance)
                                      <option value="{{ $finance->discount }}">{{ $finance->type }}</option>
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
                                <td><input type="number" name="service_finance_payment" class="form-control form-control-sm service_finance_payment text-end" readonly></td>
                            </tr>
                            <tr>
                                <td>PACE payment</td>
                                <td><input type="number" name="pace_payment" class="form-control form-control-sm text-end pace_payment" readonly></td>
                            </tr>
                            <tr>
                              <td>SUNLIGHT payment</td>
                              <td><input type="number" name="sunlight_payment" class="form-control form-control-sm text-end sunlight_payment" readonly></td>
                            </tr>
                            <tr>
                                <td>PACE after tax*</td>
                                <td><input type="number" name="pace_after_tax" class="form-control form-control-sm text-end pace_after_tax" readonly></td>
                            </tr>
                            <tr>
                                <td>Mosaic</td>
                                <td><input type="number" class="form-control form-control-sm text-end mosaic" name="mosaic" readonly></td>
                            </tr>
                          </tbody>
                    </table>
                </div>
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <button class="btn btn-primary d-block w-100">Next</button>
        </div>
      </div>
    </form>

@endsection
@section('page-script')
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
