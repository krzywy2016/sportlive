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
			$table->integer('user_id')->nullable();
			$table->string('teamhome')->nullable();
			$table->string('teamaway')->nullable();
			$table->integer('resulthometeam')->nullable();
			$table->integer('resultawayteam')->nullable();
			$table->date('matchdate')->nullable();
			$table->string('hour')->nullable();
			$table->string('matchplace')->nullable();
			$table->string('league')->nullable();
			$table->integer('round')->nullable();
			$table->string('status')->nullable();
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
