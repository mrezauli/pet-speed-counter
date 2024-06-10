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
        Schema::create('examiner_selection', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('examiner_id')->nullable()->index('examiner_selection_examiner_id_foreign');
            $table->unsignedInteger('company_id')->nullable()->index('examiner_selection_company_id_foreign');
            $table->unsignedInteger('designation_id')->nullable()->index('examiner_selection_designation_id_foreign');
            $table->unsignedInteger('exam_code_id')->nullable()->index('examiner_selection_exam_code_id_foreign');
            $table->date('exam_date')->nullable();
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
        Schema::dropIfExists('examiner_selection');
    }
};
