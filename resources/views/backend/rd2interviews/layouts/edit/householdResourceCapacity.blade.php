<div class="content mt-2 col-md-6">
  <div class="content-header mb-3">
      <h4 class="mb-0">STEP-3: HOUSEHOLD RESOURCE CAPACITY</h4>
      <small>Enter HOUSEHOLD RESOURCE CAPACITY (excluding intake).</small>
  </div>
  <div class="row mt-2">
      <div class="col-md-3">
          <label class="form-label" for="household_resource_annual_tax_income">Annual Tax
              Income</label>
          <input type="number" class="form-control" value="{{$prospect->householdResourceCapacity->annual_tax_income}}" name="household_resource_annual_tax_income">
      </div>

      <div class="col-md-3">
          <label class="form-label"
              for="household_resource_annual_rental_income_before_abatement">Annual Rental Income
              Before Abatement</label>
          <input type="number" class="form-control"
              value="{{$prospect->householdResourceCapacity->annual_rental_income_before_abatement}}" name="household_resource_annual_rental_income_before_abatement">
      </div>

      <div class="col-md-3">
          <label class="form-label"
              for="household_resource_annual_rental_income_after_abatement">Annual Rental Income
              After Abatement</label>
          <input type="number" class="form-control"
              value="{{$prospect->householdResourceCapacity->annual_rental_income_after_abatement}}" name="household_resource_annual_rental_income_after_abatement">
      </div>

      <div class="col-md-3">
          <label class="form-label"
              for="household_resource_potential_help_financial_assistance">Potential Help Financial
              Assistance</label>
          <input type="number" class="form-control"
              value="{{$prospect->householdResourceCapacity->potential_help_financial_assistance}}" name="household_resource_potential_help_financial_assistance">
      </div>

      <div class="col-md-3">
          <label class="form-label"
              for="household_resource_financial_capacity_of_household">Financial Capacity Of
              Household</label>
          <input type="number" class="form-control"
              value="{{$prospect->householdResourceCapacity->financial_capacity_of_household}}" name="household_resource_financial_capacity_of_household">
      </div>
  </div>
</div>
