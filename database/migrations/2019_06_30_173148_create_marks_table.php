<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marks', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('student_id')->unsigned();
            $table->integer('semesterinstructor_id')->unsigned();
            $table->char('regtype',1)->default('1');
            $table->bigInteger('course_id')->unsigned();
            $table->bigInteger('semester_id')->unsigned();
            $table->integer('mid_mark')->nullable();
            $table->integer('activty_mark')->nullable();
            $table->integer('final_mark')->nullable();
            $table->integer('total_mark')->nullable();
            $table->char('study_status',1)->default('1');
            $table->char('active',1)->default('0');
            $table->timestamps();

            $table->foreign('semesterinstructor_id')->references('id')->on('semesterinstructors');
            $table->foreign('course_id')->references('id')->on('courses');
            $table->foreign('semester_id')->references('id')->on('semesters');
            $table->foreign('student_id')->references('id')->on('students');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marks');
    }
}
