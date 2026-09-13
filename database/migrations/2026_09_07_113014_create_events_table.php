<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('camping_id')->nullable()->constrained('campings')->cascadeOnDelete();
            $table->foreignId('organizer_id')->nullable()->constrained('organizers')->nullOnDelete();
            $table->dateTime('schedule')->nullable();
            $table->string('title');
            $table->string('location')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
