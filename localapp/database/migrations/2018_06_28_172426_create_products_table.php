<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cat_id')->default(0);
            $table->integer('img_id')->default(0);
            $table->integer('measure_id')->default(0);
            $table->integer('brand_id')->default(0);
            $table->integer('tag_id')->default(0);
            $table->string('p_name')->nullable();
            $table->string('p_code')->nullable();
            $table->integer('p_qty')->default(0);
            $table->float('p_price',20,4)->default(0);
            $table->float('p_sale_price',20,4)->default(0);
            $table->float('p_discount',20,4)->default(0);
            $table->string('image')->nullable();
            $table->text('des')->nullable();
            $table->smallInteger('votes')->default(0);
            $table->string('slug', 228)->unique();
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
        Schema::dropIfExists('products');
    }
}
