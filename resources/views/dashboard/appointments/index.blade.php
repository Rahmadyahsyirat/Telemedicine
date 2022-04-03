@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Appointment</h1>
</div>

@if(session()->has('success'))
<div class="alert alert-success" role="alert">
    {{ session('success') }}
</div>
@endif

<div class="row align-items-md-stretch">
    <div class="table-responsive">
        <a href="/dashboard/NewAppointment" class="btn btn-primary mb-3">Make an Appointment</a>
        <a href="/exportpdf" class="btn btn-primary mb-3"><i class="bi bi-printer-fill "></i> Export PDF</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Appointment Date</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Type of Diseases</th>
                    <th scope="col">Message</th>
                    <th scope="col">Description </th>
                </tr>
            </thead>
            <tbody>
                <?php $appointment = "1" ?>
                @foreach($Appointment as $a)
                <tr>
                    <td>{{ $appointment++ }}</td>
                    <td>{{ $a->Name }}</td>
                    <td>{{ $a->Email }}</td>
                    <td>{{ $a->Phone }}</td>
                    <td>{{ $a->appointment_date }}</td>
                    <td>{{ $a->gender }}</td>
                    <td>{{ $a->Type_of_disease }}</td>
                    <td>{{ $a->Message }}</td>
                    <td>

                        <a href="/appointment/edit/{{ $a->id }}" class="badge bg-warning"><span class="badge badge-pill badge-warning">Edit</span></a>
                        <a href="/appointment/delete/{{ $a->id }}" class="badge bg-danger"><span class="badge badge-pill badge-danger">Delete</span></a>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @endsection