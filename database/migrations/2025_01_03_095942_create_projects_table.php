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
            $table->string('summary');
            $table->text('description');
            $table->json('images')->nullable();
            $table->integer('complexity')->default(1);
            $table->json('technologies')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('project_link')->nullable();
            $table->string('status')->default('in_progress');
            $table->string('type')->default('web');
            $table->integer('estimated_duration')->nullable();
            $table->boolean('visibility')->default(true);
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
