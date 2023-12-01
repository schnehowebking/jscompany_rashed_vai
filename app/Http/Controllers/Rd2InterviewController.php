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
  public function create($id)
  {
    //

    return view('backend.rd2interviews.create', compact('id') );
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request ,$id)
  {
    //
    $prospect = new Prospect();
    // rd2 caller
    $rd2caller = $prospect->rd2Caller();

    $rd2caller->prospect_id = $id;
    $rd2caller->name_or_ste = $request->caller_info_name_or_ste;
    $rd2caller->first_name = $request->caller_info_first_name;
    $rd2caller->current_address = $request->caller_info_current_address;
    $rd2caller->municipality = $request->caller_info_municipality;
    $rd2caller->mobile_phone = $request->caller_info_mobile_phone;
    $rd2caller->landline_phone = $request->caller_info_landline_phone;
    $rd2caller->date_of_birth = $request->caller_info_date_of_birth;
    $rd2caller->place_of_birth = $request->caller_info_place_of_birth;
    $rd2caller->current_residence = $request->caller_info_current_residence;
    $rd2caller->business_phone = $request->caller_info_business_phone;
    $rd2caller->email = $request->caller_info_email;
    $rd2caller->profession = $request->caller_info_profession;
    $rd2caller->type_of_contract = $request->caller_info_type_of_contract;
    $rd2caller->professional_maturity_months = $request->caller_info_professional_maturity_months;
    $rd2caller->bank_name = $request->caller_info_bank_name;
    $rd2caller->savings_info = $request->caller_info_savings_info;
    $rd2caller->annual_tax_income = $request->caller_info_annual_tax_income;
    $rd2caller->child_dependent_on_tax = $request->caller_info_child_dependent_on_tax;
    $rd2caller->rental_charge = $request->caller_info_rental_charge;
    $rd2caller->rental_income = $request->caller_info_rental_income;
    $rd2caller->rental_income_70_percent = $request->caller_info_rental_income_70_percent;
    $rd2caller->bank_seniority_months = $request->caller_info_bank_seniority_months;
    $rd2caller->seniority_pel_months = $request->caller_info_seniority_pel_months;
    $rd2caller->credit_remaining_to_settle = $request->caller_info_credit_remaining_to_settle;
    $rd2caller->family_situation = $request->caller_info_family_situation;
    $rd2caller->personal_contribution = $request->caller_info_personal_contribution;

    // rd2 brower
    $rd2brower = $rd2caller->rd2brower();

    $rd2brower->caller_id = $rd2brower->id;
    $rd2brower->name_or_ste = $request->co_borrower_info_name_or_ste;
    $rd2brower->first_name = $request->co_borrower_info_first_name;
    $rd2brower->current_address = $request->co_borrower_info_current_address;
    $rd2brower->municipality = $request->co_borrower_info_municipality;
    $rd2brower->mobile_phone = $request->co_borrower_info_mobile_phone;
    $rd2brower->landline_phone = $request->co_borrower_info_landline_phone;
    $rd2brower->date_of_birth = $request->co_borrower_info_date_of_birth;
    $rd2brower->place_of_birth = $request->co_borrower_info_place_of_birth;
    $rd2brower->current_residence = $request->co_borrower_info_current_residence;
    $rd2brower->business_phone = $request->co_borrower_info_business_phone;
    $rd2brower->email = $request->co_borrower_info_email;
    $rd2brower->profession = $request->co_borrower_info_profession;
    $rd2brower->type_of_contract = $request->co_borrower_info_type_of_contract;
    $rd2brower->professional_maturity_months = $request->co_borrower_info_professional_maturity_months;
    $rd2brower->bank_name = $request->co_borrower_info_bank_name;
    $rd2brower->savings_info = $request->co_borrower_info_savings_info;
    $rd2brower->annual_tax_income = $request->co_borrower_info_annual_tax_income;
    $rd2brower->child_dependent_on_tax = $request->co_borrower_info_child_dependent_on_tax;
    $rd2brower->rental_charge = $request->co_borrower_info_rental_charge;
    $rd2brower->rental_income = $request->co_borrower_info_rental_income;
    $rd2brower->rental_income_70_percent = $request->co_borrower_info_rental_income_70_percent;
    $rd2brower->bank_seniority_months = $request->co_borrower_info_bank_seniority_months;
    $rd2brower->seniority_pel_months = $request->co_borrower_info_seniority_pel_months;
    $rd2brower->credit_remaining_to_settle = $request->co_borrower_info_credit_remaining_to_settle;
    $rd2brower->credit_a_in_progress_per_month = $request->co_borrower_info_credit_a_in_progress_per_month;
    $rd2brower->remaining_month_credit_a_in_progress = $request->co_borrower_info_remaining_month_credit_a_in_progress;
    $rd2brower->family_situation = $request->co_borrower_info_family_situation;
    $rd2brower->personal_contribution = $request->co_borrower_info_personal_contribution;


    // landChargeInfo
    $landChargeInfo = $prospect->landChargeInfo();

    $landChargeInfo->prospect_id = $request->prospect_id;
    $landChargeInfo->site_address = $request->land_charge_info_site_address;
    $landChargeInfo->site_municipality = $request->land_charge_info_site_municipality;
    $landChargeInfo->geotechnical_study = $request->land_charge_info_geotechnical_study;
    $landChargeInfo->land_serviced = $request->land_charge_info_land_serviced;
    $landChargeInfo->everything_in_sewer = $request->land_charge_info_everything_in_sewer;
    $landChargeInfo->parcel_or_lot_number = $request->land_charge_info_parcel_or_lot_number;
    $landChargeInfo->type_of_work_selected = $request->land_charge_info_type_of_work_selected;
    $landChargeInfo->land_on_excessive_slope = $request->land_charge_info_land_on_excessive_slope;
    $landChargeInfo->cadastral_section = $request->land_charge_info_cadastral_section;
    $landChargeInfo->urban_planning_area = $request->land_charge_info_urban_planning_area;
    $landChargeInfo->land_acquisition_stage = $request->land_charge_info_land_acquisition_stage;
    $landChargeInfo->surface_in_square_meters = $request->land_charge_info_surface_in_square_meters;
    $landChargeInfo->price_per_square_meter = $request->land_charge_info_price_per_square_meter;
    $landChargeInfo->venal_value_of_land = $request->land_charge_info_venal_value_of_land;


    // householdResourceCapacity
    $householdResourceCapacity = $prospect->householdResourceCapacity();
    $householdResourceCapacity->prospect_id = $request->prospect_id;
    $householdResourceCapacity->annual_tax_income = $request->household_resource_annual_tax_income;
    $householdResourceCapacity->annual_rental_income_before_abatement = $request->household_resource_annual_rental_income_before_abatement;
    $householdResourceCapacity->annual_rental_income_after_abatement = $request->household_resource_annual_rental_income_after_abatement;
    $householdResourceCapacity->potential_help_financial_assistance = $request->household_resource_potential_help_financial_assistance;
    $householdResourceCapacity->financial_capacity_of_household = $request->household_resource_financial_capacity_of_household;


    // householdDocument
    $householdDocument = $prospect->householdDocument();

    $householdDocument->prospect_id = $request->prospect_id;
    $householdDocument->eligible_debt_before_credit = $request->household_document_eligible_debt_before_credit;
    $householdDocument->current_credit = $request->household_document_current_credit;
    $householdDocument->debt_with_monthly_credit = $request->household_document_debt_with_monthly_credit;
    $householdDocument->debt_with_annual_credit = $request->household_document_debt_with_annual_credit;
    $householdDocument->capacity = $request->household_document_capacity;


    // financingCondition
    $financingCondition = $prospect->financingCondition();
    $financingCondition->prospect_id = $request->financing_condition_prospect_id;
    $financingCondition->loan_rate = $request->financing_condition_loan_rate;
    $financingCondition->insurance_rate = $request->financing_condition_insurance_rate;
    $financingCondition->teag = $request->financing_condition_teag;
    $financingCondition->duration_in_years = $request->financing_condition_duration_in_years;
    $financingCondition->duration_in_months = $request->financing_condition_duration_in_months;
    $financingCondition->current_credit = $request->financing_condition_current_credit;


    // projectFinancing
    $projectFinancing = $prospect->projectFinancing();
    $projectFinancing->prospect_id =  $request->prospect_id;
    $projectFinancing->contribution = $request->project_financing_contribution;
    $projectFinancing->loan_at_zero_rate = $request->project_financing_loan_at_zero_rate;
    $projectFinancing->employer_loan = $request->project_financing_employer_loan;
    $projectFinancing->relay_loan = $request->project_financing_relay_loan;
    $projectFinancing->regional_subsidy = $request->project_financing_regional_subsidy;
    $projectFinancing->non_loan_financing_capacity = $request->project_financing_non_loan_financing_capacity;
    $projectFinancing->ready = $request->project_financing_ready;
    $projectFinancing->schedule = $request->project_financing_schedule;
    $projectFinancing->debt = $request->project_financing_debt;
    $projectFinancing->debt_with_credit = $request->project_financing_debt_with_credit;
    $projectFinancing->total_financing_of_project = $request->project_financing_total_financing_of_project;


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
