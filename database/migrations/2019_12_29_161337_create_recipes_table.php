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
            $table->string('title');
            $table->text('paragraph')->nullable();
            $table->boolean('vegan')->default(0);
            $table->boolean('pesceterian')->default(0);
            $table->string('continents');
            $table->string('food');
            $table->boolean('spicy')->default(0);
            $table->string('credit')->nullable();
            $table->string('link_to_image')->nullable()->default('default.jpg');
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
