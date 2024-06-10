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
        Schema::create('typing_exam_result', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('qselection_typing_id')->nullable()->index('typing_exam_result_qselection_typing_id_foreign');
            $table->unsignedInteger('user_id')->nullable()->index('typing_exam_result_user_id_foreign');
            $table->enum('exam_type', ['bangla', 'english'])->nullable();
            $table->unsignedInteger('exam_time')->nullable();
            $table->boolean('started')->nullable();
            $table->boolean('completed')->nullable();
            $table->text('original_text')->nullable();
            $table->text('answered_text')->nullable();
            $table->text('process_text')->nullable();
            $table->unsignedInteger('total_words')->nullable();
            $table->unsignedInteger('typed_words')->nullable();
            $table->unsignedInteger('inserted_words')->nullable();
            $table->unsignedInteger('deleted_words')->nullable();
            $table->double('accuracy')->nullable();
            $table->double('wpm')->nullable();
            $table->integer('total_given_character')->default(0);
            $table->integer('total_type_character')->default(0);
            $table->integer('total_type_correctd_character')->default(0);
            $table->integer('given_word_special_char')->default(0);
            $table->integer('type_word_special_char')->default(0);
            $table->integer('correct_word_special_char')->default(0);
            $table->integer('given_word_space')->default(0);
            $table->integer('typed_word_space')->default(0);
            $table->enum('status', ['active', 'inactive'])->nullable();
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('typing_exam_result');
    }
};
