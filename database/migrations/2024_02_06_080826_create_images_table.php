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
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('lien');
            $table->unsignedBigInteger('postId');

            // Ajouter la contrainte de clé étrangère
            $table->foreign('postId')->references('id')->on('post')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('images', function (Blueprint $table) {
            // Supprimer la contrainte de clé étrangère
            $table->dropForeign(['postId']);
        });
    
        // Supprimer la table seulement si elle existe
        Schema::dropIfExists('images');

    }
};
