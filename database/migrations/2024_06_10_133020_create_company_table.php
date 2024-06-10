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
        Schema::create('company', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name', 512);
            $table->string('address_one', 512)->nullable();
            $table->string('address_two', 512)->nullable();
            $table->string('address_three', 512)->nullable();
            $table->string('address_four', 512)->nullable();
            $table->string('contact_person', 64)->nullable();
            $table->string('designation', 64)->nullable();
            $table->string('phone', 64)->nullable();
            $table->string('mobile', 64)->nullable();
            $table->string('email', 64)->nullable();
            $table->string('web_address', 64)->nullable();
            $table->enum('status', ['active', 'inactive', 'cancel'])->nullable();
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company');
    }
};
