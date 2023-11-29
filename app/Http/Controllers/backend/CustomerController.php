<?php

namespace App\Http\Controllers\backend;

use Carbon\Carbon;
use App\Models\Brand;
use App\Models\Paail;
use App\Models\Panel;
use App\Models\Finance;
use App\Models\Customer;
use App\Models\Application;
use App\Models\SolarProgam;
use Illuminate\Http\Request;
use App\Mail\NewApplicationMail;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Request $request)
  {
    if ($request->ajax()) {
    //   $customers = Customer::has('application')->with(['application', 'user'])->where('status', '!=', 'temp')->get();
    if(Auth::user()->role == 'sales') {
  $customers = Customer::has('application')->with(['application', 'user'])->where('status', 'pending')->where('user_id', auth()->user()->id)->where('signer_id', '!=', null)->get();
    } else {
        $customers = Customer::has('application')->with(['application', 'user'])->whereIn('status', ['approved', 'client'])->whereNull('signer_id')->get();
    }
      return DataTables::of($customers)
        ->addIndexColumn()
        ->addColumn('action', function ($customer) {
          $html =
            '<a href="' . route('customers.edit', $customer->id) . '" class="me-1"><i class="bx bx-edit"></i></a>';
          return $html;
        })
        ->addColumn('status', function ($customer) {
          $html = '<span class="badge bg-info">' . \ucfirst($customer->status) . '</span>';
          return $html;
        })
        ->addColumn('name', function ($customer) {
          return $customer->first_name . ' ' . $customer->last_name;
        })
        ->addColumn('address', function ($customer) {
          $address = '';
          $address .= $customer->street ? '<b>Street : </b> ' . \ucfirst($customer->street) . ', ' : '';
          $address .= $customer->city ? '<b>City : </b> ' . \ucfirst($customer->city) . ', <br>' : '';
          $address .= $customer->street ? '<b>Zip : </b> ' . $customer->zip : '';
          return $address;
        })
        ->rawColumns(['action', 'status', 'address', 'name'])
        ->make(true);
    }
    return view('backend.customers.index');
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
    // dd($request->all());
    $application = Application::find(\session('application_id'));
    $ids = [];
    $customer_id = null;
    $customers = [];
    $signer_id = null;
    foreach ($request->first_name as $i => $first_name) {
      $customer = Customer::create([
        'signer_id' => $signer_id,
        'application_id' => $application->id,
        'user_id' => \auth()->user()->id,
        'email' => $request->email[$i],
        'first_name' => $first_name,
        'last_name' => $request->last_name[$i],
        'phone' => $request->phone[$i],
        'hoa_name_number' => $i == 0 ? $request->hoa : null,
        'street' => $i == 0 ? $request->street[$i] : null,
        'city' => $i == 0 ? $request->city[$i] : null,
        'zip' => $i == 0 ? $request->zip[$i] : null,
        'state' => $i == 0 ? $request->state[$i] : null,
        'dob' => $request->dob[$i],
        'ssn' => $request->ssn[$i],
        'driver_license' => $request->driver_license[$i],
        'dl_issue_date' => $request->dl_issue_date[$i],
        'dl_exp_date' => $request->dl_exp_date[$i],
        'anual_gross_income' => $request->anual_gross_income[$i],
        'additional_income' => $request->additional_income[$i],
        'status' => 'pending',
      ]);
      if ($request->hasFile('driver_license_photo')) {
        $licese_photo = $request->driver_license_photo[$i];
        $ext = $licese_photo->getClientOriginalExtension();
        $name = \uniqid() . '.' . $ext;
        $licese_photo->move(\public_path('licenses'), $name);
        $customer->driver_license_photo = $name;
        $customer->save();
      }
      \array_push($ids, $customer->id);
      $customers[$i] = $customer;
      $signer_id = $customer->id;
    }
    \session()->put('customer_ids', \json_encode($ids));
    $paails = Paail::all();
    $solar_programs = SolarProgam::all();
    $brands = Brand::all();
    $panels = Panel::all();
    $finances = Finance::all();
    $selected_brand = Brand::where('name', $application->selected_brand)->first();
    return view('backend.application.preview', \get_defined_vars());
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
    $customer = Customer::with(['application', 'user', 'signer'])
    ->where('id', $id)
    ->first();
    $paails = Paail::all();
    $solar_programs = SolarProgam::all();
    $brands = Brand::all();
    $panels = Panel::all();
    $finances = Finance::all();
    $selected_brand = Brand::where('name', $customer->application->selected_brand)->first();
    return view('backend.customers.edit', \get_defined_vars());
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */

  public function customer_update(Request $request, $id)
  {
    $customer = Customer::with(['signer'])
    ->where('id', $id)
    ->first();
    $customer->update([
      'email' => $request->email[0],
      'first_name' => $request->first_name[0],
      'last_name' => $request->last_name[0],
      'phone' => $request->phone[0],
      'hoa_name_number' => $request->hoa,
      'street' => $request->street[0],
      'city' => $request->city[0],
      'state' => $request->state[0],
      'zip' => $request->zip[0],
      'dob' => $request->dob[0],
      'ssn' => $request->ssn[0],
      'driver_license' => $request->driver_license[0],
      'dl_issue_date' => $request->dl_issue_date[0],
      'dl_exp_date' => $request->dl_exp_date[0],
      'anual_gross_income' => $request->anual_gross_income[0],
      'additional_income' => $request->additional_income[0],
      'status' => $request->status,
    ]);

    if ($request->hasFile('driver_license_photo')) {
      if (File::exists('/licenses/' . $customer->driver_license_photo)) {
        File::delete('/licenses/' . $customer->driver_license_photo);
      }
      $licese_photo = $request->driver_license_photo[0];
      $ext = $licese_photo->getClientOriginalExtension();
      $name = \uniqid() . '.' . $ext;
      $licese_photo->move(\public_path('licenses'), $name);
      $customer->driver_license_photo = $name;
      $customer->save();
    }

    if(isset($customer->signer)) {
      $customer->signer->update([
        'email' => $request->email[1],
        'first_name' => $request->first_name[1],
        'last_name' => $request->last_name[1],
        'phone' => $request->phone[1],
        'dob' => $request->dob[1],
        'ssn' => $request->ssn[1],
        'driver_license' => $request->driver_license[1],
        'dl_issue_date' => $request->dl_issue_date[1],
        'dl_exp_date' => $request->dl_exp_date[1],
        'anual_gross_income' => $request->anual_gross_income[1],
        'additional_income' => $request->additional_income[1],
        'status' => $request->status,
      ]);
      if ($request->hasFile('signer_driver_license_photo')) {
        if (File::exists('/licenses/' . $customer->signer->driver_license_photo)) {
          File::delete('/licenses/' . $customer->signer->driver_license_photo);
        }
        $licese_photo = $request->signer_driver_license_photo;
        $ext = $licese_photo->getClientOriginalExtension();
        $name = \uniqid() . '.' . $ext;
        $licese_photo->move(\public_path('licenses'), $name);
        $customer->signer->driver_license_photo = $name;
        $customer->signer->save();
      }

    }

    $application = Application::find($request->application_id);
    $application->update([
      'monthly_usage' => \json_encode($request->monthly_usage),
      'monthly_payment' => \json_encode($request->monthly_payment),
      'total_yearly_usage' => $request->total_yearly_usage,
      'monthly_avg' => $request->monthly_avg,
      'daily' => $request->daily,
      'solar_program' => $request->solar_program,
      'size_of_panel' => $request->size_of_panel,
      'kwh_system_size' => $request->kwh_system_size,
      'calculated_size_of_panel' => $request->calculated_size_of_panel,
      'recommended_system_size' => $request->recommended_system_size,
      'recommended_size_of_panel' => $request->recommended_size_of_panel,
      'actual_system_size' => $request->actual_system_size,
      'actual_no_panels' => $request->actual_no_panels,
      'guaranted_kw_per_month' => $request->guaranted_kw_per_month,
      'total_project_cost' => $request->total_project_cost,
      'panel_upgrade' => $request->panel_upgrade,
      'hvac_system' => $request->hvac_system,
      'fpl_fee' => $request->fpl_fee,
      'line_conditioner' => $request->line_conditioner,
      'tier_insurance' => $request->tier_insurance,
      'ironedison_battery' => $request->ironedison_battery,
      'airconditioning' => $request->airconditioning,
      'aeroseal' => $request->aeroseal,
      'intellibound' => $request->intellibound,
      'selected_brand' => $request->select_brand,
      'brand' => $request->select_brand,
      'tonage' => $request->tonage,
      'financ_discount' => $request->financing,
      'service_finance_payment' => $request->service_finance_payment,
      'pace_payment' => $request->pace_payment,
      'sunlight_payment' => $request->sunlight_payment,
      'pace_after_tax' => $request->pace_after_tax,
      'mosaic' => $request->mosaic,
      'status' => $request->status,
    ]);
    return \redirect()
      ->back()
      ->withSuccess('Customer updated successfully');
  }

  public function update(Request $request)
  {
    $application = Application::find($request->application_id);
    $application->status = 'pending';
    $application->save();
    $customer_ids = [];
    foreach ($request->ids as $i => $id) {
      $customer = Customer::find($id);
      $customer->update([
        'application_id' => $application->id,
        'email' => $request->email[$i],
        'first_name' => $request->first_name[$i],
        'last_name' => $request->last_name[$i],
        'phone' => $request->phone[$i],
        'hoa_name_number' => $request->hoa,
        'street' => $i == 0 ? $request->street[$i] : null,
        'city' => $i == 0 ? $request->city[$i] : null,
        'zip' => $i == 0 ? $request->zip[$i] : null,
        'state' => $i == 0 ? $request->state[$i] : null,
        'dob' => $request->dob[$i],
        'ssn' => $request->ssn[$i],
        'driver_license' => $request->driver_license[$i],
        'dl_issue_date' => $request->dl_issue_date[$i],
        'dl_exp_date' => $request->dl_exp_date[$i],
        'anual_gross_income' => $request->anual_gross_income[$i],
        'additional_income' => $request->additional_income[$i],
        'status' => 'pending',
        'created_at' => Carbon::now(),
      ]);

      if ($request->hasFile('driver_license_photo')) {
        if (File::exists('/licenses/' . $customer->driver_license_photo)) {
          File::delete('/licenses/' . $customer->driver_license_photo);
        }
        $licese_photo = $request->driver_license_photo[$i];
        $ext = $licese_photo->getClientOriginalExtension();
        $name = \uniqid() . '.' . $ext;
        $licese_photo->move(\public_path('licenses'), $name);
        $customer->driver_license_photo = $name;
        $customer->save();
      }
      if ($i == 0) {
        $application->client_id = $id;
        $application->created_at = Carbon::now();
        $application->save();
      } else {
        $new = $application->replicate();
        $new->client_id = $id;
        $new->created_at = Carbon::now();
        $new->save();
        $new = Application::where('client_id', $new->client_id)
        ->where('user_id', \auth()->user()->id)
        ->first();
        $customer->application_id = $new->id;
        $customer->save();
      }
      array_push($customer_ids, $customer->id);
    }

    $customers = Customer::whereIn('id', $customer_ids)->with('application')->get();
    if(count($customers)>0) {
      foreach($customers as $customer) {
        Mail::to(app_setting('adminemail'))->send(new NewApplicationMail($customer));
      }
    }
    return view('backend.application.thankyou')->with('success', 'Application submitted successfully');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $customer = Customer::with(['signer'])
    ->where('id', $id)
    ->first();
    $application = Application::find($customer->application_id);
    if (File::exists('/licenses/' . $customer->driver_license_photo)) {
      File::delete('/licenses/' . $customer->driver_license_photo);
    }

    if (File::exists('/licenses/' . $customer->signer->driver_license_photo)) {
      File::delete('/licenses/' . $customer->signer->driver_license_photo);
    }

    $customer->signer->delete();
    $customer->delete();
    $application->delete();
    return \redirect()
      ->route('customers.index')
      ->withSuccess('Application removed successfully');
  }

  public function atutoRemoveCustomerOrApplication() {
    $applications = Application::with('customer')->whereBetween('create_at', [now()->subMinutes(15), now()])->get();
    foreach($applications as $application) {
      if(!$application->customer) {
        $application->delete();
      }
    }

    $customers = Customer::with(['application', 'signer'])->whereBetween('create_at', [now()->subMinutes(15), now()])->get();
    foreach($customers as $customer) {
      if(!$customer->application) {
        $customer->signer->delete();
        $customer->delete();
      }
    }
    return "successfully removed";
  }

  public function test() {
    $customer_ids = [132, 133];
    $customers = Customer::whereIn('id', $customer_ids)->with('application')->get();
    if(count($customers)>0) {
      foreach($customers as $customer) {
        Mail::to('rashed.eee.brur@gmail.com')->send(new NewApplicationMail($customer));
      }
    }
  }
}
