<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();

            $table->text('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->timestamp('date_password')->nullable();

            $table->string('type');
            $table->text('country');
            $table->text('state');
            $table->text('city');
            $table->text('adress');
            $table->string('phone');
            $table->string('mobile');

            $table->float('len');
            $table->float('lat');

            $table->unsignedBigInteger('department_id');
            $table->rememberToken();
            $table->boolean('status')->default(true);

            $table->timestamps();
            $table->foreign('department_id')->references('id')->on('departments')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
