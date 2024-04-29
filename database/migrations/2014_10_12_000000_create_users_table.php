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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstName', 50);
            $table->string('middleName', 50)->nullable();
            $table->string('lastName', 50);
            $table->string('username', 100)->unique()->nullable();
            $table->string('email', 100)->unique();
            $table->string('phone', 20)->unique();
            $table->string('gender', 10);
            $table->string('businessStatus', 20)->default('none');
            $table->string('accountStatus', 20)->default('active');
            $table->string('yinkcityStatus', 20)->default('member');
            $table->string('verify', 10)->default('no');
            $table->string('isOnline', 10)->default('no');
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('phone_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
