<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSemesterinstructorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semesterinstructors', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('availablecourse_id');
            $table->unsignedBigInteger('employee_id');
            $table->integer('class');
            $table->integer('room');
            $table->time('class_start_time');
            $table->time('class_end_time');
            $table->string('class_day',20);
            $table->char('approvedstatus',1)->default('0');
            $table->char('active',1)->default('1');
            // $table->softDeletes();
            $table->timestamps();

            $table->foreign('availablecourse_id')->references('id')->on('availablecourses');
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
        Schema::dropIfExists('semesterinstructors');
    }
}
