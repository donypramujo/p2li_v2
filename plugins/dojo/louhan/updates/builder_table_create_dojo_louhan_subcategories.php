<?php namespace Dojo\Louhan\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDojoLouhanSubcategories extends Migration
{
    public function up()
    {
        Schema::create('dojo_louhan_subcategories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name',50)->unique();
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('dojo_louhan_categories')
            ->onUpdate('restrict')->onDelete('restrict');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dojo_louhan_subcategories');
    }
}
