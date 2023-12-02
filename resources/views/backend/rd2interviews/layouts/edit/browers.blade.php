<div class="content mt-2 col-md-6">
  <div class="content-header mb-3">
      <h6 class="mb-0">1(b)Co-borrower's information</h6>
  </div>
  <div class="row mt-2">
      <div class="col-md-3">
          <label class="form-label" for="co_borrower_info_name_or_ste">Bank Name</label>
          <input type="text" class="form-control" value="{{$rd2Caller->rd2brower->name_or_ste}}" name="co_borrower_info_name_or_ste">
      </div>
      <div class="col-md-3">
          <label class="form-label" for="co_borrower_info_first_name">First Name</label>
          <input type="text" class="form-control" value="{{$rd2Caller->rd2brower->first_name}}" name="co_borrower_info_first_name">
      </div>

      <div class="col-md-3">
          <label class="form-label" for="co_borrower_info_current_address">Current Address</label>
          <input type="text" class="form-control" value="{{$rd2Caller->rd2brower->current_address}}" name="co_borrower_info_current_address">
      </div>


      <div class="col-md-3">
          <label class="form-label" for="co_borrower_info_municipality">Municipality</label>
          <select class="form-control" name="co_borrower_info_municipality">
              <option value="{{$rd2Caller->rd2brower->municipality}}">{{$rd2Caller->rd2brower->municipality}}</option>
              <option value="97319 Awala-Yalimapo">97319 Awala-Yalimapo</option>
              <option value="97330 Camopi">97330 Camopi</option>
              <option value="97340 Grand-Santi">97340 Grand-Santi</option>
              <option value="97350 Iracoubo">97350 Iracoubo</option>
              <option value="97310 Kourou">97310 Kourou</option>
              <option value="97355 Macouria">97355 Macouria</option>
              <option value="97318 Mana">97318 Mana</option>
              <option value="97360">97360</option>
              <option value="97370 Maripasoula">97370 Maripasoula</option>
              <option value="97351 Matoury">97351 Matoury</option>
              <option value="97356 Montsinéry-Tonnegrande">97356 Montsinéry-Tonnegrande</option>
              <option value="97380 Ouanary">97380 Ouanary</option>
              <option value="97316 Papaichton">97316 Papaichton</option>
              <option value="97353 Régina">97353 Régina</option>
              <option value="97390">97390</option>
              <option value="97354 Remire-Montjoly">97354 Remire-Montjoly</option>
              <option value="97311 Roura">97311 Roura</option>
              <option value="97352">97352</option>
              <option value="97312 Saint-Élie">97312 Saint-Élie</option>
              <option value="97313 Saint-Georges">97313 Saint-Georges</option>
              <option value="97320 Saint-Laurent-du-Maroni">97320 Saint-Laurent-du-Maroni</option>
              <option value="97314 Saül">97314 Saül</option>
              <option value="97315 Sinnamary">97315 Sinnamary</option>
          </select>
      </div>



      <div class="col-md-3">
          <label class="form-label" for="co_borrower_info_mobile_phone">Mobile Phone</label>
          <input type="text" class="form-control" value="{{$rd2Caller->rd2brower->mobile_phone}}" name="co_borrower_info_mobile_phone">
      </div>



      <div class="col-md-3">
          <label class="form-label" for="co_borrower_info_landline_phone">Landline Phone</label>
          <input type="text" class="form-control" value="{{$rd2Caller->rd2brower->landline_phone}}" name="co_borrower_info_landline_phone">
      </div>



      <div class="col-md-3">
          <label class="form-label" for="co_borrower_info_date_of_birth">Date Of Birth</label>
          <input type="date" class="form-control" value="{{$rd2Caller->rd2brower->date_of_birth}}" name="co_borrower_info_date_of_birth">
      </div>



      <div class="col-md-3">
          <label class="form-label" for="co_borrower_info_place_of_birth">Place Of Birth</label>
          <input type="text" class="form-control" value="{{$rd2Caller->rd2brower->place_of_birth}}" name="co_borrower_info_place_of_birth">
      </div>



      <div class="col-md-3">
          <label class="form-label" for="co_borrower_info_current_residence">Current
              Residence</label>
          <input type="text" class="form-control" value="{{$rd2Caller->rd2brower->current_residence}}" name="co_borrower_info_current_residence">
      </div>



      <div class="col-md-3">
          <label class="form-label" for="co_borrower_info_business_phone">Business Phone</label>
          <input type="text" class="form-control" value="{{$rd2Caller->rd2brower->business_phone}}" name="co_borrower_info_business_phone">
      </div>



      <div class="col-md-3">
          <label class="form-label" for="co_borrower_info_email">Email</label>
          <input type="email" class="form-control" value="{{$rd2Caller->rd2brower->email}}" name="co_borrower_info_email">
      </div>



      <div class="col-md-3">
          <label class="form-label" for="co_borrower_info_profession">Profession</label>
          <input type="text" class="form-control" value="{{$rd2Caller->rd2brower->profession}}" name="co_borrower_info_profession">
      </div>



      <div class="col-md-3">
          <label class="form-label" for="co_borrower_info_type_of_contract">Type Of Contract</label>
          <select class="form-control"  name="co_borrower_info_type_of_contract">

                  <option value="{{$rd2Caller->rd2brower->type_of_contract}}">{{$rd2Caller->rd2brower->type_of_contract}}</option>
                  <option value="C.D.I">C.D.I</option>
                  <option value="C.D.D">C.D.D</option>
                  <option value="CONCTRACTUAL">CONCTRACTUAL</option>
                  <option value="Official">Official</option>
                  <option value="GERANT">GERANT</option>
                  <option value="WITHOUT ACTIVITY">WITHOUT ACTIVITY</option>
              </select>
      </div>



      <div class="col-md-3">
          <label class="form-label" for="co_borrower_info_professional_maturity_months">Professional
              Maturity
              Months</label>
          <select class="form-control" name="co_borrower_info_professional_maturity_months">
              <option value="{{$rd2Caller->rd2brower->professional_maturity_months}}">{{$rd2Caller->rd2brower->professional_maturity_months}}</option>
              <option value="+1">+1</option>
              <option value="+2">+2</option>
              <option value="+3">+3</option>
              <option value="+4">+4</option>
              <option value="+5">+5</option>
              <option value="+6">+6</option>
              <option value="+7">+7</option>
              <option value="+8">+8</option>
              <option value="+9">+9</option>
              <option value="+10">+10</option>
              <option value="+11">+11</option>
              <option value="+12">+12</option>
          </select>
      </div>



      <div class="col-md-3">
          <label class="form-label" for="co_borrower_info_bank_name">Bank Name</label>
          <select class="form-control" name="co_borrower_info_bank_name">
              <option value="{{$rd2Caller->rd2brower->bank_name}}">{{$rd2Caller->rd2brower->bank_name}}</option>
              <option value="BRED-Banque Populaire">BRED-Banque Populaire</option>
              <option value="Savings Bank">Savings Bank</option>
              <option value="Caisse de Crédit Mutuel">Caisse de Crédit Mutuel</option>
              <option value="The Postal Bank">The Postal Bank</option>
              <option value="BNP Paribas Antilles Guyana">BNP Paribas Antilles Guyana</option>
              <option value="Crédit Agricole Martinique-Guyane">Crédit Agricole Martinique-Guyane
              </option>
              <option value="CASDEN Banque Populaire">CASDEN Banque Populaire</option>
          </select>
      </div>



      <div class="col-md-3">
          <label class="form-label" for="co_borrower_info_savings_info">Savings
              (PEL-CEL-....)</label>
          <input type="text" class="form-control" value="{{$rd2Caller->rd2brower->savings_info}}" name="co_borrower_info_savings_info">
      </div>


      <div class="col-md-3">
          <label class="form-label" for="co_borrower_info_annual_tax_income">Annual Tax
              Income</label>
          <input type="number" class="form-control" value="{{$rd2Caller->rd2brower->annual_tax_income}}" name="co_borrower_info_annual_tax_income">
      </div>


      <div class="col-md-3">
          <label class="form-label" for="co_borrower_info_child_dependent_on_tax">Child Dependent On
              Tax</label>
          <select class="form-control" name="co_borrower_info_child_dependent_on_tax">
              <option value="{{$rd2Caller->rd2brower->child_dependent_on_tax}}">{{$rd2Caller->rd2brower->child_dependent_on_tax}}</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
          </select>
      </div>


      <div class="col-md-3">
          <label class="form-label" for="co_borrower_info_rental_charge">Rental Charge</label>
          <input type="number" class="form-control" value="{{$rd2Caller->rd2brower->rental_charge}}" name="co_borrower_info_rental_charge">
      </div>


      <div class="col-md-3">
          <label class="form-label" for="co_borrower_info_rental_income">Rental Income</label>
          <input type="number" class="form-control" value="{{$rd2Caller->rd2brower->rental_income}}" name="co_borrower_info_rental_income">
      </div>


      <div class="col-md-3">
          <label class="form-label" for="co_borrower_info_rental_income_70_percent">Rental Income 70
              Percent</label>
          <input type="number" class="form-control"
              value="{{$rd2Caller->rd2brower->rental_income_70_percent}}" name="co_borrower_info_rental_income_70_percent">
      </div>


      <div class="col-md-3">
          <label class="form-label" for="co_borrower_info_bank_seniority_months">Bank Seniority
              Months</label>
          <select class="form-control" name="co_borrower_info_bank_seniority_months">
              <option value="{{$rd2Caller->rd2brower->bank_seniority_months}}">{{$rd2Caller->rd2brower->bank_seniority_months}}</option>
              <option value="+1">+1</option>
              <option value="+2">+2</option>
              <option value="+3">+3</option>
              <option value="+4">+4</option>
              <option value="+5">+5</option>
              <option value="+6">+6</option>
              <option value="+7">+7</option>
              <option value="+8">+8</option>
              <option value="+9">+9</option>
              <option value="+10">+10</option>
              <option value="+11">+11</option>
              <option value="+12">+12</option>
          </select>
      </div>


      <div class="col-md-3">
          <label class="form-label" for="co_borrower_info_seniority_pel_months">Seniority Pel
              Months</label>
          <select class="form-control"  name="co_borrower_info_seniority_pel_months">
              <option value="{{$rd2Caller->rd2brower->seniority_pel_months}}">{{$rd2Caller->rd2brower->seniority_pel_months}}</option>
              <option value="+1">+1</option>
              <option value="+2">+2</option>
              <option value="+3">+3</option>
              <option value="+4">+4</option>
              <option value="+5">+5</option>
              <option value="+6">+6</option>
              <option value="+7">+7</option>
              <option value="+8">+8</option>
              <option value="+9">+9</option>
              <option value="+10">+10</option>
              <option value="+11">+11</option>
              <option value="+12">+12</option>
          </select>
      </div>


      <div class="col-md-3">
          <label class="form-label" for="co_borrower_info_credit_remaining_to_settle">Credit
              Remaining To
              Settle</label>
          <input type="number" class="form-control"
              value="{{$rd2Caller->rd2brower->credit_remaining_to_settle}}" name="co_borrower_info_credit_remaining_to_settle">
      </div>



      <div class="col-md-3">
          <label class="form-label" for="co_borrower_info_credit_a_in_progress_per_month">Credit A
              In Progress
              Per
              Month</label>
          <input type="number" class="form-control"
              value="{{$rd2Caller->rd2brower->credit_a_in_progress_per_month}}" name="co_borrower_info_credit_a_in_progress_per_month">
      </div>



      <div class="col-md-3">
          <label class="form-label"
              for="co_borrower_info_remaining_month_credit_a_in_progress">Remaining Month
              Credit A In Progress</label>
          <input type="number" class="form-control"
              value="{{$rd2Caller->rd2brower->remaining_month_credit_a_in_progress}}" name="co_borrower_info_remaining_month_credit_a_in_progress">
      </div>


      <div class="col-md-3">
          <label class="form-label" for="co_borrower_info_family_situation">Family Situation</label>
          <select class="form-control"  name="co_borrower_info_family_situation">
              <option value="{{$rd2Caller->rd2brower->family_situation}}">{{$rd2Caller->rd2brower->family_situation}}</option>
              <option value="Pacified">Pacified (e)</option>
              <option value="Married">Married (e)</option>
              <option value="Divorced">Divorced (é)</option>
              <option value="Cohabitation">Cohabitation</option>
              <option value="Bachelor">Bachelor</option>
          </select>
      </div>
      <div class="col-md-3">
          <label class="form-label" for="co_borrower_info_personal_contribution">Personal
              Contribution</label>
          <input type="number" class="form-control" value="{{$rd2Caller->rd2brower->personal_contribution}}" name="co_borrower_info_personal_contribution">
      </div>
  </div>
</div>
