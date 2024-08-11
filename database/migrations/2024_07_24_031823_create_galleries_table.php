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
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();

            $table->foreignId('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');

            $table->string('title');
            $table->string('sub_title');
            $table->string('client_name');
            $table->string('production_year');
            $table->json('tags');
            $table->text('description');
            $table->text('image');
            $table->enum('type', ['gart', 'reise']);
            $table->string('instagram_post_url');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galleries');
    }
};
