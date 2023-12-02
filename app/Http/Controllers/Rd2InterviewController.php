<?php

namespace App\Http\Controllers;

use App\Models\Prospect;

use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;
use App\Models\Rd_2_Caller;
use App\Models\Rd_2_brower;
use App\Models\ProjectFinancing;
use App\Models\LandChargeInfo;
use App\Models\HouseholdResourceCapacity;
use App\Models\HouseholdDuctment;
use App\Models\FinancingCondition;

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
      return DataTables::of($prospects)->addIndexColumn()->addColumn('action', function ($prospect) {
        $editButton = '<a href="'.route('rd2interviews.edit', $prospect->id).'" class="me-1"><i class="bx bx-edit"></i></a>';
        return $editButton;
    })->rawColumns(['action'])->make(true);
    }

    return view('backend.rd2interviews.index');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create($id)
  {
    //

    return view('backend.rd2interviews.create', compact('id'));
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
    $id = $request->input('prospect_id');

    $prospect = Prospect::find($id);

    // rd2 caller

    $rd2caller = new Rd_2_Caller();

    $rd2caller->prospect_id = $id;
    // dd($rd2caller->prospect_id);


    $rd2caller->name_or_ste = $request->input('caller_info_name_or_ste');
    $rd2caller->first_name = $request->input('caller_info_first_name');
    $rd2caller->current_address = $request->input('caller_info_current_address');
    $rd2caller->municipality = $request->input('caller_info_municipality');
    $rd2caller->mobile_phone = $request->input('caller_info_mobile_phone');
    $rd2caller->landline_phone = $request->input('caller_info_landline_phone');
    $rd2caller->date_of_birth = $request->input('caller_info_date_of_birth');
    $rd2caller->place_of_birth = $request->input('caller_info_place_of_birth');
    $rd2caller->current_residence = $request->input('caller_info_current_residence');
    $rd2caller->business_phone = $request->input('caller_info_business_phone');
    $rd2caller->email = $request->input('caller_info_email');
    $rd2caller->profession = $request->input('caller_info_profession');
    $rd2caller->type_of_contract = $request->input('caller_info_type_of_contract');
    $rd2caller->professional_maturity_months = $request->input('caller_info_professional_maturity_months');
    $rd2caller->bank_name = $request->input('caller_info_bank_name');
    $rd2caller->savings_info = $request->input('caller_info_savings_info');
    $rd2caller->annual_tax_income = $request->input('caller_info_annual_tax_income');
    $rd2caller->child_dependent_on_tax = $request->input('caller_info_child_dependent_on_tax');
    $rd2caller->rental_charge = $request->input('caller_info_rental_charge');
    $rd2caller->rental_income = $request->input('caller_info_rental_income');
    $rd2caller->rental_income_70_percent = $request->input('caller_info_rental_income_70_percent');
    $rd2caller->bank_seniority_months = $request->input('caller_info_bank_seniority_months');
    $rd2caller->seniority_pel_months = $request->input('caller_info_seniority_pel_months');
    $rd2caller->credit_remaining_to_settle = $request->input('caller_info_credit_remaining_to_settle');
    $rd2caller->family_situation = $request->input('caller_info_family_situation');
    $rd2caller->personal_contribution = $request->input('caller_info_personal_contribution');

    $rd2caller->save();

    // rd2 brower
    $rd2brower = new Rd_2_brower();

    $rd2brower->rd_2_caller_id = $rd2caller->id;
    $rd2brower->name_or_ste = $request->input('co_borrower_info_name_or_ste');
    $rd2brower->first_name = $request->input('co_borrower_info_first_name');
    $rd2brower->current_address = $request->input('co_borrower_info_current_address');
    $rd2brower->municipality = $request->input('co_borrower_info_municipality');
    $rd2brower->mobile_phone = $request->input('co_borrower_info_mobile_phone');
    $rd2brower->landline_phone = $request->input('co_borrower_info_landline_phone');
    $rd2brower->date_of_birth = $request->input('co_borrower_info_date_of_birth');
    $rd2brower->place_of_birth = $request->input('co_borrower_info_place_of_birth');
    $rd2brower->current_residence = $request->input('co_borrower_info_current_residence');
    $rd2brower->business_phone = $request->input('co_borrower_info_business_phone');
    $rd2brower->email = $request->input('co_borrower_info_email');
    $rd2brower->profession = $request->input('co_borrower_info_profession');
    $rd2brower->type_of_contract = $request->input('co_borrower_info_type_of_contract');
    $rd2brower->professional_maturity_months = $request->input('co_borrower_info_professional_maturity_months');
    $rd2brower->bank_name = $request->input('co_borrower_info_bank_name');
    $rd2brower->savings_info = $request->input('co_borrower_info_savings_info');
    $rd2brower->annual_tax_income = $request->input('co_borrower_info_annual_tax_income');
    $rd2brower->child_dependent_on_tax = $request->input('co_borrower_info_child_dependent_on_tax');
    $rd2brower->rental_charge = $request->input('co_borrower_info_rental_charge');
    $rd2brower->rental_income = $request->input('co_borrower_info_rental_income');
    $rd2brower->rental_income_70_percent = $request->input('co_borrower_info_rental_income_70_percent');
    $rd2brower->bank_seniority_months = $request->input('co_borrower_info_bank_seniority_months');
    $rd2brower->seniority_pel_months = $request->input('co_borrower_info_seniority_pel_months');
    $rd2brower->credit_remaining_to_settle = $request->input('co_borrower_info_credit_remaining_to_settle');
    $rd2brower->credit_a_in_progress_per_month = $request->input('co_borrower_info_credit_a_in_progress_per_month');
    $rd2brower->remaining_month_credit_a_in_progress = $request->input('co_borrower_info_remaining_month_credit_a_in_progress');
    $rd2brower->family_situation = $request->input('co_borrower_info_family_situation');
    $rd2brower->personal_contribution = $request->input('co_borrower_info_personal_contribution');
    $rd2brower->save();


    // landChargeInfo
    $landChargeInfo = new LandChargeInfo();

    $landChargeInfo->prospect_id = $id;
    $landChargeInfo->site_address = $request->input('land_charge_info_site_address');
    $landChargeInfo->site_municipality = $request->input('land_charge_info_site_municipality');
    $landChargeInfo->geotechnical_study = $request->input('land_charge_info_geotechnical_study');
    $landChargeInfo->land_serviced = $request->input('land_charge_info_land_serviced');
    $landChargeInfo->everything_in_sewer = $request->input('land_charge_info_everything_in_sewer');
    $landChargeInfo->parcel_or_lot_number = $request->input('land_charge_info_parcel_or_lot_number');
    $landChargeInfo->type_of_work_selected = $request->input('land_charge_info_type_of_work_selected');
    $landChargeInfo->land_on_excessive_slope = $request->input('land_charge_info_land_on_excessive_slope');
    $landChargeInfo->cadastral_section = $request->input('land_charge_info_cadastral_section');
    $landChargeInfo->urban_planning_area = $request->input('land_charge_info_urban_planning_area');
    $landChargeInfo->land_acquisition_stage = $request->input('land_charge_info_land_acquisition_stage');
    $landChargeInfo->surface_in_square_meters = $request->input('land_charge_info_surface_in_square_meters');
    $landChargeInfo->price_per_square_meter = $request->input('land_charge_info_price_per_square_meter');
    $landChargeInfo->venal_value_of_land = $request->input('land_charge_info_venal_value_of_land');

    $landChargeInfo->save();


    // householdResourceCapacity
    $householdResourceCapacity = new HouseholdResourceCapacity();
    $householdResourceCapacity->prospect_id = $id;
    $householdResourceCapacity->annual_tax_income = $request->input('household_resource_annual_tax_income');
    $householdResourceCapacity->annual_rental_income_before_abatement =
      $request->input('household_resource_annual_rental_income_before_abatement');
    $householdResourceCapacity->annual_rental_income_after_abatement =
      $request->input('household_resource_annual_rental_income_after_abatement');
    $householdResourceCapacity->potential_help_financial_assistance =
      $request->input('household_resource_potential_help_financial_assistance');
    $householdResourceCapacity->financial_capacity_of_household =
      $request->input('household_resource_financial_capacity_of_household');

    $householdResourceCapacity->save();

    // householdDocument
    $householdDocument = new HouseholdDuctment();

    $householdDocument->prospect_id = $id;
    $householdDocument->eligible_debt_before_credit = $request->input('household_document_eligible_debt_before_credit');
    $householdDocument->current_credit = $request->input('household_document_current_credit');
    $householdDocument->debt_with_monthly_credit = $request->input('household_document_debt_with_monthly_credit');
    $householdDocument->debt_with_annual_credit = $request->input('household_document_debt_with_annual_credit');
    $householdDocument->capacity = $request->input('household_document_capacity');

    $householdDocument->save();
    // financingCondition
    $financingCondition = new FinancingCondition();
    $financingCondition->prospect_id = $id;
    $financingCondition->loan_rate = $request->input('financing_condition_loan_rate');
    $financingCondition->insurance_rate = $request->input('financing_condition_insurance_rate');
    $financingCondition->teag = $request->input('financing_condition_teag');
    $financingCondition->duration_in_years = $request->input('financing_condition_duration_in_years');
    $financingCondition->duration_in_months = $request->input('financing_condition_duration_in_months');
    $financingCondition->current_credit = $request->input('financing_condition_current_credit');

    $financingCondition->save();

    // projectFinancing
    $projectFinancing = new ProjectFinancing();
    $projectFinancing->prospect_id = $id;
    $projectFinancing->contribution = $request->input('project_financing_contribution');
    $projectFinancing->loan_at_zero_rate = $request->input('project_financing_loan_at_zero_rate');
    $projectFinancing->employer_loan = $request->input('project_financing_employer_loan');
    $projectFinancing->relay_loan = $request->input('project_financing_relay_loan');
    $projectFinancing->regional_subsidy = $request->input('project_financing_regional_subsidy');
    $projectFinancing->non_loan_financing_capacity = $request->input('project_financing_non_loan_financing_capacity');
    $projectFinancing->ready = $request->input('project_financing_ready');
    $projectFinancing->schedule = $request->input('project_financing_schedule');
    $projectFinancing->debt = $request->input('project_financing_debt');
    $projectFinancing->debt_with_credit = $request->input('project_financing_debt_with_credit');
    $projectFinancing->total_financing_of_project = $request->input('project_financing_total_financing_of_project');
    $projectFinancing->save();

    $prospect->interviewed = 1;
    $prospect->save();
    return redirect()
    ->route('rd2interviews.index')
    ->withSuccess('Prospect Interview Done Successfully');
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
    // $prospect = Prospect::find($id);
    // return response()->json($prospect);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  // public function edit($id)
  // {
  //     $prospect = Prospect::find($id);
  //     $rd2caller = $prospect->rd2Caller;
  //     $rd2brower = $rd2caller->rd2brower;
  //     $landChargeInfo = $prospect->landChargeInfo;
  //     $householdResourceCapacity = $prospect->householdResourceCapacity;
  //     $householdDocument = $prospect->householdDocument;
  //     $financingCondition = $prospect->financingCondition;
  //     $projectFinancing = $prospect->projectFinancing;

  //     return view(
  //         'backend.rd2interviews.edit',
  //         compact(
  //             'prospect',
  //             'rd2caller',
  //             'rd2brower',
  //             'landChargeInfo',
  //             'householdResourceCapacity',
  //             'householdDocument',
  //             'financingCondition',
  //             'projectFinancing'
  //         )
  //     );
  // }


  public function edit($id)
  {
    $prospect = Prospect::with([
      'rd2Caller',
      'rd2Caller.rd2brower',
      'landChargeInfo',
      'householdResourceCapacity',
      'householdDocument',
      'financingCondition',
      'projectFinancing'
    ])->find($id);

    // return $prospect;
    return view('backend.rd2interviews.edit', compact('prospect'));
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
    $prospect = Prospect::with([
      'rd2caller',
      'rd2caller.rd2brower',
      'landChargeInfo',
      'householdResourceCapacity',
      'householdDocument',
      'financingCondition',
      'projectFinancing'
    ])->find($id);

    // rd2 caller
    $rd2caller = $prospect->rd2Caller;
    // dd($rd2caller);


    $rd2caller->prospect_id = $id;
    $rd2caller->name_or_ste = $request->input('caller_info_name_or_ste');
    $rd2caller->first_name = $request->input('caller_info_first_name');
    $rd2caller->current_address = $request->input('caller_info_current_address');
    $rd2caller->municipality = $request->input('caller_info_municipality');
    $rd2caller->mobile_phone = $request->input('caller_info_mobile_phone');
    $rd2caller->landline_phone = $request->input('caller_info_landline_phone');
    $rd2caller->date_of_birth = $request->input('caller_info_date_of_birth');
    $rd2caller->place_of_birth = $request->input('caller_info_place_of_birth');
    $rd2caller->current_residence = $request->input('caller_info_current_residence');
    $rd2caller->business_phone = $request->input('caller_info_business_phone');
    $rd2caller->email = $request->input('caller_info_email');
    $rd2caller->profession = $request->input('caller_info_profession');
    $rd2caller->type_of_contract = $request->input('caller_info_type_of_contract');
    $rd2caller->professional_maturity_months = $request->input('caller_info_professional_maturity_months');
    $rd2caller->bank_name = $request->input('caller_info_bank_name');
    $rd2caller->savings_info = $request->input('caller_info_savings_info');
    $rd2caller->annual_tax_income = $request->input('caller_info_annual_tax_income');
    $rd2caller->child_dependent_on_tax = $request->input('caller_info_child_dependent_on_tax');
    $rd2caller->rental_charge = $request->input('caller_info_rental_charge');
    $rd2caller->rental_income = $request->input('caller_info_rental_income');
    $rd2caller->rental_income_70_percent = $request->input('caller_info_rental_income_70_percent');
    $rd2caller->bank_seniority_months = $request->input('caller_info_bank_seniority_months');
    $rd2caller->seniority_pel_months = $request->input('caller_info_seniority_pel_months');
    $rd2caller->credit_remaining_to_settle = $request->input('caller_info_credit_remaining_to_settle');
    $rd2caller->family_situation = $request->input('caller_info_family_situation');
    $rd2caller->personal_contribution = $request->input('caller_info_personal_contribution');

    $rd2caller->save();


    // rd2 brower
    $rd2brower = $rd2caller->rd2brower;
    // dd($rd2brower);

    $rd2brower->rd_2_caller_id = $rd2brower->id;
    $rd2brower->name_or_ste = $request->input('co_borrower_info_name_or_ste');
    $rd2brower->first_name = $request->input('co_borrower_info_first_name');
    $rd2brower->current_address = $request->input('co_borrower_info_current_address');
    $rd2brower->municipality = $request->input('co_borrower_info_municipality');
    $rd2brower->mobile_phone = $request->input('co_borrower_info_mobile_phone');
    $rd2brower->landline_phone = $request->input('co_borrower_info_landline_phone');
    $rd2brower->date_of_birth = $request->input('co_borrower_info_date_of_birth');
    $rd2brower->place_of_birth = $request->input('co_borrower_info_place_of_birth');
    $rd2brower->current_residence = $request->input('co_borrower_info_current_residence');
    $rd2brower->business_phone = $request->input('co_borrower_info_business_phone');
    $rd2brower->email = $request->input('co_borrower_info_email');
    $rd2brower->profession = $request->input('co_borrower_info_profession');
    $rd2brower->type_of_contract = $request->input('co_borrower_info_type_of_contract');
    $rd2brower->professional_maturity_months = $request->input('co_borrower_info_professional_maturity_months');
    $rd2brower->bank_name = $request->input('co_borrower_info_bank_name');
    $rd2brower->savings_info = $request->input('co_borrower_info_savings_info');
    $rd2brower->annual_tax_income = $request->input('co_borrower_info_annual_tax_income');
    $rd2brower->child_dependent_on_tax = $request->input('co_borrower_info_child_dependent_on_tax');
    $rd2brower->rental_charge = $request->input('co_borrower_info_rental_charge');
    $rd2brower->rental_income = $request->input('co_borrower_info_rental_income');
    $rd2brower->rental_income_70_percent = $request->input('co_borrower_info_rental_income_70_percent');
    $rd2brower->bank_seniority_months = $request->input('co_borrower_info_bank_seniority_months');
    $rd2brower->seniority_pel_months = $request->input('co_borrower_info_seniority_pel_months');
    $rd2brower->credit_remaining_to_settle = $request->input('co_borrower_info_credit_remaining_to_settle');
    $rd2brower->credit_a_in_progress_per_month = $request->input('co_borrower_info_credit_a_in_progress_per_month');
    $rd2brower->remaining_month_credit_a_in_progress = $request->input('co_borrower_info_remaining_month_credit_a_in_progress');
    $rd2brower->family_situation = $request->input('co_borrower_info_family_situation');
    $rd2brower->personal_contribution = $request->input('co_borrower_info_personal_contribution');


    $rd2brower->save();
    // landChargeInfo
    $landChargeInfo = $prospect->landChargeInfo;

    $landChargeInfo->prospect_id = $id;
    $landChargeInfo->site_address = $request->input('land_charge_info_site_address');
    $landChargeInfo->site_municipality = $request->input('land_charge_info_site_municipality');
    $landChargeInfo->geotechnical_study = $request->input('land_charge_info_geotechnical_study');
    $landChargeInfo->land_serviced = $request->input('land_charge_info_land_serviced');
    $landChargeInfo->everything_in_sewer = $request->input('land_charge_info_everything_in_sewer');
    $landChargeInfo->parcel_or_lot_number = $request->input('land_charge_info_parcel_or_lot_number');
    $landChargeInfo->type_of_work_selected = $request->input('land_charge_info_type_of_work_selected');
    $landChargeInfo->land_on_excessive_slope = $request->input('land_charge_info_land_on_excessive_slope');
    $landChargeInfo->cadastral_section = $request->input('land_charge_info_cadastral_section');
    $landChargeInfo->urban_planning_area = $request->input('land_charge_info_urban_planning_area');
    $landChargeInfo->land_acquisition_stage = $request->input('land_charge_info_land_acquisition_stage');
    $landChargeInfo->surface_in_square_meters = $request->input('land_charge_info_surface_in_square_meters');
    $landChargeInfo->price_per_square_meter = $request->input('land_charge_info_price_per_square_meter');
    $landChargeInfo->venal_value_of_land = $request->input('land_charge_info_venal_value_of_land');

    $landChargeInfo->save();
    // householdResourceCapacity
    $householdResourceCapacity = $prospect->householdResourceCapacity;
    $householdResourceCapacity->prospect_id = $id;
    $householdResourceCapacity->annual_tax_income = $request->input('household_resource_annual_tax_income');
    $householdResourceCapacity->annual_rental_income_before_abatement =
      $request->input('household_resource_annual_rental_income_before_abatement');
    $householdResourceCapacity->annual_rental_income_after_abatement =
      $request->input('household_resource_annual_rental_income_after_abatement');
    $householdResourceCapacity->potential_help_financial_assistance =
      $request->input('household_resource_potential_help_financial_assistance');
    $householdResourceCapacity->financial_capacity_of_household =
      $request->input('household_resource_financial_capacity_of_household');

      $householdResourceCapacity->save();

    // householdDocument
    $householdDocument = $prospect->householdDocument;

    $householdDocument->prospect_id = $id;
    $householdDocument->eligible_debt_before_credit = $request->input('household_document_eligible_debt_before_credit');
    $householdDocument->current_credit = $request->input('household_document_current_credit');
    $householdDocument->debt_with_monthly_credit = $request->input('household_document_debt_with_monthly_credit');
    $householdDocument->debt_with_annual_credit = $request->input('household_document_debt_with_annual_credit');
    $householdDocument->capacity = $request->input('household_document_capacity');

    $householdDocument->save();

    // financingCondition
    $financingCondition = $prospect->financingCondition;
    $financingCondition->prospect_id = $id;
    $financingCondition->loan_rate = $request->input('financing_condition_loan_rate');
    $financingCondition->insurance_rate = $request->input('financing_condition_insurance_rate');
    $financingCondition->teag = $request->input('financing_condition_teag');
    $financingCondition->duration_in_years = $request->input('financing_condition_duration_in_years');
    $financingCondition->duration_in_months = $request->input('financing_condition_duration_in_months');
    $financingCondition->current_credit = $request->input('financing_condition_current_credit');

    $financingCondition->save();

    // projectFinancing
    $projectFinancing = $prospect->projectFinancing;
    $projectFinancing->prospect_id = $id;
    $projectFinancing->contribution = $request->input('project_financing_contribution');
    $projectFinancing->loan_at_zero_rate = $request->input('project_financing_loan_at_zero_rate');
    $projectFinancing->employer_loan = $request->input('project_financing_employer_loan');
    $projectFinancing->relay_loan = $request->input('project_financing_relay_loan');
    $projectFinancing->regional_subsidy = $request->input('project_financing_regional_subsidy');
    $projectFinancing->non_loan_financing_capacity = $request->input('project_financing_non_loan_financing_capacity');
    $projectFinancing->ready = $request->input('project_financing_ready');
    $projectFinancing->schedule = $request->input('project_financing_schedule');
    $projectFinancing->debt = $request->input('project_financing_debt');
    $projectFinancing->debt_with_credit = $request->input('project_financing_debt_with_credit');
    $projectFinancing->total_financing_of_project = $request->input('project_financing_total_financing_of_project');

    $projectFinancing->save();

    // $prospect->save();
    return redirect()
    ->route('rd2interviews.index')
    ->withSuccess('Interview Updated successfully');
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
