<?php

namespace App\Http\Controllers;


use Illuminate\Support\Str;
use App\Models\Appointments;
use Illuminate\Http\Request;
use App\Models\Newappointment;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Barryvdh\DomPDF\Facade as PDF;


class DashboardAppointmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('dashboard.appointments.index', [
            'Appointment' => Appointments::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $appointments = Appointments::all();
        return view('dashboard.appointment.index', compact('appointments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Name' => 'required',
            'Email' => 'required',
            'Phone' => 'required',
            'appointment_date' => 'required',
            'gender' => 'required',
            'Type_of_disease' => 'required',
            'Message' => 'required',
        ]);

        Appointments::create($request->all());
        return redirect('dashboard/appointment')->with('success', 'Successfully added!');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appointments  $appointments
     * @return \Illuminate\Http\Response
     */
    public function show(Appointments $appointments, $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appointments  $appointments
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointments $appointments, $id)
    {
        $appointments = Appointments::FindOrFail($id);
        return view('dashboard.appointments.edit', compact('appointments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appointments  $appointments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointments $appointments, $id)
    {
        $request->validate([
            'Name' => 'required',
            'Email' => 'required',
            'Phone' => 'required',
            'appointment_date' => 'required',
            'gender' => 'required',
            'Type_of_disease' => 'required',
            'Message' => 'required',
        ]);

        $appointments = Appointments::where('id', $request->id)
            ->update([
                'Name' => $request->Name,
                'Email' => $request->Email,
                'Phone' => $request->Phone,
                'appointment_date' => $request->appointment_date,
                'gender' => $request->gender,
                'Type_of_disease' => $request->Type_of_disease,
                'Message' => $request->Message,
            ]);

        return redirect('dashboard/appointment')->with('success', 'Successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appointments  $appointments
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointments $appointments, $id)
    {
        $appointments = Appointments::where('id', $id)->first();

        if ($appointments != null) {
            $appointments->delete();

            return redirect('dashboard/appointment')->with(['success', 'Successfully deleted!']);
        }
    }
    public function exportpdf()
    {
        $appointments = Appointments::all();
        view()->share('appointments', $appointments);
        $pdf = PDF::loadview('appointment-pdf');

        return $pdf->download('appointment.pdf');
    }
}
