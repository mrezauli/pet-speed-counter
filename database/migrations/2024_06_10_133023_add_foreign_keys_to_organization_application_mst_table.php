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
        Schema::table('organization_application_mst', function (Blueprint $table) {
            $table->foreign(['company_id'])->references(['id'])->on('company')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['user_id'])->references(['id'])->on('user')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('organization_application_mst', function (Blueprint $table) {
            $table->dropForeign('organization_application_mst_company_id_foreign');
            $table->dropForeign('organization_application_mst_user_id_foreign');
        });
    }
};