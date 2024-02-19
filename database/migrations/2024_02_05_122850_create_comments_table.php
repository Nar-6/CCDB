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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->text('contenu');
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
        Schema::table('comments', function (Blueprint $table) {
            // Supprimer la contrainte de clé étrangère
            $table->dropForeign(['postId']);
        });
    
        // Supprimer la table seulement si elle existe
        Schema::dropIfExists('comments');

    }
};
