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
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users');
            $table->string('name', length: 100);
            $table->smallInteger('body')->default(0);
            $table->smallInteger('mind')->default(0);
            $table->smallInteger('attack')->default(0);
            $table->smallInteger('defense')->default(0);
            $table->bigInteger('experience')->default(0);
            $table->bigInteger('gold')->default(0);
            $table->string('type', length: 100);
            $table->longText('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('characters');
    }
};
