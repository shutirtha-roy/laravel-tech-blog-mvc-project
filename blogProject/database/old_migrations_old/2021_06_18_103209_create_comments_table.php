<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('username');
            $table->string('comment');
            $table->timestamps();
        });

        Schema::table('comments', function($table) {
            $table->foreignId('user_id')
                  ->constraint('users')
                  ->cascadeOnDelete();

            $table->foreignId('post_id')
                  ->constraint('posts')
                  ->cascadeOnDelete();
        });
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
