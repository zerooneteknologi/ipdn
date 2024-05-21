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
        Schema::create('scemes', function (Blueprint $table) {
            $table->id();
            $table->string('sceme_name');
            $table->string('sceme_slug');
            $table->string('sceme_code');
            $table->enum('sceme_status', [1, 2]); // 1. active 2. disactive
            $table->enum('sceme_bnsp', [1, 2]); // 1. active 2. disactive
            $table->text('sceme_detail')->nullable();
            $table->string('sceme_image')->nullable();
            $table->string('sceme_file')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scemes');
    }
};
