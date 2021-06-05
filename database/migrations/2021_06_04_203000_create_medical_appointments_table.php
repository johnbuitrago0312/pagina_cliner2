<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_appointments', function (Blueprint $table) {

            $table->id();
            $table->datetime('fecha_y_hora');
            $table->string('paciente',250);
            $table->string('doctor',250);
            $table->string('direccion_paciente',300);
            $table->unsignedInteger('patient_id');
            $table->unsignedInteger('service_control_id');
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
        Schema::dropIfExists('medical_appointments');
    }
}
