<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('positions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('config_id')->default(0)->nullable();
            $table->integer('cat_id')->default(0)->nullable();
            $table->integer('sub_cat')->default(0)->nullable();
            $table->string('name')->nullable();
            $table->string('position')->nullable();
            $table->text('des_p')->nullable();
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
        Schema::dropIfExists('positions');
    }
}
