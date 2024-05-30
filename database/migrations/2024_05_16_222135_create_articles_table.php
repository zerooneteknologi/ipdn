<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('category_id')->nullable();
            $table->string('article_title');
            $table->string('article_slug');
            $table->enum('article_type', [1, 2, 3, 4]); // 1.profile, 2.organizer, 3.news, 4 announcement
            $table->string('article_image')->nullable();
            $table->text('article_description');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
