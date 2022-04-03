<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewAppointmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_appointment', function (Blueprint $table) {
            $table->id();
            $table->bigIncrements('id');
            $table->varchar('Name');
            $table->varchar('Email');
            $table->varchar('Phone');
            $table->date('appointment_date');
            $table->enum('gender', ['Male', 'Female']);
            $table->enum('Type_of_disease', ['ENT Specialist', 'Dentist', 'General Practicioner']);
            $table->text('Message');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('new_appointment');
    }
}
