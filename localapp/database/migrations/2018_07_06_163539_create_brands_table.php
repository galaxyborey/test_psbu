<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code',50)->nullable();
            $table->string('b_name_kh')->nullable();
            $table->string('b_name_en')->nullable();
            $table->integer('b_parent')->default(0);
            $table->string('b_img')->nullable();
            $table->text('b_des')->nullable();
            $table->string('slug', 228)->unique();
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
        Schema::dropIfExists('brands');
    }
}
