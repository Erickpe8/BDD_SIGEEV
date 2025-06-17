<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Tabla: event_pricing
return new class extends Migration {
    public function up(): void
    {
        Schema::create('event_pricing', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('event_id');
            $table->unsignedBigInteger('user_type_id');
            $table->decimal('price', 15, 2)->default(0);
            $table->timestamp('start_date')->nullable();
            $table->timestamp('end_date')->nullable();
            $table->timestamp('create_at');
            $table->timestamp('updated_at');

            $table->foreign('event_id')->references('id')->on('events');
            $table->foreign('user_type_id')->references('id')->on('user_types');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('event_pricing');
    }
};
