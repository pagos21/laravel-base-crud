<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      // Schema::dropIfExists('posts');

        Schema::create('posts', function (Blueprint $table) {
            $table-> id();
            $table -> string('title', 75) -> unique();
            $table -> text('text') -> nullable();
            $table -> string('category', 25);
            $table-> integer('like');
            $table-> integer('dislike');
            $table -> timestamps();
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
