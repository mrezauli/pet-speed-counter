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
        Schema::create('qbank_aptitude_test', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 100)->nullable();
            $table->enum('question_type', ['word', 'excel', 'ppt'])->nullable();
            $table->string('original_file_path', 100)->nullable();
            $table->string('image_file_path', 100)->nullable();
            $table->enum('status', ['active', 'inactive'])->nullable();
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->timestamp('created_at')->default('0000-00-00 00:00:00');
            $table->timestamp('updated_at')->default('0000-00-00 00:00:00');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qbank_aptitude_test');
    }
};
