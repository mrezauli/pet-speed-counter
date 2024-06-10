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
        Schema::table('exam_code', function (Blueprint $table) {
            $table->foreign(['company_id'])->references(['id'])->on('company')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['designation_id'])->references(['id'])->on('designation')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('exam_code', function (Blueprint $table) {
            $table->dropForeign('exam_code_company_id_foreign');
            $table->dropForeign('exam_code_designation_id_foreign');
        });
    }
};
