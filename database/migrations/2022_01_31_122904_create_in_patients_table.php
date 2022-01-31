<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInPatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('in_patients', function (Blueprint $table) {
            $table->id('id');
            $table->string('in_p_s', 30);
            $table->string('in_p_name', 110);
            $table->string('in_p_sex', 15);
            $table->integer('in_p_age');
            $table->string('in_p_phone', 20);
            $table->string('in_p_guardian_name', 60);
            $table->string('in_p_guardian_phone', 30);
            $table->string('in_p_blood', 10);
            $table->string('in_p_height', 50)->nullable();
            $table->string('in_p_weight', 50)->nullable();
            $table->string('in_p_bp', 50)->nullable();
            $table->string('in_p_symptoms', 250)->nullable();
            $table->string('in_p_address', 110);
            $table->date('in_p_admission_date');
            $table->string('in_p_case', 110);
            $table->string('in_p_bed_status', 15);
            $table->string('in_p_casualty', 10)->nullable();
            $table->string('in_p_old_patient', 10)->nullable();
            $table->string('in_p_reference', 60)->nullable();
            $table->unsignedBigInteger('in_p_doc_id');
            $table->unsignedBigInteger('in_p_bed_category_id');
            $table->unsignedBigInteger('in_p_bed_id');
            $table->string('in_p_note', 220)->nullable();

            $table->foreign('in_p_doc_id')
                ->references('id')->on('doctors')
                ->onDelete('cascade');
            $table->foreign('in_p_bed_category_id')
                ->references('id')->on('bed_categories')
                ->onDelete('cascade');
            $table->foreign('in_p_bed_id')
                ->references('id')->on('beds')
                ->onDelete('cascade');
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
        Schema::dropIfExists('in_patients');
    }
}
