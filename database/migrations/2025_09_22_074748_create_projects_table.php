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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_title');
            $table->string('project_image');
            $table->string('project_description');
            $table->string('project_sector');
            $table->string('project_client');
            $table->string('project_products_id');
            $table->string('project_slug');
            $table->string('project_state');
            $table->string('project_city');
            $table->string('project_location');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
