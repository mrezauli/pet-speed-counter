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
        Schema::table('qselection_aptitude_test', function (Blueprint $table) {
            $table->foreign(['company_id'])->references(['id'])->on('company')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['designation_id'])->references(['id'])->on('designation')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['exam_code_id'])->references(['id'])->on('exam_code')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['qbank_aptitude_id'])->references(['id'])->on('qbank_aptitude_test')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('qselection_aptitude_test', function (Blueprint $table) {
            $table->dropForeign('qselection_aptitude_test_company_id_foreign');
            $table->dropForeign('qselection_aptitude_test_designation_id_foreign');
            $table->dropForeign('qselection_aptitude_test_exam_code_id_foreign');
            $table->dropForeign('qselection_aptitude_test_qbank_aptitude_id_foreign');
        });
    }
};
