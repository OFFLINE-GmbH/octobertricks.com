<?php namespace OFFLINE\Tricks\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateOfflineTricksProposals extends Migration
{
    public function up()
    {
        Schema::create('offline_tricks_proposals', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('trick_id')->unsigned();
            $table->integer('status')->unsigned();
            $table->string('title');
            $table->text('content');
            $table->integer('user_id')->nullable();
            $table->string('slug');
            $table->text('references')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('published_at')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('offline_tricks_proposals');
    }
}
