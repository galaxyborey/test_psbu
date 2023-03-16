<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('team_id')->default(0);
            $table->string('play_name')->nullable();
            $table->string('slug', 228)->unique();
            $table->string('play_code')->nullable();
            $table->string('play_image')->nullable();
            $table->text('play_description')->nullable();
            $table->date('dob')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->smallInteger('status')->default(1);
            $table->smallInteger('trash')->default(0);
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
        Schema::dropIfExists('players');
    }
}
