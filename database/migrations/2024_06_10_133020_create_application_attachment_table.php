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
        Schema::create('application_attachment', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('org_app_mst_id')->nullable()->index('application_attachment_org_app_mst_id_foreign');
            $table->string('application_attachment_path', 200)->nullable();
            $table->enum('attachment_type', ['file_upload', 'template_main', 'template_extra'])->nullable();
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
        Schema::dropIfExists('application_attachment');
    }
};
