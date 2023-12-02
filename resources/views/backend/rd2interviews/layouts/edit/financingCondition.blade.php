<div class="content mt-2 col-md-6">
  <div class="content-header mb-3">
      <h4 class="mb-0">STEP-5: FINANCING CONDITION</h4>
      <small>Enter FINANCING CONDITION</small>
  </div>

  <div class="row mt-2">

      <div class="col-md-3">
          <label class="form-label" for="financing_condition_loan_rate">Loan Rate</label>
          <input type="number" class="form-control" value="{{$financingCondition->loan_rate}}" name="financing_condition_loan_rate">
      </div>

      <div class="col-md-3">
          <label class="form-label" for="financing_condition_insurance_rate">Insurance Rate</label>
          <input type="number" class="form-control" value="{{$financingCondition->insurance_rate}}" name="financing_condition_insurance_rate">
      </div>

      <div class="col-md-3">
          <label class="form-label" for="financing_condition_teag">Teag</label>
          <input type="number" class="form-control" value="{{$financingCondition->condition_teag}}" name="financing_condition_teag">
      </div>

      <div class="col-md-3">
          <label class="form-label" for="financing_condition_duration_in_years">Duration In
              Years</label>
          <input type="number" class="form-control" value="{{$financingCondition->duration_in_years}}" name="financing_condition_duration_in_years">
      </div>

      <div class="col-md-3">
          <label class="form-label" for="financing_condition_duration_in_months">Duration In
              Months</label>
          <input type="number" class="form-control" value="{{$financingCondition->duration_in_months}}" name="financing_condition_duration_in_months">
      </div>

      <div class="col-md-3">
          <label class="form-label" for="financing_condition_current_credit">Current Credit</label>
          <input type="number" class="form-control" value="{{$financingCondition->current_credit}}" name="financing_condition_current_credit">
      </div>

  </div>
</div>
