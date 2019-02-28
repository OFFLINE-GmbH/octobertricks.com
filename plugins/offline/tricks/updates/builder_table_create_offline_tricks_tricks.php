<?php namespace OFFLINE\Tricks\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateOfflineTricksTricks extends Migration
{
    public function up()
    {
        Schema::create('offline_tricks_tricks', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->text('content');
            $table->integer('user_id')->nullable();
            $table->integer('votes_up')->unsigned()->default(0);
            $table->integer('votes_down')->unsigned()->default(0);
            $table->integer('votes')->default(0);
            $table->integer('revision')->unsigned()->default(1);
            $table->integer('pageviews')->unsigned()->default(0);
            $table->string('slug');
            $table->text('references')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('published_at')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('offline_tricks_tricks');
    }
}
