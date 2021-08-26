<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use \App\Models\Question;
use \App\Models\GuardModels\Student;
use \App\Models\Exam;


class CreateStudentQuestionExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_question_exams', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Question::class)->nullable();
            $table->foreignIdFor(Student::class)->nullable();
            $table->foreignIdFor(Exam::class)->nullable();
            $table->string('answer')->nullable()->comment('when std don\'nt answer question insert char z');
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
        Schema::dropIfExists('student_question_exams');
    }
}
