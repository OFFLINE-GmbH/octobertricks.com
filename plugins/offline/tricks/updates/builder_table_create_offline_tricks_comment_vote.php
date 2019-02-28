<?php namespace OFFLINE\Tricks\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateOfflineTricksCommentVote extends Migration
{
    public function up()
    {
        Schema::create('offline_tricks_comment_vote', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('ip_hash');
            $table->integer('comment_id');
            $table->integer('user_id')->nullable();
            $table->integer('value');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('offline_tricks_comment_vote');
    }
}
