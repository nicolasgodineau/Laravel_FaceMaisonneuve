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
        Schema::create('etudiants', function (Blueprint $table) {
            //$table->id();
            // Permet de définir l'id de l'étudiant via la table User (en lien avec l'authentification)
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            $table->timestamps();
            $table->string('nom', 50);
            $table->string('prenom', 50);
            $table->string('adresse', 100);
            $table->string('telephone', 50);
            //$table->string('email', 50)->unique();
            $table->date('dateNaissance');

            // Permet d'ajouter la clée étrangère qui arrive de la table Ville (id)
            $table->unsignedBigInteger('ville_id');
            $table->foreign('ville_id')->references('id')->on('villes');

            // défini la clée primaire de l'étudiant en utilisant la clée étrangère "user_id"
            $table->primary('user_id');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiants');
    }
};
