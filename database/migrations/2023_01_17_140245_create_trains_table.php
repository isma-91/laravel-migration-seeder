<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('agency', 50);
            $table->string('departure_station', 100);
            $table->string('arrival_station', 100);
            $table->string('departure_time');
            $table->string('arrival_time');
            $table->string('train_code', 12);
            $table->tinyInteger('numbre_of_carriages')->nullable();
            $table->string('in_time', 15)->nullable();
            $table->string('deleted', 15)->nullable();
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
        Schema::dropIfExists('trains');
    }
}
