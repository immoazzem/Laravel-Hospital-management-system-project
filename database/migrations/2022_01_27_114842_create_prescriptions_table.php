<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('prescription_code', 45);
            $table->string('prescription_p_id');
            $table->unsignedBigInteger('prescription_doc_id');
            $table->string('prescription_history', 220);
            $table->string('prescription_note', 220);
            $table->string('prescription_date',45);
            $table->timestamps();
           // $table->foreign('prescription_p_id');
            //->references('in_p_s', 'out_p_id')->on('in_patients', 'out_patients')->onDelete('cascade');

            $table->foreign('prescription_doc_id')->references('id')->on('doctors');
            //->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prescriptions');
    }
}
