<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // php artisan make:migration create_posts_table --create=posts  在table名稱=migration 裡面建資料表 下面欄位
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('content');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('views');
            $table->timestamps();
        
        });
    }
    // php artisan migrate:rollback 刪除掉資料表
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
