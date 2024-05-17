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
        Schema::create('memorandos', function (Blueprint $table) {
            $table->id();
            $table->string('numero_memorando');
            $table->string('setor_origem');
            $table->string('remetente');
            $table->string('setor_destino');
            $table->string('destinatario');
            $table->string('assunto');
            $table->text('texto');
            $table->string('criado_por');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('memorandos');
    }
};
