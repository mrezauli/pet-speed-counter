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
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('sl')->nullable();
            $table->string('roll_no', 32)->nullable();
            $table->string('username', 64)->nullable();
            $table->string('typing_exam_cancel_comments')->nullable();
            $table->string('aptitude_exam_cancel_comments')->nullable();
            $table->string('aptitude_exam_review_comments')->nullable();
            $table->string('middle_name', 64)->nullable();
            $table->string('last_name', 64)->nullable();
            $table->string('nid', 64)->nullable();
            $table->string('email', 64)->nullable()->unique();
            $table->string('password', 64)->nullable();
            $table->date('dob')->nullable();
            $table->string('district', 64)->nullable();
            $table->unsignedInteger('role_id')->nullable()->index('user_role_id_foreign');
            $table->unsignedInteger('company_id')->nullable()->index('user_company_id_foreign');
            $table->unsignedInteger('designation_id')->nullable()->index('user_designation_id_foreign');
            $table->integer('exam_number')->nullable();
            $table->unsignedInteger('typing_exam_code_id')->nullable()->index('user_typing_exam_code_id_foreign');
            $table->unsignedInteger('aptitude_exam_code_id')->nullable()->index('user_aptitude_exam_code_id_foreign');
            $table->enum('exam_type', ['typing_test', 'aptitude_test'])->nullable();
            $table->date('exam_date')->nullable();
            $table->enum('shift', ['s1', 's2', 's3', 's4', 's5'])->nullable();
            $table->enum('status', ['active', 'inactive', 'cancel'])->nullable();
            $table->enum('typing_status', ['active', 'inactive', 'expelled', 'cancelled'])->nullable();
            $table->enum('aptitude_status', ['active', 'inactive', 'expelled', 'cancelled'])->nullable();
            $table->enum('mcq_status', ['active', 'inactive'])->nullable();
            $table->enum('attended_typing_test', ['true', 'false'])->nullable();
            $table->enum('attended_aptitude_test', ['true', 'false'])->nullable();
            $table->enum('started_exam', ['typing_test', 'aptitude_test'])->nullable();
            $table->dateTime('aptitude_exam_start_time')->nullable();
            $table->tinyInteger('examined_status')->default(0);
            $table->boolean('answer_sheet_given')->default(false);
            $table->unsignedInteger('examined_by')->nullable();
            $table->unsignedInteger('department_id')->nullable()->index('user_department_id_foreign');
            $table->dateTime('last_visit')->nullable();
            $table->dateTime('expire_date')->nullable();
            $table->string('remember_token', 64)->nullable();
            $table->string('auth_key', 128)->nullable();
            $table->string('access_token', 256)->nullable();
            $table->string('csrf_token', 64)->nullable();
            $table->string('ip_address', 32)->nullable();
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('updated_by');
            $table->timestamp('created_at')->useCurrentOnUpdate()->useCurrent();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
