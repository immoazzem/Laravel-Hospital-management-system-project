<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('doc_id');
            $table->string('doc_name', 110);
            $table->string('doc_specialist', 110);
            $table->string('doc_education', 110);
            $table->string('doc_phone', 45);
            $table->string('doc_address', 110);
            $table->string('doc_email', 110);
            $table->string('doc_password', 110);
            $table->string('doc_gender', 110);
            $table->string('doc_blood', 110);
            $table->string('doc_status');
            $table->string('doc_img')->nullable();
            $table->unsignedBigInteger('doc_dept_id');
            $table->foreign('doc_dept_id')->references('id')->on('departments')->onDelete('cascade');
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
        Schema::dropIfExists('doctors');
    }
}
