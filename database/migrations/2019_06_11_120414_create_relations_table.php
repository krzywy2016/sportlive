<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relations', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('idteamhome');
			$table->integer('idteamaway');
			$table->integer('resulthometeam');
			$table->integer('resultawayteam');
			$table->date('matchdate');
			$table->string('matchplace');
			$table->integer('league');
			$table->integer('round');
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
        Schema::dropIfExists('relations');
    }
}
