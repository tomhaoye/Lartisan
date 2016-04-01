<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTopicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('topics_type',function(Blueprint $table){
            $table->increments('id');
            $table->enum('type',array('article','interlocution'));
        });

        Schema::create('topics_sort',function(Blueprint $table){
            $table->increments('id');
            $table->unsignedInteger('type_id');
            $table->string('sort',64);
            $table->foreign('type_id')->references('id')->on('topics_type');
        });

        Schema::create('topics',function(Blueprint $table){
            $table->increments('id');
            $table->string('title');
            $table->text('content');
            $table->smallInteger('view_count');
            $table->smallInteger('love_count');
            $table->smallInteger('reply_count');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('type_id');
            $table->unsignedInteger('sort_id');
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('type_id')->references('id')->on('topics_type');
            $table->foreign('sort_id')->references('id')->on('topics_sort');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
