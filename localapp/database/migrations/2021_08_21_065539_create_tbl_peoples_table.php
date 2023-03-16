<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblPeoplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_peoples', function (Blueprint $table) {
            $table->increments('peo_id');
            $table->integer('u_id')->default(0);
            $table->integer('u_addedby')->nullable();
            $table->string('fnamekh',100)->nullable();
            $table->string('fname',100)->nullable();
            $table->string('titlekh',250)->nullable();
            $table->string('title',250)->nullable();
            $table->string('peo_picture')->nullable();
            $table->string('resumeskh', 16,777,215)->nullable();
            $table->string('resumes', 16,777,215)->nullable();
            $table->smallInteger('peo_ordering')->default(100);
            $table->string('peo_active', 1)->default('1');
            $table->string('peo_trash', 1)->default('0');
            $table->timestamps();
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_peoples');
    }
}
