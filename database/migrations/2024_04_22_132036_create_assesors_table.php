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
        Schema::create('assesors', function (Blueprint $table) {
            $table->id();
            $table->string('assesor_name');
            $table->string('assesor_slug');
            $table->string('assesor_code');
            $table->string('assesor_specialize');
            $table->string('assesor_address');
            $table->text('assesor_detail');
            $table->string('assesor_image')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assesors');
    }
};