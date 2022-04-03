@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Appointment</h1>
    <a href="/dashboard/appointment"> Back</a>
</div>


<section id="/appointment" class="appointment section-bg">
    <div class="container">
        <div class="section-title">

        </div>

        <form action="/appointment/update/{{$appointments->id}}" method="post">

            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-4 form-group">
                    <input type="text" name="Name" value="{{ $appointments->Name }}" class="form-control @error('Name') is-invalid @enderror" id="Name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                    <div class="validate">
                        @error('Name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                    <input type="Email" value="{{ $appointments->Email }}" class="form-control @error('Email') is-invalid @enderror" name="Email" id="Email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                    <div class="validate">
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                    <input type="number" value="{{ $appointments->Phone }}" class="form-control @error('phone') is-invalid @enderror" name="Phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                    <div class="validate">
                        @error('phone')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 form-group mt-3">
                    <input type="datetime-local" value="{{ $appointments->appointment_date }}" name="appointment_date" class="form-control datepicker @error('appointment date') is-invalid @enderror" id="date" placeholder="Appointment Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                    <div class="validate">
                        @error('appointment_date')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4 form-group mt-3">
                    <select name="gender" id="gender" value="{{ $appointments->gender }}" class="form-select @error('gender') is-invalid @enderror">
                        <option value="">Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    <div class="validate">
                        @error('gender')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4 form-group mt-3">
                    <select name="Type_of_disease" value="{{ $appointments->Type_of_disease}}" id="disease" class="form-select @error('type of disease') is-invalid @enderror">
                        <option value="">Type of Diseases</option>
                        <option value="ENT Specialist">ENT Specialist</option>
                        <option value="Dentist">Dentist</option>
                        <option value="General Practicioner">General Practicioner</option>
                    </select>
                    <div class="validate">
                        @error('Type_of_disease')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="form-group mt-3">
                <textarea class="form-control @error('message') is-invalid @enderror" value="{{ $appointments->Message }}" name="Message" rows="5" placeholder="Message (Optional)"></textarea>
                <div class="validate">
                    @error('message')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
        </form>
</section>
@endsection