<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChampionAwardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('champion_awards', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('team_id')->default(0);
            $table->integer('league_id')->default(0);
            $table->integer('match_id')->default(0);
            $table->string('title')->nullable();
            $table->string('image')->nullable();
            $table->string('slug', 228)->unique();
            $table->tinyInteger('status')->default(1);
            $table->tinyInteger('trash')->default(0);
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
        Schema::dropIfExists('champion_awards');
    }
}
