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
        Schema::create('media_blog', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();        // unique for SEO
            $table->longText('html_content');        // full blog body
            $table->string('image')->nullable();     // store image path or URL
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media_blog');
    }
};
