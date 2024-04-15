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
        Schema::create('media_comments', function (Blueprint $table) {
            $table->foreignUuid('media_id');
            $table->foreignId('comment_id');
            $table->foreignId('user_id');
            $table->foreignId('parent_comment_id')->nullable();

            $table->foreign('media_id')->references('id')->on('media');
            $table->foreign('comment_id')->references('id')->on('comments');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('parent_comment_id')->references('id')->on('comments');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media_comments');
    }
};
