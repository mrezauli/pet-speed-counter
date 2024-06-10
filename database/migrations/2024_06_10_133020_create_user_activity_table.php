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
        Schema::create('user_activity', function (Blueprint $table) {
            $table->increments('id');
            $table->string('action_name', 64)->nullable();
            $table->string('action_url', 64)->nullable();
            $table->text('action_details')->nullable();
            $table->string('action_table', 64)->nullable();
            $table->dateTime('date')->nullable();
            $table->unsignedInteger('user_id')->nullable()->index('user_activity_user_id_foreign');
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('updated_by');
            $table->timestamp('created_at')->default('0000-00-00 00:00:00');
            $table->timestamp('updated_at')->default('0000-00-00 00:00:00');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_activity');
    }
};
