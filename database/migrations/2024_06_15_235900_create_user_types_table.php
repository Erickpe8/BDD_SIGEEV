<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Tabla: user_types
return new class extends Migration {
    public function up(): void
    {
        Schema::create('user_types', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->unique();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user_types');
    }
};
