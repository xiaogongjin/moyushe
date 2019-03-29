<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePostsVisitors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts_visitors', function (Blueprint $table) {
            $table->bigIncrements('id');
	        $table->bigInteger('posts_id');
	        $table->bigInteger('user_id')->default(0);
	        $table->string('ip', 32);
	        $table->string('country')->nullable();
	        $table->integer('clicks')->unsigned()->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_posts_visitors');
    }
}
