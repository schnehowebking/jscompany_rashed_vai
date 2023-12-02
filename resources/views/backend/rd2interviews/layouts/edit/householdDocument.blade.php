<div class="content mt-2 col-md-6">
  <div class="content-header mb-3">
      <h4 class="mb-0">STEP-4: HOUSEHOLD DOCUMENT</h4>
      <small>Enter HOUSEHOLD DOCUMENT</small>
  </div>
  <div class="row mt-2">
      <div class="col-md-3">
          <label class="form-label" for="household_document_eligible_debt_before_credit">Eligible
              Debt Before
              Credit</label>
          <input type="number" class="form-control"
              value="{{$prospect->householdDocument->eligible_debt_before_credit}}" name="household_document_eligible_debt_before_credit">
      </div>

      <div class="col-md-3">
          <label class="form-label" for="household_document_current_credit">Current Credit</label>
          <input type="number" class="form-control" value="{{$prospect->householdDocument->current_credit}}" name="household_document_current_credit">
      </div>

      <div class="col-md-3">
          <label class="form-label" for="household_document_debt_with_monthly_credit">Debt With
              Monthly Credit</label>
          <input type="number" class="form-control"
              value="{{$prospect->householdDocument->debt_with_monthly_credit}}" name="household_document_debt_with_monthly_credit">
      </div>

      <div class="col-md-3">
          <label class="form-label" for="household_document_debt_with_annual_credit">Debt With
              Annual Credit</label>
          <input type="number" class="form-control"
              value="{{$prospect->householdDocument->debt_with_annual_credit}}" name="household_document_debt_with_annual_credit">
      </div>

      <div class="col-md-3">
          <label class="form-label" for="household_document_capacity">Capacity</label>
          <input type="number" class="form-control" value="{{$prospect->householdDocument->capacity}}" name="household_document_capacity">
      </div>

  </div>
</div>
