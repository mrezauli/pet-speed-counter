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
        Schema::create('organization_application_dtls', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('org_app_mst_id')->nullable()->index('organization_application_dtls_org_app_mst_id_foreign');
            $table->string('subject', 200)->nullable();
            $table->string('to_email', 200)->nullable();
            $table->text('to_person')->nullable();
            $table->string('from_email', 200)->nullable();
            $table->date('date_email')->nullable();
            $table->enum('read_email', ['true', 'false'])->nullable();
            $table->string('yours_only', 200)->nullable();
            $table->string('letter_no', 64)->nullable();
            $table->string('reference_no', 200)->nullable();
            $table->text('email_description')->nullable();
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
        Schema::dropIfExists('organization_application_dtls');
    }
};
