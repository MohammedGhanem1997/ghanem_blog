<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('icon')->nullable();
            $table->text('image')->nullable();
            $table->text('slug')->nullable();

            $table->text('url')->nullable();
            $table->boolean('status')->default(false);
            $table->unsignedBigInteger('navigation_bar_id');

            $table->foreign('navigation_bar_id')->references('id')->on('navigation_bars')->onUpdate('cascade')->onDelete('cascade');


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
        Schema::dropIfExists('menus');
    }
}
