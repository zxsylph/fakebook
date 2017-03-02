<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Comment', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ownerID')->unsigned();
            $table->string('body');
            $table->integer('postID')->unsigned();
            $table->timestamps();

            $table->foreign('ownerID')->references('id')->on('users');
            $table->foreign('postID')->references('id')->on('Post');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Comment');
    }
}
