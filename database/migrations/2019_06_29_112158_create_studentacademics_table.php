<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentacademicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentacademics', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('student_id')->unsigned();
            $table->bigInteger('department_id')->unsigned();
            $table->bigInteger('major_id')->unsigned();
            $table->integer('study_hours')->default('0');
            $table->integer('pass_hours')->default('0');
            $table->bigInteger('plan_id')->unsigned();
            $table->bigInteger('departmentplan')->unsigned();
            $table->integer('level')->default('1');
            $table->integer('credit_value');
            $table->integer('volunteer_hours')->default(120);
            $table->float('cgpa',4,2)->default('0.00');
            $table->float('balance',5,1)->default('0.0');
			$table->bigInteger('graduationsession_id')->unsigned();
            $table->timestamps();

            $table->foreign('student_id')->references('id')->on('students');
            $table->foreign('department_id')->references('id')->on('departments');
            $table->foreign('major_id')->references('id')->on('majors');
            $table->foreign('plan_id')->references('id')->on('plans');
            $table->foreign('departmentplan')->references('id')->on('plans');
			$table->foreign('graduationsession_id')->references('id')->on('graduationsessions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('studentacademics');
    }
}
