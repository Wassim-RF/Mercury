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
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('logo' , ['family', 'friends', 'work', 'emergency', 'other'])->default('other');
            $table->enum('color' , ['FF6B6B' , '4D96FF' , 'FFD93D' , 'FF4444' , '6BCB77' , '9B59B6' , '95A5A6'])->default('FF6B6B');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('groups');
    }
};
