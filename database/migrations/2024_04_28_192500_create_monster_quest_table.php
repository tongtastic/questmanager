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
        Schema::create('monster_quest', function (Blueprint $table) {
            $table->foreignId('monster_id')->references('id')->on('monsters');
            $table->foreignId('quest_id')->references('id')->on('quests');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monster_quest');
    }
};
