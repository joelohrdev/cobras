<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('tournament_id')->nullable();
            $table->string('opponent');
            $table->date('date');
            $table->string('city');
            $table->string('state');
            $table->string('outcome')->nullable();
            $table->integer('our_score')->nullable();
            $table->integer('opponent_score')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
