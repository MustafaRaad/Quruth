<?php

namespace App\Http\Controllers;

use App\Models\LoansGuest;
use Illuminate\Http\Request;

class LoansGuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $LoansGuest = LoansGuest::all();
        return view('guest-category.guest-car',compact('LoansGuest'));
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
     * @param  \App\Models\LoansGuest  $loansGuest
     * @return \Illuminate\Http\Response
     */
    public function show(LoansGuest $loansGuest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LoansGuest  $loansGuest
     * @return \Illuminate\Http\Response
     */
    public function edit(LoansGuest $loansGuest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LoansGuest  $loansGuest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LoansGuest $loansGuest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LoansGuest  $loansGuest
     * @return \Illuminate\Http\Response
     */
    public function destroy(LoansGuest $loansGuest)
    {
        //
    }
}
