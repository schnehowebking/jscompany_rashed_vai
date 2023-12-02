<div id="" class="content mt-2 col-md-6">
    <div class="content-header mb-3">
        <h6 class="mb-0">1(a)Caller's information</h6>
    </div>
    <div class="row mt-2">
        <div class="col-md-3">
            <label class="form-label" for="caller_info_name_or_ste">Name or STE:</label>
            <input type="text" value="{{ $prospect->rd2Caller->name_or_ste }}" name="caller_info_name_or_ste"
                class="form-control" />
        </div>
        <div class="col-md-3">
            <label class="form-label" for="caller_info_first_name">First Name</label>
            <input type="text" value="{{ $prospect->rd2Caller->first_name }}" name="caller_info_first_name"
                class="form-control" />
        </div>
        <div class="col-md-3">
            <label class="form-label" for="caller_info_current_address">Current Address</label>
            <input type="text" value="{{ $prospect->rd2Caller->current_address }}" name="caller_info_current_address"
                class="form-control" />
        </div>
        <div class="col-md-3">
            <label class="form-label" for="caller_info_municipality">Municipility</label>
            <select name="caller_info_municipality" class="form-control">
                <option {{ $prospect->rd2Caller->municipality == '97319 Awala-Yalimapo' ? 'selected' : '' }}
                    value="97319 Awala-Yalimapo">97319 Awala-Yalimapo</option>
                <option {{ $prospect->rd2Caller->municipality == '97330 Camopi' ? 'selected' : '' }} value="97330 Camopi">97330
                    Camopi</option>
                <option {{ $prospect->rd2Caller->municipality == '97340 Grand-Santi' ? 'selected' : '' }}
                    value="97340 Grand-Santi">97340 Grand-Santi</option>
                <option {{ $prospect->rd2Caller->municipality == '97350 Iracoubo' ? 'selected' : '' }} value="97350 Iracoubo">
                    97350 Iracoubo</option>
                <option {{ $prospect->rd2Caller->municipality == '97310 Kourou' ? 'selected' : '' }} value="97310 Kourou">97310
                    Kourou</option>
                <option {{ $prospect->rd2Caller->municipality == '97355 Macouria' ? 'selected' : '' }} value="97355 Macouria">
                    97355 Macouria</option>
                <option {{ $prospect->rd2Caller->municipality == '97318 Mana' ? 'selected' : '' }} value="97318 Mana">97318 Mana
                </option>
                <option {{ $prospect->rd2Caller->municipality == '97360' ? 'selected' : '' }} value="97360">97360</option>
                <option {{ $prospect->rd2Caller->municipality == '97370 Maripasoula' ? 'selected' : '' }}
                    value="97370 Maripasoula">97370 Maripasoula</option>
                <option {{ $prospect->rd2Caller->municipality == '97351 Matoury' ? 'selected' : '' }} value="97351 Matoury">97351
                    Matoury</option>
                <option {{ $prospect->rd2Caller->municipality == '97356 Montsinéry-Tonnegrande' ? 'selected' : '' }}
                    value="97356 Montsinéry-Tonnegrande">97356 Montsinéry-Tonnegrande</option>
                <option {{ $prospect->rd2Caller->municipality == '97380 Ouanary' ? 'selected' : '' }} value="97380 Ouanary">97380
                    Ouanary</option>
                <option {{ $prospect->rd2Caller->municipality == '97316 Papaichton' ? 'selected' : '' }}
                    value="97316 Papaichton">97316 Papaichton</option>
                <option {{ $prospect->rd2Caller->municipality == '97353 Régina' ? 'selected' : '' }} value="97353 Régina">97353
                    Régina</option>
                <option {{ $prospect->rd2Caller->municipality == '97390' ? 'selected' : '' }} value="97390">97390</option>
                <option {{ $prospect->rd2Caller->municipality == '97354 Remire-Montjoly' ? 'selected' : '' }}
                    value="97354 Remire-Montjoly">97354 Remire-Montjoly</option>
                <option {{ $prospect->rd2Caller->municipality == '97311 Roura' ? 'selected' : '' }} value="97311 Roura">97311
                    Roura</option>
                <option {{ $prospect->rd2Caller->municipality == '97352' ? 'selected' : '' }} value="97352">97352</option>
                <option {{ $prospect->rd2Caller->municipality == '97312 Saint-Élie' ? 'selected' : '' }}
                    value="97312 Saint-Élie">97312 Saint-Élie</option>
                <option {{ $prospect->rd2Caller->municipality == '97313 Saint-Georges' ? 'selected' : '' }}
                    value="97313 Saint-Georges">97313 Saint-Georges</option>
                <option {{ $prospect->rd2Caller->municipality == '97320 Saint-Laurent-du-Maroni' ? 'selected' : '' }}
                    value="97320 Saint-Laurent-du-Maroni">97320 Saint-Laurent-du-Maroni</option>
                <option {{ $prospect->rd2Caller->municipality == '97314 Saül' ? 'selected' : '' }} value="97314 Saül">97314 Saül
                </option>
                <option {{ $prospect->rd2Caller->municipality == '97315 Sinnamary' ? 'selected' : '' }} value="97315 Sinnamary">
                    97315 Sinnamary</option>


            </select>
        </div>
        <div class="col-md-3">
            <label class="form-label" for="caller_info_mobile_phone">Mobile Phone</label>
            <input type="text" value="{{ $prospect->rd2Caller->mobile_phone }}" name="caller_info_mobile_phone"
                class="form-control" />
        </div>
        <div class="col-md-3">
            <label class="form-label" for="caller_info_landline_phone">Landline Phone</label>
            <input type="text" value="{{ $prospect->rd2Caller->landline_phone }}" name="caller_info_landline_phone"
                class="form-control" />
        </div>
        <div class="col-md-3">
            <label class="form-label" for="caller_info_date_of_birth">Date of Birth</label>
            <input type="date" class="form-control datepicker" value="{{ $prospect->rd2Caller->date_of_birth }}"
                name="caller_info_date_of_birth">
        </div>
        <div class="col-md-3">
            <label class="form-label" for="caller_info_place_of_birth">Place of Birth</label>
            <input type="text" class="form-control datepicker" value="{{ $prospect->rd2Caller->place_of_birth }}"
                name="caller_info_place_of_birth">
        </div>
        <div class="col-md-3">
            <label class="form-label" for="caller_info_current_residence">Current Residence</label>
            <input type="text" class="form-control" value="{{ $prospect->rd2Caller->current_residence }}"
                name="caller_info_current_residence">
        </div>
        <div class="col-md-3">
            <label class="form-label" for="caller_info_business_phone">Business Phone</label>
            <input type="text" class="form-control" value="{{ $prospect->rd2Caller->business_phone }}"
                name="caller_info_business_phone">
        </div>
        <div class="col-md-3">
            <label class="form-label" for="caller_info_email">Email</label>
            <input type="email" class="form-control" value="{{ $prospect->rd2Caller->email }}" name="caller_info_email">
        </div>
        <div class="col-md-3">
            <label class="form-label" for="caller_info_profession">Profession</label>
            <input type="text" class="form-control" value="{{ $prospect->rd2Caller->profession }}"
                name="caller_info_profession">
        </div>
        <div class="col-md-3">
            <label class="form-label" for="caller_info_type_of_contract">Type Of Contract</label>
            <select class="form-control" name="caller_info_type_of_contract">
                <option {{ $prospect->rd2Caller->type_of_contract == 'C.D.I' ? 'selected' : '' }} value="C.D.I">C.D.I</option>
                <option {{ $prospect->rd2Caller->type_of_contract == 'C.D.D' ? 'selected' : '' }} value="C.D.D">C.D.D</option>
                <option {{ $prospect->rd2Caller->type_of_contract == 'CONCTRACTUAL' ? 'selected' : '' }} value="CONCTRACTUAL">
                    CONCTRACTUAL</option>
                <option {{ $prospect->rd2Caller->type_of_contract == 'Official' ? 'selected' : '' }} value="Official">Official
                </option>
                <option {{ $prospect->rd2Caller->type_of_contract == 'GERANT' ? 'selected' : '' }} value="GERANT">GERANT
                </option>
                <option {{ $prospect->rd2Caller->type_of_contract == 'WITHOUT ACTIVITY' ? 'selected' : '' }}
                    value="WITHOUT ACTIVITY">WITHOUT ACTIVITY</option>
            </select>
        </div>
        <div class="col-md-3">
            <label class="form-label" for="caller_info_professional_maturity_months">Professional
                Maturity
                Months</label>
            <select class="form-control" name="caller_info_professional_maturity_months">

                @for ($i = 1; $i <= 12; $i++)
                <option value="{{ '+' . $i }}"
                    {{ $prospect->rd2Caller->professional_maturity_months == '+' . $i ? 'selected' : '' }}>
                    +{{ $i }}
                </option>
                @endfor

            </select>
        </div>
        <div class="col-md-3">
            <label class="form-label" for="caller_info_bank_name">Bank Name</label>
            <select class="form-control" name="caller_info_bank_name">
                @foreach (['BRED-Banque Populaire', 'Savings Bank', 'Caisse de Crédit Mutuel', 'The Postal Bank', 'BNP Paribas Antilles Guyana', 'Crédit Agricole Martinique-Guyane', 'CASDEN Banque Populaire'] as $bank)
                    <option value="{{ $bank }}" {{ $prospect->rd2Caller->bank_name == $bank ? 'selected' : '' }}>
                        {{ $bank }}
                    </option>
                @endforeach

            </select>
        </div>
        <div class="col-md-3">
            <label class="form-label" for="caller_info_savings_info">Savings Info</label>
            <input type="text" class="form-control" value="{{ $prospect->rd2Caller->avings_info }}"
                name="caller_info_savings_info">
        </div>
        <div class="col-md-3">
            <label class="form-label" for="caller_info_annual_tax_income">Annual Tax Income</label>
            <input type="number" class="form-control" value="{{ $prospect->rd2Caller->annual_tax_income }}"
                name="caller_info_annual_tax_income">
        </div>
        <div class="col-md-3">
            <label class="form-label" for="caller_info_child_dependent_on_tax">Child dependent on tax
                purposes</label>
            <select class="form-control" name="caller_info_child_dependent_on_tax">
                @for ($i = 1; $i <= 7; $i++)
                    <option value="{{ $i }}"
                        {{ $prospect->rd2Caller->child_dependent_on_tax == $i ? 'selected' : '' }}>
                        {{ $i }}
                    </option>
                @endfor
            </select>
        </div>
        <div class="col-md-3">
            <label class="form-label" for="caller_info_rental_charge">Rental Charge</label>
            <input type="number" class="form-control" value="{{ $prospect->rd2Caller->rental_charge }}"
                name="caller_info_rental_charge">
        </div>
        <div class="col-md-3">
            <label class="form-label" for="caller_info_rental_income">Rental Income</label>
            <input type="number" class="form-control" value="{{ $prospect->rd2Caller->rental_income }}"
                name="caller_info_rental_income">
        </div>
        <div class="col-md-3">
            <label class="form-label" for="caller_info_rental_income_70_percent">Rental Income
                (70%)</label>
            <input type="number" class="form-control" value="{{ $prospect->rd2Caller->rental_income_70_percent }}"
                name="caller_info_rental_income_70_percent">
        </div>
        <div class="col-md-3">
            <label class="form-label" for="caller_info_bank_seniority_months">Bank Seniority
                Months</label>
            <select class="form-control" name="caller_info_bank_seniority_months">

                @for ($i = 1; $i <= 12; $i++)
                <option value="{{ '+' . $i }}"
                    {{ $prospect->rd2Caller->bank_seniority_months == '+' . $i ? 'selected' : '' }}>
                    +{{ $i }}
                </option>
                @endfor
            </select>
        </div>
        <div class="col-md-3">
            <label class="form-label" for="caller_info_seniority_pel_months">Seniority P.E.I
                Months</label>
            <select class="form-control" name="caller_info_seniority_pel_months">

                @for ($i = 1; $i <= 12; $i++)
                <option value="{{ '+' . $i }}"
                    {{ $prospect->rd2Caller->seniority_pel_months == '+' . $i ? 'selected' : '' }}>
                    +{{ $i }}
                </option>
                @endfor
            </select>
        </div>
        <div class="col-md-3">
            <label class="form-label" for="caller_info_credit_remaining_to_settle">Credit Remaining to
                Settle</label>
            <input type="number" class="form-control" value="{{ $prospect->rd2Caller->credit_remaining_to_settle }}"
                name="caller_info_credit_remaining_to_settle">
        </div>
        <div class="col-md-3">
            <label class="form-label" for="caller_info_credit_a_in_progress_per_month">Credit in
                progress
                permonth</label>
            <input type="number" class="form-control" value="{{ $prospect->rd2Caller->credit_a_in_progress_per_month }}"
                name="caller_info_credit_a_in_progress_per_month">
        </div>
        <div class="col-md-3">
            <label class="form-label" for="caller_info_remaining_month_credit_a_in_progress">Remaining
                month
                credit in
                progress</label>
            <input type="number" class="form-control"
                value="{{ $prospect->rd2Caller->remaining_month_credit_a_in_progress }}"
                name="caller_info_remaining_month_credit_a_in_progress">
        </div>
        <div class="col-md-3">
            <label class="form-label" for="caller_info_family_situation">Family Situation</label>
            <select class="form-control" name="caller_info_family_situation">
                <option {{ $prospect->rd2Caller->family_situation == 'Pacified' ? 'selected' : '' }} value="Pacified">Pacified
                    (e)</option>
                <option {{ $prospect->rd2Caller->family_situation == 'Married' ? 'selected' : '' }} value="Married">Married (e)
                </option>
                <option {{ $prospect->rd2Caller->family_situation == 'Divorced' ? 'selected' : '' }} value="Divorced">Divorced
                    (é)</option>
                <option {{ $prospect->rd2Caller->family_situation == 'Cohabitation' ? 'selected' : '' }} value="Cohabitation">
                    Cohabitation</option>
                <option {{ $prospect->rd2Caller->family_situation == 'Bachelor' ? 'selected' : '' }} value="Bachelor">Bachelor
                </option>

            </select>
        </div>
        <div class="col-md-3">
            <label class="form-label" for="caller_info_personal_contribution">Personal
                Contribution</label>
            <input type="number" class="form-control" value="{{ $prospect->rd2Caller->personal_contribution }}"
                name="caller_info_personal_contribution">
        </div>

    </div>

</div>
