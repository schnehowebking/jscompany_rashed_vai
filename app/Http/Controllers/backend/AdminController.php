<?php

namespace App\Http\Controllers\backend;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest;
use App\Models\Application;
use App\Models\Brand;
use App\Models\Customer;
use App\Models\SolarProgam;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function dashboard() {
      return view('backend.dashboard.index', \get_defined_vars());
    }
    public function index(Request $request)
    {
      if($request->ajax()) {
        $users = DB::table('users')->get();
        return DataTables::of($users)
          ->addIndexColumn()
          ->addColumn('action', function($user) {
            $html = '<a href="'.route('administrative.edit', $user->id).'" class="me-1"><i class="bx bx-edit"></i></a>';
            return $html;
          })
          ->addColumn('role', function($user) {
            return "<span class='badge bg-primary'>".ucfirst($user->role)."</span>";
          })
          ->rawColumns(['action', 'role'])
          ->make(true);
       };
      return \view('backend.admins.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminRequest $request)
    {
      $admin = User::create([
        'name' => $request->full_name,
        'user_name' => $request->user_name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'role' => $request->role,
        'created_at' => \now()
      ]);
      return \redirect()->route('administrative.index')->withSuccess('Admin added successfully');
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
        $admin = User::find($id);
        return view('backend.admins.edit', \get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminRequest $request, $id)
    {
      $admin = User::find($id)->update([
        'name' => $request->full_name,
        'user_name' => $request->user_name,
        'email' => $request->email,
        'role' => $request->role,
      ]);

      if(isset($request->password) && $request->password == $request->password_confimation) {
        $admin->password = Hash::make($request->password);
      }
      return \redirect()->route('administrative.index')->withSuccess('Admin updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $admin = User::find($id);
       $admin->delete();
       return \redirect()->route('administrative.index')->withSuccess("User removed successfully");
    }
}
