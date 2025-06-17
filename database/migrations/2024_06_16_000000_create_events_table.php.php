<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Tabla: events
return new class extends Migration {
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('event_name', 1000);
            $table->string('event_type');
            $table->string('interested_programs');
            $table->string('description');
            $table->string('event_image');
            $table->date('event_date');
            $table->string('ubication', 255);
            $table->integer('capacity');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
