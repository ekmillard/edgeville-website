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
        Schema::create('highscores', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->integer('overall_xp')->default(0);
            $table->integer('attack_xp')->default(0);
            $table->integer('defence_xp')->default(0);
            $table->integer('strength_xp')->default(0);
            $table->integer('hitpoints_xp')->default(0);
            $table->integer('ranged_xp')->default(0);
            $table->integer('prayer_xp')->default(0);
            $table->integer('magic_xp')->default(0);
            $table->integer('cooking_xp')->default(0);
            $table->integer('woodcutting_xp')->default(0);
            $table->integer('fletching_xp')->default(0);
            $table->integer('fishing_xp')->default(0);
            $table->integer('firemaking_xp')->default(0);
            $table->integer('crafting_xp')->default(0);
            $table->integer('smithing_xp')->default(0);
            $table->integer('mining_xp')->default(0);
            $table->integer('herblore_xp')->default(0);
            $table->integer('agility_xp')->default(0);
            $table->integer('thieving_xp')->default(0);
            $table->integer('slayer_xp')->default(0);
            $table->integer('farming_xp')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('highscores');
    }
};
