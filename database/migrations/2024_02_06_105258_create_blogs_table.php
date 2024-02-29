<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            // $table->unsignedBigInteger('comment_id')->nullable();
            // $table->foreign('comment_id')
            //     ->references('id')
            //     ->on('comments')
            //     ->cascadeOnDelete();
            // $table->unsignedBigInteger('likes_id')->nullable();
            // $table->foreign("likes_id")
            //     ->references('id')
            //     ->on('likes')
            //     ->cascadeOnDelete();
            $table->string('Title');
            $table->string('mini_title');
            $table->text('description');
            $table->string('banner')->nullable();
            $table->string('faculty');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
