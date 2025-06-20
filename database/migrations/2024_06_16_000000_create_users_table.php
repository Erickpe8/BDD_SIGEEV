<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Tabla: users
return new class extends Migration {
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('second_name')->nullable();
            $table->string('first_surname');
            $table->string('second_surname')->nullable();
            $table->string('email')->unique();
            $table->unsignedBigInteger('user_type_id');
            $table->bigInteger('telephone_number');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('user_photo')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('user_type_id')->references('id')->on('user_types');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
