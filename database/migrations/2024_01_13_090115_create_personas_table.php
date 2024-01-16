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
        Schema::create('personas', function (Blueprint $table) {
            $table->id('idpersona');
            $table->unsignedBigInteger('idusuario')->nullable();
            $table->string('nombreDeUsuario')->nullable(); 
            $table->string('primernombre')->nullable();
            $table->string('segundonombre')->nullable();
            $table->string('primerapellido')->nullable();
            $table->string('segundoapellido')->nullable();
            $table->string('email')->nullable();
            $table->timestamps();
    
            $table->foreign('idpersona')->references('id')->on('users')->nullable();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
