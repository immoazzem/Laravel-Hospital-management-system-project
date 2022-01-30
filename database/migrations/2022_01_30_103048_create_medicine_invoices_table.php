<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicineInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicine_invoices', function (Blueprint $table) {
            $table->id();
            $table->string('medicine_name');
            $table->string('medicine_quantity');
            $table->string('medicine_price');
            $table->string('medicine_discount');
            $table->string('medicine_total');
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
        Schema::dropIfExists('medicine_invoices');
    }
}
