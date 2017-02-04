<?php namespace Dojo\Louhan\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateDojoLouhanContestJuriesTable extends Migration
{
    public function up()
    {
        Schema::create('dojo_louhan_contest_juries', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('contest_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->foreign('contest_id')->references('id')->on('dojo_louhan_contests')
            ->onUpdate('restrict')->onDelete('restrict');
            $table->foreign('user_id')->references('id')->on('backend_users')
            ->onUpdate('restrict')->onDelete('restrict');
            
            
            $table->unique(['contest_id','user_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dojo_louhan_contest_juries');
    }
}
