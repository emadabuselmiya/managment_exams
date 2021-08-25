<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvailablecoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('availablecourses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('semester_id');;
            $table->unsignedBigInteger('course_id');;
            $table->date('mid_date');
            $table->time('mid_start_time');
            $table->time('mid_end_time');
            $table->date('final_date');
            $table->time('final_start_time');
            $table->time('final_end_time');
            $table->integer('marktime')->default('4'); // ايام ادخال الدرجات من المحاضر
            $table->timestamps();

            $table->foreign('semester_id')->references('id')->on('semesters');
            $table->foreign('course_id')->references('id')->on('courses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('availablecourses');
    }
}
