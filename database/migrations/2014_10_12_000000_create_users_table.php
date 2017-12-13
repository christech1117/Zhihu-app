<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique(); // 姓名
            $table->string('email')->unique(); // 信箱
            $table->string('password'); // 密碼
            $table->string('avatar'); // 頭像
            $table->string('confirmation_token'); // 認證token
            $table->smallInteger('is_active')->default(0); // 是否啟用
            $table->integer('questions_count')->default(0); // 問題數
            $table->integer('answers_count')->default(0); // 回答數
            $table->integer('comments_count')->default(0); // 評論數
            $table->integer('favorites_count')->default(0); // 收藏數 
            $table->integer('likes_count')->default(0); // 點讚數
            $table->integer('followers_count')->default(0); // 關注數
            $table->integer('followings_count')->default(0); // 被關注數
            $table->json('settings')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
