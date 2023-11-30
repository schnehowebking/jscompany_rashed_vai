<?php

namespace App\Http\Controllers;

use App\Models\Rd_2_brower;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Rd2BrowerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.rd2borrower.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('backend.rd2borrower.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $brower = Rd_2_brower::create($request->all());
      $brower->caller_id = Auth()->user()->id;
      $brower->save();

      return redirect()
        ->back()
        ->with('success', 'Prospect created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rd_2_brower  $rd_2_brower
     * @return \Illuminate\Http\Response
     */
    public function show(Rd_2_brower $rd_2_brower)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rd_2_brower  $rd_2_brower
     * @return \Illuminate\Http\Response
     */
    public function edit(Rd_2_brower $rd_2_brower)
    {
        return view('backend.rd2borrower.edit', compact('rd_2_brower'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rd_2_brower  $rd_2_brower
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rd_2_brower $rd_2_brower)
    {
      $rd_2_brower->update($request->all());
      return redirect()
        ->back()
        ->with('success', 'Prospect updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rd_2_brower  $rd_2_brower
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rd_2_brower $rd_2_brower)
    {
        //
    }
}
