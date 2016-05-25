<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 100);
            $table->text('content');
            $table->integer('author')->unsigned();
            $table->integer('pv');
            $table->integer('nodeid')->unsigned();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
            $table->foreign('author')->references('id')->on('users');
            $table->foreign('nodeid')->references('id')->on('nodes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('articles');
    }
}
