<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstructionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instructions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('recipes_id');
            $table->string('1-title')->nullable();
            $table->string('2-title')->nullable();
            $table->string('3-title')->nullable();
            $table->mediumText('1')->nullable();
            $table->mediumText('2')->nullable();
            $table->mediumText('3')->nullable();
            $table->mediumText('4')->nullable();
            $table->mediumText('5')->nullable();
            $table->mediumText('6')->nullable();
            $table->mediumText('7')->nullable();
            $table->mediumText('8')->nullable();
            $table->mediumText('9')->nullable();
            $table->mediumText('10')->nullable();
            $table->mediumText('11')->nullable();
            $table->mediumText('12')->nullable();
            $table->mediumText('13')->nullable();
            $table->mediumText('14')->nullable();
            $table->mediumText('15')->nullable();
            $table->mediumText('16')->nullable();
            $table->mediumText('17')->nullable();
            $table->mediumText('18')->nullable();
            $table->mediumText('19')->nullable();
            $table->mediumText('20')->nullable();
            $table->mediumText('20')->nullable();
            $table->mediumText('21')->nullable();
            $table->mediumText('22')->nullable();
            $table->mediumText('23')->nullable();
            $table->mediumText('24')->nullable();
            $table->mediumText('25')->nullable();
            $table->mediumText('26')->nullable();
            $table->mediumText('27')->nullable();
            $table->mediumText('28')->nullable();
            $table->mediumText('29')->nullable();
            $table->mediumText('30')->nullable();
            $table->mediumText('31')->nullable();
            $table->mediumText('32')->nullable();
            $table->mediumText('33')->nullable();
            $table->mediumText('34')->nullable();
            $table->mediumText('35')->nullable();
            $table->mediumText('36')->nullable();
            $table->mediumText('37')->nullable();
            $table->mediumText('38')->nullable();
            $table->mediumText('39')->nullable();
            $table->mediumText('40')->nullable();
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
        Schema::dropIfExists('instructions');
    }
}
