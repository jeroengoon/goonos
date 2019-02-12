<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPriceAndstockToArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->integer('stock')->default('3');
            $table->integer('price')->default('2.60');
            $table->string('category_id')->default('2');
            $table->enum('type', ['Simple', 'Grouped', 'Variable', 'Gift'])->default('GIFT');;                        
            $table->enum('categories', ['Mobiel kabels', 'Mobiel accesoires', 'Games', 'Garden'])->default('Mobiel kabels');; 
            $table->string('product_image')->default(''); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->dropColumn('stock');
            $table->dropColumn('price');
        });
    }
}
