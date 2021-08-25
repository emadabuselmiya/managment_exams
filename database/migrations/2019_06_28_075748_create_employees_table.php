<?php

use App\Models\GuardModels\Employee;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique(); //loginName
            $table->string('first_name');
            $table->string('second_name');
            $table->string('third_name');
            $table->string('fourth_name');
            $table->string('email')->unique()->nullable();
            $table->enum('instructor', ['0', '1']); //0 for not instructor
            $table->boolean('accepted')->default(false);
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Employee::firstOrCreate([

            'name' => 'khalid',
            'first_name' => 'khalid',
            'second_name' => 'k',
            'third_name' => 'manuaruwe',
            'fourth_name' => 'ASDASD',
            'email' => 'a@a.com',
            'instructor' => true,
            'accepted' => true,
            'password' => bcrypt('123456789'),

        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('employees');
    }
}
