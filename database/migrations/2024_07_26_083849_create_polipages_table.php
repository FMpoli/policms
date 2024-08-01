<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        /* Tutti i campi sono json per supportare la localizzazione */
        Schema::create('polipages_pages', function (Blueprint $table) {
            $table->id();
            $table->json('title');                          // Titolo della pagina
            $table->json('slug')->unique();                 // Slug univoco della pagina
            $table->json('content');                        // Campo JSON per il builder
            $table->json('description')->nullable();        // Descrizione della pagina
            $table->json('meta_title')->nullable();         // Meta title per SEO
            $table->json('meta_description')->nullable();   // Meta description per SEO
            $table->boolean('is_published')->default(false);   // Stato di pubblicazione
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
