<?php

namespace App\Http\Controllers;

use App\Models\Rd_2_brower;
use Illuminate\Http\Request;

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
        //
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
        //
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
