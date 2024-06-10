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
        Schema::create('aptitude_exam_result', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('qselection_aptitude_id')->nullable()->index('aptitude_exam_result_qselection_aptitude_id_foreign');
            $table->unsignedInteger('user_id')->nullable()->index('aptitude_exam_result_user_id_foreign');
            $table->enum('question_type', ['word', 'excel', 'ppt'])->nullable();
            $table->string('answer_original_file_path', 100)->nullable();
            $table->string('answer_image_file_path', 100)->nullable();
            $table->tinyInteger('re_submit_flag')->default(0);
            $table->enum('status', ['active', 'inactive'])->nullable();
            $table->decimal('answer_marks', 20)->nullable();
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
        Schema::dropIfExists('aptitude_exam_result');
    }
};
