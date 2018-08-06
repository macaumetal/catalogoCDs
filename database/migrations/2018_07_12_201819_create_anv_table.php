<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anv', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('band_id')->references('id')->on('band');
            $table->foreign('musician_id')->references('id')->on('musician');
            $table->string('anv');
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
        Schema::dropIfExists('anv');
    }
}
