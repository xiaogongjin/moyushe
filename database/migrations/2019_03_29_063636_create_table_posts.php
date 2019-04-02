<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->string('title');
            $table->mediumText('content');
			$table->integer('read_times')->default(0);
	        $table->integer('comment_times')->default(0);
	        $table->integer('up_times')->default(0);
	        $table->integer('down_times')->default(0);
	        $table->dateTime('last_comments_at');
	        $table->bigInteger('last_comments_user_id');
	        $table->softDeletes();
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
        Schema::dropIfExists('posts');
    }
}
