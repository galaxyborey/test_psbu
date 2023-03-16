<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->integer('scatepageid')->default(0);
            $table->string('name_kh', 128);
            $table->string('name', 128);
            $table->string('is_picture')->nullable();
            $table->string('slug', 128)->unique();
            $table->mediumText('body')->nullable(); 
            $table->mediumText('subbodykh')->nullable();
            $table->string('sub_ordering',5)->default(0);  
            $table->string('subcat_active',10)->default(1);
            $table->string('subcat_trash',10)->default(0);        
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
        Schema::dropIfExists('sub_categories');
    }
}
