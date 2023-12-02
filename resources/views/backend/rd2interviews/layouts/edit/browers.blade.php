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

          <?php
              $all_browers = [
                  '97319 Awala-Yalimapo',
                  '97330 Camopi',
                  '97340 Grand-Santi',
                  '97350 Iracoubo',
                  '97310 Kourou',
                  '97355 Macouria',
                  '97318 Mana',
                  '97360',
                  '97370 Maripasoula',
                  '97351 Matoury',
                  '97356 Montsinéry-Tonnegrande',
                  '97380 Ouanary',
                  '97316 Papaichton',
                  '97353 Régina',
                  '97390',
                  '97354 Remire-Montjoly',
                  '97311 Roura',
                  '97352',
                  '97312 Saint-Élie',
                  '97313 Saint-Georges',
                  '97320 Saint-Laurent-du-Maroni',
                  '97314 Saül',
                  '97315 Sinnamary']
          ?>
          <select class="form-control" name="co_borrower_info_municipality">
              @foreach ($all_browers as $b)
                  <option value="{{$b}}" {{$b == $rd2Caller->rd2brower->municipality ? 'selected' : '' }}>{{$b}}</option>
              @endforeach
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

          <?php
          $all_browers = [
              'C.D.I',
              'C.D.D',
              'CONCTRACTUAL',
              'Official',
              'GERANT',
              'WITHOUT ACTIVITY']
      ?>
              <select class="form-control"  name="co_borrower_info_type_of_contract">
                  @foreach ($all_browers as $b)
                      <option value="{{$b}}" {{$b == $rd2Caller->rd2brower->type_of_contract ? 'selected' : '' }}>{{$b}}</option>
                  @endforeach
              </select>
      </div>



      <div class="col-md-3">
          <label class="form-label" for="co_borrower_info_professional_maturity_months">Professional
              Maturity
              Months</label>
          <?php
          $all_browers = [
              '+1',
              '+2',
              '+3',
              '+4',
              '+5',
              '+6',
              '+7',
              '+8',
              '+9',
              '+10',
              '+11',
              '+12']
          ?>
          <select class="form-control" name="co_borrower_info_professional_maturity_months">
              @foreach ($all_browers as $b)
                  <option value="{{$b}}" {{$b == $rd2Caller->rd2brower->professional_maturity_months ? 'selected' : '' }}>{{$b}}</option>
              @endforeach
      </div>



      <div class="col-md-3">
          <label class="form-label" for="co_borrower_info_bank_name">Bank Name</label>
          <?php
          $all_browers = [
              'BRED-Banque Populaire',
              'Savings Bank',
              'Caisse de Crédit Mutuel',
              'The Postal Bank',
              'BNP Paribas Antilles Guyana',
              'Crédit Agricole Martinique-Guyane',
              'CASDEN Banque Populaire']
          ?>
          <select class="form-control" name="co_borrower_info_bank_name">
              @foreach ($all_browers as $b)
                  <option value="{{$b}}" {{$b == $rd2Caller->rd2brower->bank_name ? 'selected' : '' }}>{{$b}}</option>
              @endforeach
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
          <?php
          $all_browers = [
              '1',
              '2',
              '3',
              '4',
              '5',
              '6',
              '7']
          ?>
          <select class="form-control" name="co_borrower_info_child_dependent_on_tax">
              @foreach ($all_browers as $b)
                  <option value="{{$b}}" {{$b == $rd2Caller->rd2brower->child_dependent_on_tax ? 'selected' : '' }}>{{$b}}</option>
              @endforeach
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

          <?php
          $all_browers = [
              '+1',
              '+2',
              '+3',
              '+4',
              '+5',
              '+6',
              '+7',
              '+8',
              '+9',
              '+10',
              '+11',
              '+12']
          ?>
          <select class="form-control" name="co_borrower_info_bank_seniority_months">
              @foreach ($all_browers as $b)
                  <option value="{{$b}}" {{$b == $rd2Caller->rd2brower->bank_seniority_months ? 'selected' : '' }}>{{$b}}</option>
              @endforeach
          </select>
      </div>


      <div class="col-md-3">
          <label class="form-label" for="co_borrower_info_seniority_pel_months">Seniority Pel
              Months</label>

          <?php
          $all_browers = [
              '+1',
              '+2',
              '+3',
              '+4',
              '+5',
              '+6',
              '+7',
              '+8',
              '+9',
              '+10',
              '+11',
              '+12']
          ?>
          <select class="form-control" name="co_borrower_info_seniority_pel_months">
              @foreach ($all_browers as $b)
                  <option value="{{$b}}" {{$b == $rd2Caller->rd2brower->seniority_pel_months ? 'selected' : '' }}>{{$b}}</option>
              @endforeach
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
          <?php
          $all_browers = [
              'Pacified',
              'Married',
              'Divorced',
              'Cohabitation',
              'Bachelor']
          ?>
          <select class="form-control"  name="co_borrower_info_family_situation">
              @foreach ($all_browers as $b)
                  <option value="{{$b}}" {{$b == $rd2Caller->rd2brower->family_situation ? 'selected' : '' }}>{{$b}}</option>
              @endforeach
          </select>
      </div>
      <div class="col-md-3">
          <label class="form-label" for="co_borrower_info_personal_contribution">Personal
              Contribution</label>
          <input type="number" class="form-control" value="{{$rd2Caller->rd2brower->personal_contribution}}" name="co_borrower_info_personal_contribution">
      </div>
  </div>
</div>
