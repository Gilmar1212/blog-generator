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
        if(!Schema::hasTable("tbl_materia")){
        Schema::create("tbl_materia",function (Blueprint $table){
            $table->id("id_materia")->primary();
            $table->string("materia");
            $table->integer("id_user");
        });

    }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_materia');
    }
};
