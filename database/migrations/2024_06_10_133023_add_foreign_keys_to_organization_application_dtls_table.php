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
        Schema::table('organization_application_dtls', function (Blueprint $table) {
            $table->foreign(['org_app_mst_id'])->references(['id'])->on('organization_application_mst')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('organization_application_dtls', function (Blueprint $table) {
            $table->dropForeign('organization_application_dtls_org_app_mst_id_foreign');
        });
    }
};
