<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use \App\Models\EmployeeModels\Course;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Course::class)->nullable();
            $table->integer('number_of_questions')->default(10);
            $table->boolean('back')->nullable();
            $table->string('type')->nullable();
            $table->boolean('review')->nullable();
            $table->string('weight')->default(0);
            $table->boolean('show_result')->nullable();
            $table->integer('q_p_p')->comment('number of questions in page')->nullable();
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
        Schema::dropIfExists('exams');
    }
}
