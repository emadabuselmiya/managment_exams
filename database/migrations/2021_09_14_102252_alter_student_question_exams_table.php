<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterStudentQuestionExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('student_question_exams', function (Blueprint $table) {
            $table->string('ipAddress')->nullable()
                ->after('answer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('student_question_exams', function (Blueprint $table) {
            $table->dropColumn('ipAddress');
        });
    }
}
