<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use \App\Models\Exam;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Exam::class)->nullable();
            $table->string('type')->nullable();
            $table->text('title')->nullable();
            $table->string('category')->nullable();
            $table->text('optionA');
            $table->text('optionB');
            $table->text('optionC')->nullable();
            $table->text('optionD')->nullable();
            $table->enum('right_answer', ['optionA', 'optionB', 'optionC', 'optionD'])->default('optionA');
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
        Schema::dropIfExists('questions');
    }
}
