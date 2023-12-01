<?php

namespace App\Http\Controllers;

use App\Models\Prospect;

use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class Rd2InterviewController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Request $request)
  {
    //
    if ($request->ajax()) {
      $prospects = DB::table('prospects')->where('interviewed', 1)->get();
      return DataTables::of($prospects)
        ->addIndexColumn()

        ->make(true);
    }

    return \view('backend.rd2interviews.index');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
    return view('backend.rd2interviews.create');
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
    $prospect = new Prospect();
    // rd2 caller
    $rd2caller = $prospect->rd2Caller();

    $rd2caller->prospect_id = $prospect->id;
    $rd2caller->name_or_ste = $request->name_or_ste;
    $rd2caller->first_name = $request->first_name;
    $rd2caller->current_address = $request->current_address;
    $rd2caller->municipality = $request->municipality;
    $rd2caller->mobile_phone = $request->mobile_phone;
    $rd2caller->landline_phone = $request->landline_phone;
    $rd2caller->date_of_birth = $request->date_of_birth;
    $rd2caller->place_of_birth = $request->place_of_birth;
    $rd2caller->current_residence = $request->current_residence;
    $rd2caller->business_phone = $request->business_phone;
    $rd2caller->email = $request->email;
    $rd2caller->profession = $request->profession;
    $rd2caller->type_of_contract = $request->type_of_contract;
    $rd2caller->professional_maturity_months = $request->professional_maturity_months;
    $rd2caller->bank_name = $request->bank_name;
    $rd2caller->savings_info = $request->savings_info;
    $rd2caller->annual_tax_income = $request->annual_tax_income;
    $rd2caller->child_dependent_on_tax = $request->child_dependent_on_tax;
    $rd2caller->rental_charge = $request->rental_charge;
    $rd2caller->rental_income = $request->rental_income;
    $rd2caller->rental_income_70_percent = $request->rental_income_70_percent;
    $rd2caller->bank_seniority_months = $request->bank_seniority_months;
    $rd2caller->seniority_pel_months = $request->seniority_pel_months;
    $rd2caller->credit_remaining_to_settle = $request->credit_remaining_to_settle;
    $rd2caller->family_situation = $request->family_situation;
    $rd2caller->personal_contribution = $request->personal_contribution;

    // rd2 brower
    $rd2brower = $rd2caller->rd2brower();

    $rd2brower->caller_id = $rd2brower->id;
    $rd2brower->name_or_ste = $request->id;
    $rd2brower->first_name = $request->id;
    $rd2brower->current_address = $request->id;
    $rd2brower->municipality = $request->id;
    $rd2brower->mobile_phone = $request->id;
    $rd2brower->landline_phone = $request->id;
    $rd2brower->date_of_birth = $request->id;
    $rd2brower->place_of_birth = $request->id;
    $rd2brower->current_residence = $request->id;
    $rd2brower->business_phone = $request->id;
    $rd2brower->email = $request->id;
    $rd2brower->profession = $request->id;
    $rd2brower->type_of_contract = $request->id;
    $rd2brower->professional_maturity_months = $request->id;
    $rd2brower->bank_name = $request->id;
    $rd2brower->savings_info = $request->id;
    $rd2brower->annual_tax_income = $request->id;
    $rd2brower->child_dependent_on_tax = $request->id;
    $rd2brower->rental_charge = $request->id;
    $rd2brower->rental_income = $request->id;
    $rd2brower->rental_income_70_percent = $request->id;
    $rd2brower->bank_seniority_months = $request->id;
    $rd2brower->seniority_pel_months = $request->id;
    $rd2brower->credit_remaining_to_settle = $request->id;
    $rd2brower->credit_a_in_progress_per_month = $request->id;
    $rd2brower->remaining_month_credit_a_in_progress = $request->id;
    $rd2brower->family_situation = $request->id;
    $rd2brower->personal_contribution = $request->id;

    // landChargeInfo

    $landChargeInfo = $prospect->landChargeInfo();

    $landChargeInfo->prospect_id = $prospect->id;
    $landChargeInfo->site_address = $request->id;
    $landChargeInfo->site_municipality = $request->id;
    $landChargeInfo->geotechnical_study = $request->id;
    $landChargeInfo->land_serviced = $request->id;
    $landChargeInfo->everything_in_sewer = $request->id;
    $landChargeInfo->parcel_or_lot_number = $request->id;
    $landChargeInfo->type_of_work_selected = $request->id;
    $landChargeInfo->land_on_excessive_slope = $request->id;
    $landChargeInfo->cadastral_section = $request->id;
    $landChargeInfo->urban_planning_area = $request->id;
    $landChargeInfo->land_acquisition_stage = $request->id;
    $landChargeInfo->surface_in_square_meters = $request->id;
    $landChargeInfo->price_per_square_meter = $request->id;
    $landChargeInfo->venal_value_of_land = $request->id;

    // householdResourceCapacity
    $householdResourceCapacity = $prospect->householdResourceCapacity();
    $householdResourceCapacity->prospect_id = $prospect->id;
    $householdResourceCapacity->annual_tax_income = $request->id;
    $householdResourceCapacity->annual_rental_income_before_abatement = $request->id;
    $householdResourceCapacity->annual_rental_income_after_abatement = $request->id;
    $householdResourceCapacity->potential_help_financial_assistance = $request->id;
    $householdResourceCapacity->financial_capacity_of_household = $request->id;

    // householdDocument
    $householdDocument = $prospect->householdDocument();

    $householdDocument->prospect_id = $prospect->id;
    $householdDocument->eligible_debt_before_credit = $request->id;
    $householdDocument->current_credit = $request->id;
    $householdDocument->debt_with_monthly_credit = $request->id;
    $householdDocument->debt_with_annual_credit = $request->id;
    $householdDocument->capacity = $request->id;

    // financingCondition
    $financingCondition = $prospect->financingCondition();

    $financingCondition->prospect_id = $prospect->id;
    $financingCondition->loan_rate = $request->id;
    $financingCondition->insurance_rate = $request->id;
    $financingCondition->teag = $request->id;
    $financingCondition->duration_in_years = $request->id;
    $financingCondition->duration_in_months = $request->id;
    $financingCondition->current_credit = $request->id;

    // projectFinancing
    $projectFinancing = $prospect->projectFinancing();
    $projectFinancing->prospect_id = $prospect->id;
    $projectFinancing->contribution = $request->id;
    $projectFinancing->loan_at_zero_rate = $request->id;
    $projectFinancing->employer_loan = $request->id;
    $projectFinancing->relay_loan = $request->id;
    $projectFinancing->regional_subsidy = $request->id;
    $projectFinancing->non_loan_financing_capacity = $request->id;
    $projectFinancing->ready = $request->id;
    $projectFinancing->schedule = $request->id;
    $projectFinancing->debt = $request->id;
    $projectFinancing->debt_with_credit = $request->id;
    $projectFinancing->total_financing_of_project = $request->id;

    $prospect->save();
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    //
  }
}
