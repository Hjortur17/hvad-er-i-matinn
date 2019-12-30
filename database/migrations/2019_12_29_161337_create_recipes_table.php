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
        Schema::create('recipes', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->boolean('hadeigismatur');
            $table->boolean('kvoldmatur');

            $table->boolean('vegan');
            $table->boolean('veganfisk');
            $table->boolean('ekkivegan');

            $table->boolean('evropa');
            $table->boolean('asia');
            $table->boolean('amerika');

            $table->boolean('fisk');
            $table->boolean('kjot');
            $table->boolean('kjukling');
            $table->boolean('supa');
            $table->boolean('annad');

            $table->boolean('spicy');
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
