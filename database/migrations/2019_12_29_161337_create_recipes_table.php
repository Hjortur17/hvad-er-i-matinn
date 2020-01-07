<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) { // breytta
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('paragraph')->nullable();
            $table->string('maltid');
            $table->string('vegan');
            $table->string('heimsalfa');
            $table->string('kjot');
            $table->boolean('spicy');
            $table->string('ingredient1')->nullable();
            $table->string('ingredient2')->nullable();
            $table->string('ingredient3')->nullable();
            $table->string('ingredient4')->nullable();
            $table->string('ingredient5')->nullable();
            $table->string('ingredient6')->nullable();
            $table->string('ingredient7')->nullable();
            $table->string('ingredient8')->nullable();
            $table->string('ingredient9')->nullable();
            $table->string('ingredient10')->nullable();
            $table->string('instructions1')->nullable();
            $table->string('instructions2')->nullable();
            $table->string('instructions3')->nullable();
            $table->string('instructions4')->nullable();
            $table->string('instructions5')->nullable();
            $table->string('instructions6')->nullable();
            $table->string('instructions7')->nullable();
            $table->string('instructions8')->nullable();
            $table->string('instructions9')->nullable();
            $table->string('instructions10')->nullable();
            $table->string('link_to_image')->nullable();
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
        Schema::dropIfExists('recipes');
    }
}
