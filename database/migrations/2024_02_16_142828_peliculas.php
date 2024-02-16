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
        Schema::create('peliculas', function (Blueprint $table) {
            //He puesto los valores en nulo debido a que tenia que seguir, sino me da un error. Realmente se deben quitar.
            $table->id()->unique();
            $table->string('title')->nullable();
            $table->string('year')->nullable();
            $table->string('director')->nullable();
            $table->string('poster')->nullable();
            $table->boolean('rented')->nullable();
            $table->string('synopsis')->nullable();
            $table->string('protagonista')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peliculas');
    }
};
