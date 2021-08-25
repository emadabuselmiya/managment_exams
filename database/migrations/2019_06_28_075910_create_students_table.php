<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name', 20);
            $table->string('second_name', 20);
            $table->string('third_name', 20);
            $table->string('fourth_name', 20);
            $table->double('high_school_gpa', 3, 1);
            $table->string('email')->nullable();//->unique();
            $table->string('password');
            $table->bigInteger('stdstatus_id')->unsigned();
            $table->rememberToken();
            $table->timestamps();
			
			$table->foreign('stdstatus_id')->references('id')->on('stdstatuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('students');
    }
}
