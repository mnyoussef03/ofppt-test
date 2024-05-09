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
        Schema::create('voitures', function (Blueprint $table) {
            $table->id();
            $table->string('matricule',50);
            $table->string('serie',50);
            $table->string('model',50);
            $table->string('couleur',50);
            $table->string('carburant',50);
            $table->string('puissance',50);
            $table->float('prix');
            $table->string('image');
            $table->foreignId('marque_id')->constrained('marques')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voitures');
    }
};
