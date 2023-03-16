<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeasuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('measures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_kh')->nullable();
            $table->string('name_en')->nullable();
            $table->string('vale')->nullable();
            $table->string('code')->nullable();
            $table->text('note')->nullable();
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
        Schema::dropIfExists('measures');
    }
}
