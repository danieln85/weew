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
        Schema::table('products', function (Blueprint $table) {
            $table->string('imagen2')->nullable()->after('imagen');
            $table->string('imagen3')->nullable()->after('imagen2');
            $table->string('imagen4')->nullable()->after('imagen3');
            $table->string('imagen5')->nullable()->after('imagen4');
            $table->string('imagen6')->nullable()->after('imagen5');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('imagen2');
            $table->dropColumn('imagen3');
            $table->dropColumn('imagen4');
            $table->dropColumn('imagen5');
            $table->dropColumn('imagen6');
        });
    }
};
