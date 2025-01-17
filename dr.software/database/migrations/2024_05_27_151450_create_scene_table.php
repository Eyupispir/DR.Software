<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * scene table this is the main part of game.
     */
    public function up(): void
    {
        Schema::create('scene', function (Blueprint $table) {
            $table->id();
            $table->string('adress')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->json('state')->nullable()->default('{"default": true}');


            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->softDeletes();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scene');
    }
};
