<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{  
        
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('user_email');
            $table->integer('project_id');
            $table->string('comment_content');
            $table->rememberToken();
            $table->timestamps();
//            $table->foreign('user_id')->references('user_id')->on('users');
//            $table->foreign('user_email')->references('email')->on('users');
//            $table->foreign('project_id')->references('project_id')->on('projects');
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('comments');  
    }
}
