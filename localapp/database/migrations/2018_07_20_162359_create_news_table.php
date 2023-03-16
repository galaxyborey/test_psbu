<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable()->default(0);
            $table->integer('cat_id')->nullable()->default(0);
            $table->integer('sub_id')->nullable()->default(0);
            $table->string('title')->nullable();
            $table->string('title_kh',500)->nullable();
            $table->string('file')->nullable();                       
            $table->string('slug', 228)->unique();
            $table->text('excerpt')->nullable();
            $table->text('excerpt_kh')->nullable();
            $table->text('body')->nullable();
            $table->text('body_kh')->nullable();
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
        Schema::dropIfExists('news');
    }
}
