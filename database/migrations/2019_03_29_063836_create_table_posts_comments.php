<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePostsComments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//    	for ($i = 0;$i<100;$i++) {
//		    $table_id = str_pad($i,2,0,STR_PAD_LEFT);
		    Schema::create('posts_comments', function (Blueprint $table) {
			    $table->bigIncrements('id');
			    $table->bigInteger('user_id');
			    $table->bigInteger('posts_id');
			    $table->bigInteger('comments_id');
			    $table->text('content');
			    $table->integer('floor');
			    $table->integer('up_times')->default(0);
			    $table->integer('down_times')->default(0);
			    $table->softDeletes();
			    $table->timestamps();
		    });
//	    }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts_comments');
    }
}
