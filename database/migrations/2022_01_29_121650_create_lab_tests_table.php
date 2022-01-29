<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLabTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lab_tests', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('doc_id');
            $table->unsignedBigInteger('out_p_id')->nullable;
            $table->unsignedBigInteger('in_p_id')->nullable;
            $table->string('lab_department');
            $table->string('price');
            $table->string('date_of_test');
            $table->timestamps();
            $table->foreign('doc_id')->references('id')->on('doctors');
            $table->foreign('Out_p_id')->references('id')->on('out_patients');
           // $table->foreign('in_p_id')->references('id')->on('doctors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lab_tests');
    }
}
