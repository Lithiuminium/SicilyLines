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
        Schema::create('ferries', function (Blueprint $table) {
            $table->ID();
            $table->string('NOM');
            $table->integer('LONGUEUR');
            $table->integer('LARGEUR');
            $table->integer('VITESSE');
            $table->string('PHOTO');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ferries');
    }
};
