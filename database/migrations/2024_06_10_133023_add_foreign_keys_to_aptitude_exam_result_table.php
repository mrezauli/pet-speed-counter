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
        Schema::table('aptitude_exam_result', function (Blueprint $table) {
            $table->foreign(['qselection_aptitude_id'])->references(['id'])->on('qselection_aptitude_test')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['user_id'])->references(['id'])->on('user')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('aptitude_exam_result', function (Blueprint $table) {
            $table->dropForeign('aptitude_exam_result_qselection_aptitude_id_foreign');
            $table->dropForeign('aptitude_exam_result_user_id_foreign');
        });
    }
};
