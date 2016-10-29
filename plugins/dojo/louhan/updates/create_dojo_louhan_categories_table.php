<?php namespace Dojo\Louhan\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateDojoLouhanCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('dojo_louhan_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 50)->unique();
            $table->decimal('rate_overall_impression',5,2)->unsigned();
            $table->decimal('rate_head',5,2)->unsigned();
            $table->decimal('rate_face',5,2)->unsigned();
            $table->decimal('rate_body_shape',5,2)->unsigned();
            $table->decimal('rate_marking',5,2)->unsigned();
            $table->decimal('rate_pearl',5,2)->unsigned();
            $table->decimal('rate_color',5,2)->unsigned();
            $table->decimal('rate_finnage',5,2)->unsigned();
			$table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dojo_louhan_categories');
    }
}
