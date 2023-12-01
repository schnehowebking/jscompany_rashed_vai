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
    public function index($request)
    {
        //
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
        $rd2caller = $prospect->rd2Caller();
        $rd2brower = $rd2caller->rd2brower();
        $landChargeInfo = $prospect->landChargeInfo();
        $householdResourceCapacity = $prospect->householdResourceCapacity();
        $householdDocument = $prospect->householdDocument();
        $financingCondition = $prospect->financingCondition();
        $projectFinancing = $prospect->projectFinancing();



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
