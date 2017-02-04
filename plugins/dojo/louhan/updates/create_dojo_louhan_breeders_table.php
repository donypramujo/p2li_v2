<?php namespace Dojo\Louhan\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateDojoLouhanBreedersTable extends Migration
{
    public function up()
    {
        Schema::create('dojo_louhan_breeders', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 50)->unique();
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dojo_louhan_breeders');
    }
}
