<div class="content mt-2">
  <div class="content-header mb-3">
      <h4 class="mb-0">STEP-6: PROJECT FINANCING</h4>
      <small>Enter PROJECT FINANCING</small>
  </div>
  <div class="row mt-2">

      <div class="col-md-3">
          <label class="form-label" for="project_financing_contribution">Contribution</label>
          <input type="number" class="form-control" value="{{$projectFinancing->contribution}}" name="project_financing_contribution">
      </div>



      <div class="col-md-3">
          <label class="form-label" for="project_financing_loan_at_zero_rate">Loan At Zero Rate</label>
          <input type="number" class="form-control" value="{{$projectFinancing->loan_at_zero_rate}}" name="project_financing_loan_at_zero_rate">
      </div>



      <div class="col-md-3">
          <label class="form-label" for="project_financing_employer_loan">Employer Loan</label>
          <input type="number" class="form-control" value="{{$projectFinancing->employer_loan}}" name="project_financing_employer_loan">
      </div>



      <div class="col-md-3">
          <label class="form-label" for="project_financing_relay_loan">Relay Loan</label>
          <input type="number" class="form-control" value="{{$projectFinancing->relay_loan}}" name="project_financing_relay_loan">
      </div>



      <div class="col-md-3">
          <label class="form-label" for="project_financing_regional_subsidy">Regional Subsidy</label>
          <input type="number" class="form-control" value="{{$projectFinancing->regional_subsidy}}" name="project_financing_regional_subsidy">
      </div>



      <div class="col-md-3">
          <label class="form-label" for="project_financing_non_loan_financing_capacity">Non Loan
              Financing
              Capacity</label>
          <input type="number" class="form-control"
              value="{{$projectFinancing->non_loan_financing_capacity}}" name="project_financing_non_loan_financing_capacity">
      </div>



      <div class="col-md-3">
          <label class="form-label" for="project_financing_ready">Ready</label>
          <input type="number" class="form-control" value="{{$projectFinancing->ready}}" name="project_financing_ready">
      </div>



      <div class="col-md-3">
          <label class="form-label" for="project_financing_schedule">Schedule</label>
          <input type="number" class="form-control" value="{{$projectFinancing->schedule}}" name="project_financing_schedule">
      </div>



      <div class="col-md-3">
          <label class="form-label" for="project_financing_debt">Debt</label>
          <input type="number" class="form-control" value="{{$projectFinancing->debt}}" name="project_financing_debt">
      </div>



      <div class="col-md-3">
          <label class="form-label" for="project_financing_debt_with_credit">Debt With Credit</label>
          <input type="number" class="form-control" value="{{$projectFinancing->debt_with_credit}}" name="project_financing_debt_with_credit">
      </div>



      <div class="col-md-3">
          <label class="form-label" for="project_financing_total_financing_of_project">Total Financing
              Of Project</label>
          <input type="number" class="form-control"
              value="{{$projectFinancing->total_financing_of_project}}" name="project_financing_total_financing_of_project">
      </div>

  </div>
</div>
