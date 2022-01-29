<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBloodDonorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood_donors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('donor_name', 110);
            $table->string('donor_blood', 10);
            $table->integer('donor_age');
            $table->string('donor_sex');
            $table->date('donor_last_date');
            $table->string('donor_phone', 45);
            $table->string('donor_email', 110)->nullable();
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
        Schema::dropIfExists('blood_donors');
    }
}
