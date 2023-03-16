<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubiCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subi_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('subcateid')->nullable();
            $table->integer('subi_addedby')->nullable();
            $table->string('subi_namekh')->nullable();
            $table->string('subi_name')->nullable();
            $table->string('subi_bodykh', 9999)->nullable();
            $table->string('subi_body', 9999)->nullable();
            $table->string('subi_slug', 300)->unique()->nullable();
            $table->string('subi_active', 1)->default('1');
            $table->string('subi_trash', 1)->default('0');
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
        Schema::dropIfExists('subi_categories');
    }
}
