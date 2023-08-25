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
        Schema::create('tbl_anotacoes', function (Blueprint $table) {
            $table->id("id_anotacoes")->primary();
            $table->string("materia");
            $table->string("anotacoes");
            $table->string("assunto_anotacoes");
            $table->integer("id_materia");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_anotacoes');
    }
};                                              
                   