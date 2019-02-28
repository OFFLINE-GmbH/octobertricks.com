<?php namespace OFFLINE\Tricks\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateOfflineTricksTrickVote extends Migration
{
    public function up()
    {
        Schema::create('offline_tricks_trick_vote', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('ip_hash');
            $table->integer('trick_id');
            $table->integer('user_id')->nullable();
            $table->integer('value');
            $table->timestamp('created_at')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('offline_tricks_trick_vote');
    }
}
