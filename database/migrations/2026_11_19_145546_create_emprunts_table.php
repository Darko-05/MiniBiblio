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
        Schema::create('emprunts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('membre_id')->constrained('membres')->onDelete('cascade');
            $table->foreignId('livre_id')->constrained('livres')->onDelete('cascade');
            // La date d'emprunt est le jour de l'emprunt par défaut
            $table->date('date_emprunt')->default(now());
            // La date de retour prevue est la date d'emprunt + 14 jours
            $table->date('date_retour_prevue')->default(now()->addDay(14));
            $table->date('date_retour_effective')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emprunts');
    }
};
