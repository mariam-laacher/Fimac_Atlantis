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
        Schema::create('appartements', function (Blueprint $table) {
            $table->id();
            $table->string('niveau');
            $table->string('designation');
            $table->decimal('surface', 8, 2);
            $table->integer('salon')->default(0);
            $table->integer('hall')->default(0);
            $table->integer('cuisine')->default(0);
            $table->integer('chambre_1')->default(0);
            $table->integer('chambre_2')->nullable();
            $table->integer('sdb')->default(0);
            $table->integer('wc')->default(0);
            $table->boolean('terrasse')->default(false);
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });

        Schema::create('appartement_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('appartement_id')->constrained('appartements')->onDelete('cascade');
            $table->string('image_path');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appartement_images');
        Schema::dropIfExists('appartements');
    }
};
