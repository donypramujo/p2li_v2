<?php namespace Dojo\Louhan\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateDojoLouhanContestsTable extends Migration
{
    public function up()
    {
        Schema::create('dojo_louhan_contests', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name',50)->unique();
            $table->date('start_date');
            $table->date('end_date');
            $table->enum('status', ['preparation', 'nomination','ongoing','completed','cancelled']);
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dojo_louhan_contests');
    }
}
