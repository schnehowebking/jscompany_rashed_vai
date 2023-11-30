<?php

namespace App\Http\Controllers;

use App\Models\Prospect;
// use App\Models\Rd_2_Caller;
// use App\Models\Rd_2_brower;
// use App\Models\FinancingCondition;
// use App\Models\HouseholdDuctment;
// use App\Models\HouseholdResourceCapacity;
// use App\Models\LandChargeInfo;
// use App\Models\ProjectFinancing;

use Illuminate\Http\Request;

class ProspectController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    //
    return view('backend.prospect.create');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    //
    // Validate the form data
    $validatedData = $request->validate([
      'name' => 'required|string',
      'first_name' => 'required|string',
      'genre' => 'required|string',
      'telephone_prospect_1' => 'required|string',
      'desired_work' => 'required|string',
      'desired_house_type' => 'string|nullable',
      'has_land' => 'string|nullable',
      'land_municipality' => 'string|nullable',
      'land_document_requested' => 'string|nullable',
      'desired_municipality' => 'string|nullable',
      'desired_surface' => 'string|nullable',
      'financial_simulation' => 'string|nullable',
      'simulation_amount' => 'numeric|nullable',
      'simulation_bank' => 'string|nullable',
      'simulation_broker' => 'string|nullable',
      'desired_rd1_date' => 'string|nullable',
      'desired_rd1_time' => 'string|nullable',
      'how_know_company' => 'string|nullable',
      'how_know_company_details' => 'string|nullable',
      'interlocutor_appointment' => 'string|nullable',
      'exchange_validated_by' => 'string|nullable',
      'assignment_prospect_rd1_validation' => 'string|nullable',
    ]);

    $prospect = new Prospect($validatedData);

    $prospect->name = $request->name;
    $prospect->first_name = $request->first_name;
    $prospect->genre = $request->genre;
    $prospect->telephone_prospect_1 = $request->telephone_prospect_1;
    $prospect->desired_work = $request->desired_work;
    $prospect->desired_house_type = $request->desired_house_type;
    $prospect->has_land = $request->has_land;
    $prospect->land_municipality = $request->land_municipality;
    $prospect->land_document_requested = $request->land_document_requested;
    $prospect->desired_municipality = $request->desired_municipality;
    $prospect->desired_surface = $request->desired_surface;
    $prospect->financial_simulation = $request->financial_simulation;
    $prospect->simulation_amount = $request->simulation_amount;
    $prospect->simulation_bank = $request->simulation_bank;
    $prospect->simulation_broker = $request->simulation_broker;
    $prospect->desired_rd1_date = $request->desired_rd1_date;
    $prospect->desired_rd1_time = $request->desired_rd1_time;
    $prospect->how_know_company = $request->how_know_company;
    $prospect->how_know_company_details = $request->how_know_company_details;
    $prospect->interlocutor_appointment = $request->interlocutor_appointment;
    $prospect->exchange_validated_by = $request->exchange_validated_by;


    dd($prospect->name);
    $prospect->save();

    return redirect()->back()->with('success', 'Prospect created successfully');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Prospect  $prospect
   * @return \Illuminate\Http\Response
   */
  public function show(Prospect $prospect)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Prospect  $prospect
   * @return \Illuminate\Http\Response
   */
  public function edit(Prospect $prospect)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Prospect  $prospect
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Prospect $prospect)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Prospect  $prospect
   * @return \Illuminate\Http\Response
   */
  public function destroy(Prospect $prospect)
  {
    //
  }
}
