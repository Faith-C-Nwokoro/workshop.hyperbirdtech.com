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
        Schema::create('workshops', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('category')->nullable();
            $table->date('date_scheduled')->nullable();
            $table->time('time_scheduled')->nullable();
            $table->integer('duration_hours')->default(2);
            $table->decimal('market_value', 10, 2)->default(0);
            $table->string('moderator')->nullable();
            $table->integer('expected_audience')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            
            $table->index('date_scheduled');
            $table->index('slug');
            $table->index('is_active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workshops');
    }
};
