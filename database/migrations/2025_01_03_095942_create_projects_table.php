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
            $table->string('title');
            $table->string('summary')->nullable();
            $table->text('description')->nullable();
            $table->json('images')->nullable();
            $table->integer('complexity')->default(1)->nullable();
            $table->json('technologies')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('project_link')->nullable();
            $table->string('status')->default('in_progress')->nullable();
            $table->string('type')->nullable();
            $table->integer('estimated_duration')->nullable();
            $table->boolean('visibility')->default(false)->nullable();
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
