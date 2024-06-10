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
        Schema::create('organization_application_mst', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->nullable()->index('organization_application_mst_user_id_foreign');
            $table->unsignedInteger('company_id')->nullable()->index('organization_application_mst_company_id_foreign');
            $table->enum('application_format', ['template', 'file_upload'])->nullable();
            $table->enum('bcc_or_organization', ['bcc', 'organization'])->nullable();
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
        Schema::dropIfExists('organization_application_mst');
    }
};
