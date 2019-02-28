<?php namespace OFFLINE\Tricks\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateOfflineTricksProposalTag extends Migration
{
    public function up()
    {
        Schema::create('offline_tricks_proposal_tag', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('proposal_id')->unsigned();
            $table->integer('tag_id')->unsigned();

            $table->unique(['proposal_id', 'tag_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('offline_tricks_proposal_tag');
    }
}
