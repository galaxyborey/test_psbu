<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbSubicatejoinnewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_subicatejoinnews', function (Blueprint $table) {
            $table->increments('subicn_id');
            $table->decimal('subicateid',11,0)->default(0);
            $table->decimal('newsid',11,0)->default(0);
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
        Schema::dropIfExists('tb_subicatejoinnews');
    }
}
