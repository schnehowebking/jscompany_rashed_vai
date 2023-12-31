@extends('layouts/layoutMaster')

@section('title', 'Prospect - Forms')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bs-stepper/bs-stepper.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />


@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/bs-stepper/bs-stepper.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>

@endsection

@section('page-script')
    <script src="{{ asset('assets/js/form-wizard-icons.js') }}"></script>

@endsection

@section('content')
    <h4 class="py-3 breadcrumb-wrapper mb-4">
        <span class="text-muted fw-light">Prospect /</span> Update
    </h4>

    <!-- Default -->
    <div class="row gy-4">


        <!-- Default Icons Wizard -->
        <div class="col-12">
            <form action="{{ route('prospect.update', $prospect->id) }}" method="POST">
                @csrf
                @method('PUT')
                <!-- Prospect Details -->
                <div id="" class="content">
                    <div class="content-header mb-3">
                        <h6 class="mb-0">Prospect Details</h6>
                        <small>Update Prospect Details.</small>
                    </div>
                    <div class="row g-3">
                        <input type="hidden" name="prospect_id" value="{{ $prospect->id }}">

                        <div class="col-md-6">
                          <label class="form-label" for="name">Name</label>
                          <input type="text" name="name" class="form-control" value="{{ $prospect->name }}" required />
                      </div>
                      <div class="col-md-6">
                          <label class="form-label" for="first_name">First Name</label>
                          <input type="text" name="first_name" class="form-control" value="{{ $prospect->first_name }}" required />
                      </div>

                      <div class="col-md-6">
                          <label class="form-label" for="genre">Genre</label>
                          <select class="form-control" name="genre" id="genre" required>
                              <option {{ $prospect->genre == 'MR.' ? 'selected' : '' }} value="MR.">MR.</option>
                              <option {{ $prospect->genre == 'Mrs.' ? 'selected' : '' }} value="Mrs.">Mrs.</option>
                              <option {{ $prospect->genre == 'Ste.' ? 'selected' : '' }} value="Ste.">Ste.</option>
                          </select>
                      </div>

                      <div class="col-md-6">
                          <label class="form-label" for="telephone_prospect_1">Telephone</label>
                          <input type="text" name="telephone_prospect_1" class="form-control" value="{{ $prospect->telephone_prospect_1 }}" required />
                      </div>

                        <div class="col-md-6">
                            <label class="form-label" for="desired_work">Desired Work</label>
                            <select class="form-control" name="desired_work" id="desired_work" required>
                              <option value="{{ $prospect->desired_work }}">{{ $prospect->desired_work }}</option>
                                <option {{ $prospect->desired_work == 'V.E.FA' ? 'selected' : '' }} value="V.E.FA">V.E.FA</option>
                                <option {{ $prospect->desired_work == 'M.I NEUVE' ? 'selected' : '' }} value="M.I NEUVE">M.I NEUVE</option>
                                <option {{ $prospect->desired_work == 'RENO. REHA. AMEN.' ? 'selected' : '' }} value="RENO. REHA. AMEN.">RENO. REHA. AMEN.</option>
                                <option {{ $prospect->desired_work == 'Building' ? 'selected' : '' }} value="Building">Building</option>
                                <option {{ $prospect->desired_work == 'PROF.' ? 'selected' : '' }} value="PROF.">PROF.</option>

                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="desired_house_type">Desired House Type</label>
                            <select class="form-control" name="desired_house_type" id="desired_house_type">
                                <option {{$prospect->desired_house_type == 'T1' ? 'selected' : ''}} value="T1">T1</option>
                                <option {{$prospect->desired_house_type == 'T2' ? 'selected' : ''}} value="T2">T2</option>
                                <option {{$prospect->desired_house_type == 'T3' ? 'selected' : ''}} value="T3">T3</option>
                                <option {{$prospect->desired_house_type == 'T4' ? 'selected' : ''}} value="T4">T4</option>
                                <option {{$prospect->desired_house_type == 'T5' ? 'selected' : ''}} value="T5">T5</option>
                                <option {{$prospect->desired_house_type == 'T6' ? 'selected' : ''}} value="T6">T6</option>
                                <option {{$prospect->desired_house_type == 'T7' ? 'selected' : ''}} value="T7">T7</option>
                                <option {{$prospect->desired_house_type == 'JUMELLÉE' ? 'selected' : ''}} value="JUMELLÉE">JUMELLÉE</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="has_land">DO YOU HAVE A LAND?</label>
                            <select class="form-control" name="has_land" id="has_land">
                                <option {{$prospect->has_land == 1 ? 'selected' : ''}} value="1">Yes</option>
                                <option {{$prospect->has_land == 0 ? 'selected' : ''}} value="0">No</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="land_municipality">Which municipality</label>
                            <select class="form-control" name="land_municipality" id="land_municipality">

                                <option {{ $prospect->land_municipality == 'Awala-Yalimapo' ? 'selected' : '' }} value="Awala-Yalimapo">Awala-Yalimapo</option>
                                <option {{ $prospect->land_municipality == 'Camopi' ? 'selected' : '' }} value="Camopi">Camopi</option>
                                <option {{ $prospect->land_municipality == 'Grand-Santi' ? 'selected' : '' }} value="Grand-Santi">Grand-Santi</option>
                                <option {{ $prospect->land_municipality == 'Iracoubo' ? 'selected' : '' }} value="Iracoubo">Iracoubo</option>
                                <option {{ $prospect->land_municipality == 'Kourou' ? 'selected' : '' }} value="Kourou">Kourou</option>
                                <option {{ $prospect->land_municipality == 'Macouria' ? 'selected' : '' }} value="Macouria">Macouria</option>
                                <option {{ $prospect->land_municipality == 'Mana' ? 'selected' : '' }} value="Mana">Mana</option>
                                <option {{ $prospect->land_municipality == 'Maripasoula' ? 'selected' : '' }} value="Maripasoula">Maripasoula</option>
                                <option {{ $prospect->land_municipality == 'Matoury' ? 'selected' : '' }} value="Matoury">Matoury</option>
                                <option {{ $prospect->land_municipality == 'Montsinéry-Tonnegrande' ? 'selected' : '' }} value="Montsinéry-Tonnegrande">Montsinéry-Tonnegrande</option>
                                <option {{ $prospect->land_municipality == 'Ouanary' ? 'selected' : '' }} value="Ouanary">Ouanary</option>
                                <option {{ $prospect->land_municipality == 'Papaichton' ? 'selected' : '' }} value="Papaichton">Papaichton</option>
                                <option {{ $prospect->land_municipality == 'Reginat' ? 'selected' : '' }} value="Reginat">Reginat</option>
                                <option {{ $prospect->land_municipality == 'Remire-Montjoly' ? 'selected' : '' }} value="Remire-Montjoly">Remire-Montjoly</option>
                                <option {{ $prospect->land_municipality == 'Roura' ? 'selected' : '' }} value="Roura">Roura</option>
                                <option {{ $prospect->land_municipality == 'Saint-Élie' ? 'selected' : '' }} value="Saint-Élie">Saint-Élie</option>
                                <option {{ $prospect->land_municipality == 'Saint-Georges' ? 'selected' : '' }} value="Saint-Georges">Saint-Georges</option>
                                <option {{ $prospect->land_municipality == 'Saint-Laurent-du-Maroni' ? 'selected' : '' }} value="Saint-Laurent-du-Maroni">Saint-Laurent-du-Maroni</option>
                                <option {{ $prospect->land_municipality == 'Saul' ? 'selected' : '' }} value="Saul">Saul</option>
                                <option {{ $prospect->land_municipality == 'Sinnamary' ? 'selected' : '' }} value="Sinnamary">Sinnamary</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="land_document_requested">Send the parcel plan or any
                                type of doc.</label>
                            <select name="land_document_requested" class="form-control">
                                <option {{ $prospect->land_document_requested == 1 ? 'selected' : '' }} value="1">Yes</option>
                                <option {{ $prospect->land_document_requested == 0 ? 'selected' : '' }} value="0">No</option>

                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="desired_municipality">Which Cunicipality</label>
                            <select name="desired_municipality" class="form-control">
                                <option {{ $prospect->desired_municipality == 'Awala-Yalimapo' ? "selected" : "" }} value="Awala-Yalimapo">Awala-Yalimapo</option>
                                <option {{ $prospect->desired_municipality == 'Camopi' ? "selected" : "" }} value="Camopi">Camopi</option>
                                <option {{ $prospect->desired_municipality == 'Grand-Santi' ? "selected" : "" }} value="Grand-Santi">Grand-Santi</option>
                                <option {{ $prospect->desired_municipality == 'Iracoubo' ? "selected" : "" }} value="Iracoubo">Iracoubo</option>
                                <option {{ $prospect->desired_municipality == 'Kourou' ? "selected" : "" }} value="Kourou">Kourou</option>
                                <option {{ $prospect->desired_municipality == 'Macouria' ? "selected" : "" }} value="Macouria">Macouria</option>
                                <option {{ $prospect->desired_municipality == 'Mana' ? "selected" : "" }} value="Mana">Mana</option>
                                <option {{ $prospect->desired_municipality == 'Maripasoula' ? "selected" : "" }} value="Maripasoula">Maripasoula</option>
                                <option {{ $prospect->desired_municipality == 'Matoury' ? "selected" : "" }} value="Matoury">Matoury</option>
                                <option {{ $prospect->desired_municipality == 'Montsinéry-Tonnegrande' ? "selected" : "" }} value="Montsinéry-Tonnegrande">Montsinéry-Tonnegrande</option>
                                <option {{ $prospect->desired_municipality == 'Ouanary' ? "selected" : "" }} value="Ouanary">Ouanary</option>
                                <option {{ $prospect->desired_municipality == 'Papaichton' ? "selected" : "" }} value="Papaichton">Papaichton</option>
                                <option {{ $prospect->desired_municipality == 'Reginat' ? "selected" : "" }} value="Reginat">Reginat</option>
                                <option {{ $prospect->desired_municipality == 'Remire-Montjoly' ? "selected" : "" }} value="Remire-Montjoly">Remire-Montjoly</option>
                                <option {{ $prospect->desired_municipality == 'Roura' ? "selected" : "" }} value="Roura">Roura</option>
                                <option {{ $prospect->desired_municipality == 'Saint-Élie' ? "selected" : "" }} value="Saint-Élie">Saint-Élie</option>
                                <option {{ $prospect->desired_municipality == 'Saint-Georges' ? "selected" : "" }} value="Saint-Georges">Saint-Georges</option>
                                <option {{ $prospect->desired_municipality == 'Saint-Laurent-du-Maroni' ? "selected" : "" }} value="Saint-Laurent-du-Maroni">Saint-Laurent-du-Maroni</option>
                                <option {{ $prospect->desired_municipality == 'Saul' ? "selected" : "" }} value="Saul">Saul</option>
                                <option {{ $prospect->desired_municipality == 'Sinnamary' ? "selected" : "" }} value="Sinnamary">Sinnamary</option>
                            </select>
                        </div>
                    </div>

                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label" for="desired_surface">What surface do you want?</label>
                            <input type="text" name="desired_surface" class="form-control" value="{{ $prospect->desired_surface }}" />
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="financial_simulation">DO YOU HAVE A FINANCIAL
                                SIMULATION?</label>
                            <select name="financial_simulation" class="form-control">
                                <option {{ $prospect->financial_simulation == 1 ? 'selected' : "" }} value="1">Yes</option>
                                <option {{ $prospect->financial_simulation == 0 ? 'selected' : "" }} value="0">No</option>
                            </select>
                        </div>

                    </div>
                    <div class="row g-3">
                        <div class="col-md-4 col-sm-6">
                            <label class="form-label" for="simulation_amount">What is the amount?</label>
                            <input type="number" class="form-control" name="simulation_amount" value="{{$prospect->simulation_amount}}" />
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <label class="form-label" for="simulation_bank">What is the bank?</label>
                            <select class="form-control " name="simulation_bank">
                                <option {{$prospect->simulation_bank == 'BRED-Banque Populaire' ? 'selected' : ''}} value="BRED-Banque Populaire">BRED-Banque Populaire</option>
                                <option {{$prospect->simulation_bank == 'Savings Bank' ? 'selected' : ''}} value="Savings Bank">Savings Bank</option>
                                <option {{$prospect->simulation_bank == 'Caisse de Crédit Mutuel' ? 'selected' : ''}} value="Caisse de Crédit Mutuel">Caisse de Crédit Mutuel</option>
                                <option {{$prospect->simulation_bank == 'The Postal Bank' ? 'selected' : ''}} value="The Postal Bank">The Postal Bank</option>
                                <option {{$prospect->simulation_bank == 'BNP Paribas Antilles Guyana' ? 'selected' : ''}} value="BNP Paribas Antilles Guyana">BNP Paribas Antilles Guyana</option>
                                <option {{$prospect->simulation_bank == 'Crédit Agricole Martinique-Guyane' ? 'selected' : ''}} value="Crédit Agricole Martinique-Guyane">Crédit Agricole Martinique-Guyane
                                </option>
                                <option {{$prospect->simulation_bank == 'CASDEN Banque Populaire' ? 'selected' : ''}} value="CASDEN Banque Populaire">CASDEN Banque Populaire</option>
                            </select>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <label class="form-label" for="simulation_broker">Who is the broker?</label>
                            <input type="text" class="form-control " name="simulation_broker" value="{{$prospect->simulation_broker}}"/>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-3">
                            <label class="form-label" for="desired_rd1_date">DESIRED DATE OF RD1</label>
                            <input type="date" class="form-control datepicker" name="desired_rd1_date"  value="{{$prospect->desired_rd1_date}}">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label" for="desired_rd1_time">Desired Time</label>
                            <input type="time" class="form-control" name="desired_rd1_time" value="{{ $prospect->desired_rd1_time }}">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label" for="how_know_company">HOW DO YOU KNOW OUR COMPANY?</label>
                            <select class="form-control" name="how_know_company">
                                <option {{ $prospect->how_know_company == 'Whats App' ? 'selected' : "" }} value="Whats App">Whats App</option>
                                <option {{ $prospect->how_know_company == 'Telephone' ? 'selected' : "" }} value="Telephone">Telephone</option>
                                <option {{ $prospect->how_know_company == 'Instagrams' ? 'selected' : "" }} value="Instagrams">Instagrams</option>
                                <option {{ $prospect->how_know_company == 'Facebook' ? 'selected' : "" }} value="Facebook">Facebook</option>
                                <option {{ $prospect->how_know_company == 'Cinema' ? 'selected' : "" }} value="Cinema">Cinema</option>
                                <option {{ $prospect->how_know_company == 'Paper ad' ? 'selected' : "" }} value="Paper ad">Paper ads</option>
                                <option {{ $prospect->how_know_company == 'Sign' ? 'selected' : "" }} value="Sign">Sign</option>
                                <option {{ $prospect->how_know_company == '4x3 panel' ? 'selected' : "" }} value="4x3 panel">4x3 panel</option>
                                <option {{ $prospect->how_know_company == 'Construction panel' ? 'selected' : "" }} value="Construction panel">Construction panel</option>
                                <option {{ $prospect->how_know_company == 'Word of mouth' ? 'selected' : "" }} value="Word of mouth">Word of mouth</option>
                                <option {{ $prospect->how_know_company == 'Sponsorship' ? 'selected' : "" }} value="Sponsorship">Sponsorship</option>
                                <option {{ $prospect->how_know_company == 'Others' ? 'selected' : "" }} value="Others">Others (to be defined)</option>
                            </select>

                        </div>
                        <div class="col-md-3">
                            <label class="form-label" for="how_know_company">Write Where You find</label>
                            <input type="text" name="how_know_company" class="form-control" value="{{$prospect->how_know_company}}">
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-4">
                            <label class="form-label" for="interlocutor_appointment">Appointment With</label>
                            <select class="form-control " name="interlocutor_appointment">
                              @foreach ($sales as $sale)
                              <option value="{{ $sale->id }}" {{$sale->id == $prospect->interlocutor_appointment ? 'selected' : ""}}>{{ $sale->name }}</option>
                              @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label" for="exchange_validated_by">exchange_validated_by</label>
                            <input type="text" class="form-control" value="{{$prospect->exchange_validated_by}}" disabled>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label" for="assignment_prospect_rd1_validation">VALIDATE THE
                                ASSIGNMENT PROSPECT -RD 1</label>
                            <select class="form-control" name="assignment_prospect_rd1_validation">
                                <option>Select</option>
                                <option value="1" {{$prospect->assignment_prospect_rd1_validation == 1 ? "selected" : ""}}>Yes</option>
                                <option value="0" {{$prospect->assignment_prospect_rd1_validation == 0 ? "selected" : ""}}>No</option>
                            </select>
                        </div>
                    </div>
                    <hr class="container-m-nx mb-5">
                    <div class="row g-3">

                        <div class="col-12 d-flex justify-content-between">

                          <div class="col-12 d-flex justify-content-between">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                        </div>
                    </div>
                </div>

            </form>


        </div>
        <!-- /Default Icons Wizard -->

        <!-- Your existing HTML code -->





    </div>


@endsection
