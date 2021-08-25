<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGraduationsessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('graduationsessions', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->integer('session_number');
			$table->integer('decision_number');
			$table->date('session_ar_date');
			$table->string('session_hi_date', 50);
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
        Schema::dropIfExists('graduationsessions');
    }
}
