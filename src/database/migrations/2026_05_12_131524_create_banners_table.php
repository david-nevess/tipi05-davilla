<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('titulo_banner', 200); // Título que aparece no slide
            $table->text('descricao_banner')->nullable(); // Texto menor de apoio
            $table->string('caminho_imagem'); // Nome/Caminho do arquivo da imagem
            $table->string('link_banner')->nullable(); // Caso queira clicar e ir para uma categoria
            $table->enum('status_banner', ['ATIVO', 'INATIVO'])->default('ATIVO');
            $table->integer('ordem_banner')->default(1); // Para decidir qual aparece primeiro
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banners');
    }

    
};
