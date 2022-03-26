<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrackingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trackings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pengunjung_id');
            $table->dateTime('pplg')->nullable();
            $table->dateTime('dkv')->nullable();
            $table->dateTime('tjkt')->nullable();
            $table->dateTime('pmn')->nullable();
            $table->dateTime('hotel')->nullable();
            $table->dateTime('mplb')->nullable();
            $table->dateTime('kuliner')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trackings');
    }
}
