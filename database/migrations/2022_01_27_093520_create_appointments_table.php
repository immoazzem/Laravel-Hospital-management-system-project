<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('app_sl', 30);
            $table->unsignedBigInteger('app_p_id');
            $table->string('app_p_name');
            $table->integer('app_p_phone');
            $table->unsignedBigInteger('app_doc_id');
            $table->string('app_doc_name');
            $table->date('app_date');
            $table->string('app_status', 45);
            $table->string('app_message', 220);
            $table->timestamps();
            $table->foreign('app_p_id')->references('id')->on('out_patients')->onDelete('cascade');
            $table->foreign('app_doc_id')->references('id')->on('doctors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointments');
    }
}
