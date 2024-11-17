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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title')->index();
            $table->string('author')->index();
            $table->string('isbn')->index();
            $table->string('cover');
            $table->text('description');
            $table->integer('pages');
            $table->string('language')->index();
            $table->string('publisher')->index();
            $table->date('published_at')->index();
            $table->string('genre')->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
