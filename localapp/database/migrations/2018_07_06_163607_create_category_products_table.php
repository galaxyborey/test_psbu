<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code',50)->nullable();
      		$table->string('name_kh')->nullable();
      		$table->string('name_en')->nullable();
      		$table->integer('parent_id')->default(0);
            $table->string('slug', 228)->unique();
      		$table->string('status',1)->default(1);
      		$table->string('trash',1)->default(0);
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
        Schema::dropIfExists('category_products');
    }
}
