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
        Schema::table('examiner_selection', function (Blueprint $table) {
            $table->foreign(['company_id'])->references(['id'])->on('company')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['designation_id'])->references(['id'])->on('designation')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['examiner_id'])->references(['id'])->on('user')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['exam_code_id'])->references(['id'])->on('exam_code')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('examiner_selection', function (Blueprint $table) {
            $table->dropForeign('examiner_selection_company_id_foreign');
            $table->dropForeign('examiner_selection_designation_id_foreign');
            $table->dropForeign('examiner_selection_examiner_id_foreign');
            $table->dropForeign('examiner_selection_exam_code_id_foreign');
        });
    }
};
