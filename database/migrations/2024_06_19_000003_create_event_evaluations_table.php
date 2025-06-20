<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventEvaluationsTable extends Migration
{
    public function up(): void
    {
        Schema::create('event_evaluations', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('event_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();

            $table->tinyInteger('logistics')->nullable();
            $table->tinyInteger('content')->nullable();
            $table->tinyInteger('speakers')->nullable();
            $table->tinyInteger('organization')->nullable();
            $table->tinyInteger('overall_satisfaction')->nullable();

            $table->text('comments')->nullable();
            $table->timestamp('evaluation_date')->nullable();

            $table->timestamps();

            $table->foreign('event_id')->references('id')->on('events')->onDelete('set null');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('event_evaluations');
    }
}
