<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('qualifier_submissions', function (Blueprint $table) {
            $table->id();
            $table->string('role');
            $table->string('engagement_type');
            $table->string('stage');
            $table->string('buying_history');
            $table->text('bottleneck')->nullable();
            $table->string('timing_driver');
            $table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qualifier_submissions');
    }
};
