<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('polinews_categories', function (Blueprint $table) {
            $table->id();
            $table->string("title")->unique();
            $table->string("slug")->unique();
            $table->json('custom_fields')->nullable();
            $table->boolean('is_active')->default(true);
            $table->foreignId("parent_id")->nullable()->references('id')->on('polinews_categories')->onDelete('cascade');
            $table->integer('order')->default(0);
            $table->string('icon')->nullable();
            $table->string('color')->nullable();
            $table->string('image')->nullable();
            $table->string('description')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('meta_robots')->nullable();
            $table->string('meta_author')->nullable();
            $table->string('meta_canonical')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('polinews_news');
    }
};
