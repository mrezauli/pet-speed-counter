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
        Schema::create('exam_code', function (Blueprint $table) {
            $table->increments('id');
            $table->string('exam_code_name', 64)->unique();
            $table->unsignedInteger('company_id')->nullable()->index('exam_code_company_id_foreign');
            $table->unsignedInteger('designation_id')->nullable()->index('exam_code_designation_id_foreign');
            $table->date('exam_date')->nullable();
            $table->enum('exam_type', ['typing_test', 'aptitude_test'])->nullable();
            $table->enum('shift', ['s1', 's2', 's3', 's4', 's5'])->nullable();
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
        Schema::dropIfExists('exam_code');
    }
};
