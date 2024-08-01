<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('polinews_news', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("slug");
            $table->text("summary");
            $table->text("content")->nullable();
            $table->string("main_image")->nullable();
            $table->json("links")->nullable();
            $table->json('custom_fields')->nullable();
            $table->foreignId("category_id")->nullable()->references('id')->on('polinews_categories')->onDelete('cascade');
            $table->boolean('is_active')->default(true);
            $table->boolean('is_featured')->default(false);
            $table->dateTime('published_at')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('meta_robots')->nullable();
            $table->string('meta_author')->nullable();
            $table->string('meta_canonical')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('polinews_news');
    }
};
