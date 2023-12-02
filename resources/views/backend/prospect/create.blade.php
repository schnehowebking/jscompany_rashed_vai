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
        <span class="text-muted fw-light">Prospect /</span> Create
    </h4>

    <!-- Default -->
    <div class="row gy-4">


        <!-- Default Icons Wizard -->
        <div class="col-12">
            <form action="{{ route('prospect.store') }}" method="POST">
                @csrf
                <!-- Prospect Details -->
                <div id="" class="content">
                    <div class="content-header mb-3">
                        <h6 class="mb-0">Prospect Details</h6>
                        <small>Enter Prospect Details.</small>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label" for="name">Name</label>
                            <input type="text" name="name" class="form-control" required />
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="first_name">First Name</label>
                            <input type="text" name="first_name" class="form-control" required />
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="email">Genre</label>
                            <select class="form-control" name="genre" id="genre" required>
                                <option value="">Select One</option>
                                <option value="MR.">MR.</option>
                                <option value="Mrs.">Mrs.</option>
                                <option value="Ste.">Ste.</option>
                            </select>

                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="telephone_prospect_1">Telephone</label>
                            <input type="text" name="telephone_prospect_1" class="form-control" required />
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="desired_work">Desired Work</label>
                            <select class="form-control" name="desired_work" id="desired_work" required>
                              <option value="">Select one</option>
                              <option value="V.E.FA">V.E.FA</option>
                                <option value="M.I NEUVE">M.I NEUVE</option>
                                <option value="RENO. REHA. AMEN.">RENO. REHA. AMEN.</option>
                                <option value="Building">Building</option>
                                <option value="PROF.">PROF.</option>

                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="desired_house_type">Desired House Type</label>
                            <select class="form-control" name="desired_house_type" id="desired_house_type">
                                <option value="">Select One</option>
                                <option value="T1">T1</option>
                                <option value="T2">T2</option>
                                <option value="T3">T3</option>
                                <option value="T4">T4</option>
                                <option value="T5">T5</option>
                                <option value="T6">T6</option>
                                <option value="T7">T7</option>
                                <option value="JUMELLÉE">JUMELLÉE</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="has_land">DO YOU HAVE A LAND?</label>
                            <select class="form-control" name="has_land" id="has_land">
                                <option value="">Select One</option>
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="land_municipality">Which municipality</label>
                            <select class="form-control" name="land_municipality" id="land_municipality">
                              <option value="">Select one</option>
                              <option value="Awala-Yalimapo">Awala-Yalimapo</option>
                                <option value="Camopi">Camopi</option>
                                <option value="Grand-Santi">Grand-Santi</option>
                                <option value="Iracoubo">Iracoubo</option>
                                <option value="Kourou">Kourou</option>
                                <option value="Macouria">Macouria</option>
                                <option value="Mana">Mana</option>
                                <option value="Maripasoula">Maripasoula</option>
                                <option value="Matoury">Matoury</option>
                                <option value="Montsinéry-Tonnegrande">Montsinéry-Tonnegrande</option>
                                <option value="Ouanary">Ouanary</option>
                                <option value="Papaichton">Papaichton</option>
                                <option value="Reginat">Reginat</option>
                                <option value="Remire-Montjoly">Remire-Montjoly</option>
                                <option value="Roura">Roura</option>
                                <option value="Saint-Élie">Saint-Élie</option>
                                <option value="Saint-Georges">Saint-Georges</option>
                                <option value="Saint-Laurent-du-Maroni">Saint-Laurent-du-Maroni</option>
                                <option value="Saul">Saul</option>
                                <option value="Sinnamary">Sinnamary</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="land_document_requested">Send the parcel plan or any
                                type of doc.</label>
                            <select name="land_document_requested" class="form-control">
                                <option value="">Select One</option>
                                <option value="1">Yes</option>
                                <option value="0">No</option>

                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="desired_municipality">Which Cunicipality</label>
                            <select name="desired_municipality" class="form-control">
                              <option value="">Select One</option>
                              <option value="Awala-Yalimapo">Awala-Yalimapo</option>
                                <option value="Camopi">Camopi</option>
                                <option value="Grand-Santi">Grand-Santi</option>
                                <option value="Iracoubo">Iracoubo</option>
                                <option value="Kourou">Kourou</option>
                                <option value="Macouria">Macouria</option>
                                <option value="Mana">Mana</option>
                                <option value="Maripasoula">Maripasoula</option>
                                <option value="Matoury">Matoury</option>
                                <option value="Montsinéry-Tonnegrande">Montsinéry-Tonnegrande</option>
                                <option value="Ouanary">Ouanary</option>
                                <option value="Papaichton">Papaichton</option>
                                <option value="Reginat">Reginat</option>
                                <option value="Remire-Montjoly">Remire-Montjoly</option>
                                <option value="Roura">Roura</option>
                                <option value="Saint-Élie">Saint-Élie</option>
                                <option value="Saint-Georges">Saint-Georges</option>
                                <option value="Saint-Laurent-du-Maroni">Saint-Laurent-du-Maroni</option>
                                <option value="Saul">Saul</option>
                                <option value="Sinnamary">Sinnamary</option>
                            </select>
                        </div>
                    </div>

                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label" for="desired_surface">What surface do you want?</label>
                            <input type="text" name="desired_surface" class="form-control" />
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="financial_simulation">DO YOU HAVE A FINANCIAL
                                SIMULATION?</label>
                            <select name="financial_simulation" class="form-control">
                                <option value="">Select One</option>
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>

                    </div>
                    <div class="row g-3">
                        <div class="col-md-4 col-sm-6">
                            <label class="form-label" for="simulation_amount">What is the amount?</label>
                            <input type="number" class="form-control" name="simulation_amount" />
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <label class="form-label" for="simulation_bank">What is the bank?</label>
                            <select class="form-control " name="simulation_bank">
                                <option value="">Select One</option>
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
                        <div class="col-md-4 col-sm-6">
                            <label class="form-label" for="simulation_broker">Who is the broker?</label>
                            <input type="text" class="form-control " name="simulation_broker" />
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-3">
                            <label class="form-label" for="desired_rd1_date">DESIRED DATE OF RD1</label>
                            <input type="date" class="form-control datepicker" name="desired_rd1_date">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label" for="desired_rd1_time">Desired Time</label>
                            <input type="time" class="form-control" name="desired_rd1_time">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label" for="how_know_company">HOW DO YOU KNOW OUR COMPANY?</label>
                            <select class="form-control" name="how_know_company">
                                <option value="">Select One</option>
                                <option value="Whats app">Whats app</option>
                                <option value="Telephone">Telephone</option>
                                <option value="Instagrams">Instagrams</option>
                                <option value="Facebook">Facebook</option>
                                <option value="Cinema">Cinema</option>
                                <option value="Paper ad">Paper ad</option>
                                <option value="Sign">Sign</option>
                                <option value="4x3 panel">4x3 panel</option>
                                <option value="Construction panel">Construction panel</option>
                                <option value="Word of mouth">Word of mouth</option>
                                <option value="Sponsorship">Sponsorship</option>
                                <option value="Others">Others (to be defined)</option>
                            </select>

                        </div>
                        <div class="col-md-3">
                            <label class="form-label" for="how_know_company">Write Where You find</label>
                            <input type="text" name="how_know_company" class="form-control">
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-4">
                            <label class="form-label" for="interlocutor_appointment">Appointment With</label>
                            <select class="form-control " name="interlocutor_appointment" required>
                                <option value="">Select One</option>
                                @foreach ($sales as $sale)
                                  <option value="{{ $sale->id }}">{{ $sale->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label" for="exchange_validated_by">Exchange Validated By</label>
                            <input type="text" class="form-control" value="{{Auth::user()->name}}">
                            {{-- <select class="form-control" name="exchange_validated_by">
                                <option value="">Select One</option>
                                <option value="secretariat">Secretariat</option>
                                <option value="respVente">Resp.Vente</option>
                                <option value="seller1">Seller 1</option>
                                <option value="seller2">Seller 2</option>
                                <option value="draftsman1">Draftsman 1</option>
                                <option value="draftsman2">Draftsman 2</option>
                                <option value="siteManager1">Site manager 1</option>
                                <option value="siteManager2">Site manager 2</option>
                                <option value="constructionManager1">Construction manager 1</option>
                                <option value="constructionManager2">Construction manager 2</option>
                                <option value="financialResp">Financial resp.</option>
                                <option value="pdg">P.D.G</option>
                            </select> --}}
                        </div>
                        <div class="col-md-4">
                            <label class="form-label" for="assignment_prospect_rd1_validation">VALIDATE THE
                                ASSIGNMENT PROSPECT -RD 1</label>
                            <select class="form-control" name="assignment_prospect_rd1_validation">
                                <option value="">Select One</option>
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                    <hr class="container-m-nx mb-5">
                    <div class="row g-3">

                        <div class="col-12 d-flex justify-content-between">

                            <button onclick="submitformdata();" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </div>

            </form>


        </div>
        <!-- /Default Icons Wizard -->

        <!-- Your existing HTML code -->





    </div>

    <script>
        submitformdata() {
            document.addEventListerner('click', function(e) {
                e.preventDefault();
                $.ajax({
                    url: '/prospect/store',
                    type: 'POST',
                })
            });

        };
    </script>
@endsection
