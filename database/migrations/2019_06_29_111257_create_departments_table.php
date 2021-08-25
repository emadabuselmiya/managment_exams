<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('department_name', 50);
            $table->string('department_name_en', 50);
            $table->float('department_key_gpa', 4, 2);
            $table->tinyInteger('department_credit_normal');
            $table->tinyInteger('department_credit_tr');
            $table->bigInteger('grade_id')->unsigned();;
            $table->tinyInteger('department_fail');
            $table->tinyInteger('department_zero_limit');
            $table->tinyInteger('department_volunteer');
            $table->bigInteger('employee_id')->unsigned();
            $table->char('active', 1)->default('1');
            $table->integer('department_code')->unique();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('grade_id')->references('id')->on('grades');
            $table->foreign('employee_id')->references('id')->on('employees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departments');
    }
}
