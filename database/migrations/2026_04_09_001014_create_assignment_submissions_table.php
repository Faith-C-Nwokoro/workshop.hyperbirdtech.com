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
        Schema::create('assignment_submissions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('workshop_id')->nullable()->constrained()->onDelete('set null');
            $table->string('submitter_name');
            $table->string('submitter_email');
            $table->string('workshop_title')->nullable();
            $table->string('assignment_title')->nullable();
            $table->text('project_description')->nullable();
            $table->text('notes')->nullable();
            $table->string('file_path')->nullable();
            $table->string('file_name_original')->nullable();
            $table->string('github_url')->nullable();
            $table->string('live_demo_url')->nullable();
            $table->enum('token_payment_status', ['paid', 'pending'])->default('pending');
            $table->enum('review_status', ['pending', 'reviewing', 'completed'])->default('pending');
            $table->text('feedback')->nullable();
            $table->integer('score')->nullable();
            $table->timestamp('reviewed_at')->nullable();
            $table->timestamps();
            
            $table->index('submitter_email');
            $table->index('workshop_id');
            $table->index('review_status');
            $table->index('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assignment_submissions');
    }
};
