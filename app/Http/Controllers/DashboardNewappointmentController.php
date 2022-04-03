<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newappointment;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Appointments;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpKernel\Profiler\Profile;

class DashboardNewappointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointments = Appointments::all();
        return view('dashboard.Newappointment.index', compact('appointment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.Newappointment.index');
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
     * @param  \App\Models\Newappointment  $newappointment
     * @return \Illuminate\Http\Response
     */
    public function show(Newappointment $newappointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Newappointment  $newappointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Newappointment $newappointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Newappointment  $newappointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Newappointment $newappointment)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Newappointment  $newappointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Newappointment $newappointment)
    {
        //
    }
}
