<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuFootersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_footers', function (Blueprint $table) {
            $table->id();
            $table->text('name')->nullable();
            $table->text('url')->nullable();
            $table->text('icon')->nullable();
            $table->text('image')->nullable();
            $table->string('slug')->nullable();

            $table->boolean('status')->default(false);
            $table->unsignedBigInteger('menu_id');

            $table->foreign('menu_id')->references('id')->on('menus')->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('menu_footers');
    }
}
