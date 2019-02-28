<?php namespace OFFLINE\Tricks\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateOfflineTricksTrickTag extends Migration
{
    public function up()
    {
        Schema::create('offline_tricks_trick_tag', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('trick_id')->unsigned();
            $table->integer('tag_id')->unsigned();

            $table->unique(['trick_id', 'tag_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('offline_tricks_trick_tag');
    }
}
