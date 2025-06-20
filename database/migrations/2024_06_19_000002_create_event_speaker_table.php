<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventSpeakerTable extends Migration
{
    public function up(): void
    {
        Schema::create('event_speaker', function (Blueprint $table) {
            $table->unsignedBigInteger('event_id');
            $table->unsignedBigInteger('speaker_id');
            $table->timestamps();

            $table->primary(['event_id', 'speaker_id']);

            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
            $table->foreign('speaker_id')->references('id')->on('speaker')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('event_speaker');
    }
}

