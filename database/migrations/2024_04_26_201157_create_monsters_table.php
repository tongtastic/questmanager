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
        Schema::create('monsters', function (Blueprint $table) {
            $table->id();
            $table->string('name', length: 250);
            $table->text('description')->nullable();
            $table->json('attributes')->nullable();
            $table->smallInteger('body');
            $table->smallInteger('mind');
            $table->smallInteger('attack');
            $table->smallInteger('defense');
            $table->string('type', length: 255);
            $table->longText('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monsters');
    }
};
