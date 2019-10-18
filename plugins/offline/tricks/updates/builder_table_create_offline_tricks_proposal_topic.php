<?php namespace OFFLINE\Tricks\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateOfflineTricksProposalTopic extends Migration
{
    public function up()
    {
        Schema::create('offline_tricks_proposal_topic', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('topic_id')->unsigned();
            $table->integer('proposal_id')->unsigned();

            $table->unique(['proposal_id', 'topic_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('offline_tricks_proposal_topic');
    }
}
