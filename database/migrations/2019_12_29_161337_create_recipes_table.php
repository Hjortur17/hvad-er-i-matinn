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
            $table->text('paragraph');
            $table->string('maltid');
            $table->string('vegan');
            $table->string('heimsalfa');
            $table->string('kjot');
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
