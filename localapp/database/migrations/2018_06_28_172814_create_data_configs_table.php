<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_configs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('c_name')->nullable();
            $table->string('c_value')->nullable();
            $table->string('des')->nullable();
            $table->integer('related_id')->default(0);
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
        Schema::dropIfExists('data_configs');
    }
}
