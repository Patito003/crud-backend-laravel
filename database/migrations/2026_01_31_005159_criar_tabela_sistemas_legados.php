<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sistemas_legados', function (Blueprint $tabela) {
            $tabela->id();
            $tabela->string('nome');
            $tabela->text('descricao')->nullable();
            $tabela->string('linguagem');
            $tabela->enum('status', ['ativo', 'em_manutencao', 'descontinuado']);
            $tabela->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sistemas_legados');
    }
};
