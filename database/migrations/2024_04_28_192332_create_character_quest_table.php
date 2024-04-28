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
        Schema::create('character_quest', function (Blueprint $table) {
            $table->foreignId('character_id')->references('id')->on('characters');
            $table->foreignId('quest_id')->references('id')->on('quests');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('character_quest');
    }
};
