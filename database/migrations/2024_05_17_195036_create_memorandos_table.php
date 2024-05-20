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
            $table->integer('numero_memorando');
            $table->string('setor_origem')->nullable();
            $table->string('remetente')->nullable();
            $table->string('setor_destino')->nullable();
            $table->string('destinatario')->nullable();
            $table->string('assunto')->nullable();
            $table->text('texto')->nullable();
            $table->integer('id_criador');
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
