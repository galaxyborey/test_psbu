<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnToTableCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('categories', function (Blueprint $table) {

            $table->string('cat_trash',10)->default(0)->after('body');
            $table->string('cat_active',10)->default(1)->after('body');
            $table->string('is_pictures',250)->nullable()->after('body');
            $table->string('bodykh',9999)->after('body');
            $table->string('ispages',1)->nullable()->after('slug');
            $table->string('short_body',2500)->nullable()->after('body');
            $table->string('short_body_kh',2500)->nullable()->after('body');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categories', function (Blueprint $table) {
            //
        });
    }
}
