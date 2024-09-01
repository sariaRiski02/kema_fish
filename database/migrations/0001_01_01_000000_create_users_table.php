<?php

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name')->nullable(false);
            $table->string('email')->unique();
            $table->string('password')->nullable(false);

            $table->timestamps();
        });

        Schema::create('tokens_activation', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('id_user')->constrained('users')->nullable(false);
            $table->string('token');
            $table->dateTime('expired_at');
            $table->boolean('is_active')->default(false);
            $table->timestamps();
        });

        Schema::create('tokens_session', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('id_user')->constrained('users');
            $table->boolean('is_session');
            $table->uuid('token');
            $table->timestamps();
        });

        Schema::create('admin', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamps();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignUuid('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tokens_activation');
        Schema::dropIfExists('tokens_session');
        Schema::dropIfExists('sessions');
        Schema::dropIfExists('admin');
        Schema::dropIfExists('users');
    }
};
