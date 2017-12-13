<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title'); // 標題
            $table->text('body'); // 內容
            $table->integer('user_id')->unsigned(); // 發起者
            $table->integer('comments_count')->default(0); // 評論數
            $table->integer('followers_count')->default(1); // 關注數
            $table->integer('answers_count')->default(0); // 回應數
            $table->string('close_comment', 8)->default('F'); // 是否可評論
            $table->string('is_hidden', 8)->default('F'); // 是否隱藏文章
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
        Schema::dropIfExists('questions');
    }
}
