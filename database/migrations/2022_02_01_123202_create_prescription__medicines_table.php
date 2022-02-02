<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrescriptionMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescription__medicines', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('prescription_id');
            $table->unsignedBigInteger('prescription_medicine_id');
            $table->string('prescription_med_dosage', 45);
            $table->string('prescription_med_frequency', 45);
            $table->string('prescription_med_days', 45);
            $table->string('prescription_med_ins', 45);
            $table->timestamps();
            
            $table->foreign('prescription_id')->references('id')->on('prescriptions')->onDelete('cascade');
            $table->foreign('prescription_medicine_id')->references('id')->on('medicines')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prescription__medicines');
    }
}
