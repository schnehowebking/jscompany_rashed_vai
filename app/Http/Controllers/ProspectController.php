<?php

namespace App\Http\Controllers;

use App\Models\Prospect;

use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;
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
  public function index(Request $request)
  {

    if($request->ajax()) {
      $prospects = DB::table('prospects')->get();
      return DataTables::of($prospects)
        ->addIndexColumn()
        ->addColumn('action', function($prospect) {
          $html = '<a href="'.route('prospect.edit', $prospect->id).'" class="me-1"><i class="bx bx-edit"></i></a>';
          return $html;
        })
        ->rawColumns(['action'])
        ->make(true);
     };

    return \view('backend.prospect.index');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
    return view('backend.prospect.create');
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

    // $validatedData = $request->validate([
    //   'name' => 'required|string|max:255',
    //   'first_name' => 'required|string|max:255',
    //   'genre' => 'required|string|max:255',
    //   'telephone_prospect_1' => 'required|string|max:255',
    //   'desired_work' => 'required|string|max:255',
    //   'desired_house_type' => 'nullable|string|max:255',
    //   'has_land' => 'nullable|boolean',
    //   'land_municipality' => 'nullable|string|max:255',
    //   'land_document_requested' => 'nullable|string|max:255',
    //   'desired_municipality' => 'nullable|string|max:255',
    //   'desired_surface' => 'nullable|string|max:255',
    //   'financial_simulation' => 'nullable|string|max:255',
    //   'simulation_amount' => 'nullable|numeric',
    //   'simulation_bank' => 'nullable|string|max:255',
    //   'simulation_broker' => 'nullable|string|max:255',
    //   'desired_rd1_date' => 'nullable|date',
    //   'desired_rd1_time' => 'nullable|string|max:255',
    //   'how_know_company' => 'nullable|string|max:255',
    //   'how_know_company_details' => 'nullable|string|max:255',
    //   'interlocutor_appointment' => 'nullable|string|max:255',
    //   'exchange_validated_by' => 'nullable|string|max:255',
    //   'assignment_prospect_rd1_validation' => 'nullable|string|max:255',
    // ]);

    // $prospect = Prospect::create($validatedData);


    // if ($validatedData) {
      $prospect = new Prospect();
      $prospect->name = $request['name'];
      $prospect->first_name = $request['first_name'];
      $prospect->genre = $request['genre'];
      $prospect->telephone_prospect_1 = $request['telephone_prospect_1'];
      $prospect->desired_work = $request['desired_work'];
      $prospect->desired_house_type = $request['desired_house_type'];
      $prospect->has_land = $request['has_land'];
      $prospect->land_municipality = $request['land_municipality'];
      $prospect->land_document_requested = $request['land_document_requested'];
      $prospect->desired_municipality = $request['desired_municipality'];
      $prospect->desired_surface = $request['desired_surface'];
      $prospect->financial_simulation = $request['financial_simulation'];
      $prospect->simulation_amount = $request['simulation_amount'];
      $prospect->simulation_bank = $request['simulation_bank'];
      $prospect->simulation_broker = $request['simulation_broker'];
      $prospect->desired_rd1_date = $request['desired_rd1_date'];
      $prospect->desired_rd1_time = $request['desired_rd1_time'];
      $prospect->how_know_company = $request['how_know_company'];
      $prospect->interlocutor_appointment = $request['interlocutor_appointment'];
      $prospect->exchange_validated_by = $request['exchange_validated_by'];
      $prospect->assignment_prospect_rd1_validation = $request['assignment_prospect_rd1_validation'];

      $prospect->save();
      // dd($request->all());

      return redirect()
        ->back()
        ->withSuccess('Prospect created successfully');
    // // } else {
    //   return redirect()
    //     ->back()
    //     ->with('success', 'Error');
    // }
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
  public function edit($id)
  {
    //
    $prospect = Prospect::find($id);
    return view('backend.prospect.edit', \get_defined_vars());
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Prospect  $prospect
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    //

    Prospect::find($id)->update([
      'name' => $request->name,
      'first_name' => $request->fisrt_name,
    ]);


    return \redirect()->route('prospect.index')->withSuccess('Propect updated successfully');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Prospect  $prospect
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    //

    $prospect = Prospect::find($id);
    $prospect->delete();
    return \redirect()->route('prospect.index')->withSuccess("User removed successfully");
  }
}
