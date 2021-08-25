<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('course_code', 10)->unique();
            $table->string('name_ar', 100);
            $table->string('name_en', 100);
            $table->string('description', 500);
            $table->tinyInteger('level');
            $table->tinyInteger('semester');
            $table->tinyInteger('academic_hour');
            $table->tinyInteger('financial_hour');
            $table->bigInteger('coursetype_id')->unsigned();
            $table->bigInteger('coursedesc_id')->unsigned();
            $table->bigInteger('courseclass_id')->unsigned();
            $table->softDeletes();
            $table->timestamps();


            $table->foreign('coursetype_id')->references('id')->on('coursetypes');
            $table->foreign('coursedesc_id')->references('id')->on('coursedescs');
            $table->foreign('courseclass_id')->references('id')->on('courseclasses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
