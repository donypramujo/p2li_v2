<?php namespace Dojo\Louhan\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateDojoLouhanJuriesTable extends Migration
{
    public function up()
    {
        Schema::create('dojo_louhan_juries', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('contest_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->primary(['contest_id', 'user_id'], 'contest_jury');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dojo_louhan_juries');
    }
}
