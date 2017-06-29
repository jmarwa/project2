<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('title');
            $table->string('short_description');
            $table->string('description');
            $table->string('category');
            $table->string('tag');
            $table->string('video_url');
            $table->date('campaign_start_date');
            $table->date('campaign_end_date');
            $table->decimal('minimum_funding_amount', 5,2);
            $table->decimal('funding_goal', 9,2);
            $table->string('location');
            // $table->foreign('user_id')->references('user_id')->on('users');
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
        Schema::dropIfExists('projects');
    }
}
