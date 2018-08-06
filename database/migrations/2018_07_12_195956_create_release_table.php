<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReleaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('release', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->foreign('format_id')->references('id')->on('format'); 
            $table->foreign('label_id')->references('id')->on('label');
            $table->foreign('band_id')->references('id')->on('band');
            $table->string('cat#')->unique();
            $table->string('matrix');
            $table->string('mouldSID');
            $table->string('masterSID');
            $table->integer('barcode')->unique();
            $table->string('front_cover');
            $table->string('back_cover');
            $table->string('cd_front');
            $table->string('cd_back');
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
        Schema::dropIfExists('release');
    }
}
