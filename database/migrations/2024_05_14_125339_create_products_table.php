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
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->string('nombre');
            $table->text('descripcion');
            $table->bigInteger('precio');
            $table->integer('stock')->nullable();
            $table->string('estado')->default('activo');
            $table->string('categoria')->nullable();
            $table->string('imagen')->nullable();
            $table->string('referencia')->unique();
            $table->string('reputacion')->nullable();
            $table->tinyInteger('descuento')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
