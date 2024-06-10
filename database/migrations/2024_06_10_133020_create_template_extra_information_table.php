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
        Schema::create('template_extra_information', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('org_app_mst_id')->nullable()->index('template_extra_information_org_app_mst_id_foreign');
            $table->enum('extra_information_type', ['reference_no', 'copy', 'distribution'])->nullable();
            $table->text('extra_information')->nullable();
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
        Schema::dropIfExists('template_extra_information');
    }
};
