<?php namespace OFFLINE\Tricks\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateOfflineTricksComments extends Migration
{
    public function up()
    {
        Schema::create('offline_tricks_comments', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('trick_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('votes_up')->unsigned()->default(0);
            $table->integer('votes_down')->unsigned()->default(0);
            $table->integer('votes')->default(0);
            $table->text('content');
            $table->string('ip_hash');
            $table->integer('parent_id')->nullable()->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('offline_tricks_comments');
    }
}
