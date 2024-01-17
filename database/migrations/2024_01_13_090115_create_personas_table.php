<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
            Schema::create('personas', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('idusuario')->nullable();
                $table->string('nombreDeUsuario')->nullable();
                $table->string('primernombre')->nullable();
                $table->string('segundonombre')->nullable();
                $table->string('primerapellido')->nullable();
                $table->string('segundoapellido')->nullable();
                $table->string('email')->nullable();
                $table->string('habilitado')->default('si');
                $table->timestamps();
                
                $table->foreign('idusuario')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

                          
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
