<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Tabla: payments
return new class extends Migration {
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('subscription_id')->nullable();
            $table->decimal('amount', 15, 2)->nullable();
            $table->integer('quotas_amount')->nullable();
            $table->date('payment_date')->nullable();
            $table->string('payment_method', 50)->nullable();

            $table->foreign('subscription_id')->references('id')->on('subscriptions');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};