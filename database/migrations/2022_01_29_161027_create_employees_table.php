<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id('id');
            $table->string('emp_name', 110);
            $table->string('emp_phone', 110);
            $table->string('emp_address', 110);
            $table->string('emp_sex');
            $table->string('emp_email', 110);
            $table->string('emp_password', 220);
            $table->string('emp_joining_date', 220);
            $table->string('emp_status', 220);
            $table->integer('emp_s_basic');
            $table->integer('emp_s_house');
            $table->integer('emp_s_medicale')->nullable();
            $table->integer('emp_s_convience')->nullable();
            $table->integer('emp_s_bonous')->nullable();
            $table->string('emp_img')->nullable();
            $table->unsignedBigInteger('emp_role_id');
            $table->timestamps();
            $table->foreign('emp_role_id')->references('id')->on('employee_roles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
