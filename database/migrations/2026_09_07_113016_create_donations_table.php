<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('camping_id')->nullable()->constrained('campings')->cascadeOnDelete();
            $table->foreignId('donor_id')->nullable()->constrained('donaturs')->nullOnDelete();
            $table->bigInteger('amount')->default(0);
            $table->dateTime('date')->nullable();
            $table->enum('status', ['SUCCESS', 'PENDING', 'FAILED'])->default('PENDING');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('donations');
    }
};
