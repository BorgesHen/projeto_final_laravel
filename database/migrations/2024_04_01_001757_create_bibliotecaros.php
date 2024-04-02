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
        Schema::create('bibliotecaros', function (Blueprint $table) {
            $table->bigint('bibliotecario_ID');
            $table->int('secao');
            $table->timestamp('horario');
            $table->string("nome");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bibliotecaros');
    }
};
