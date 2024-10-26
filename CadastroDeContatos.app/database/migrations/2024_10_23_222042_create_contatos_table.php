<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contatos', function (Blueprint $table) {
            $table->id();
            $table->string('numero');
            $table->string('telefone');
            $table->string('endereco');
            $table->string('complemento');
            $table->string('cep');
            $table->string('estado');
            $table->unsignedBigInteger('user_cont_id')->nullable();

            $table->timestamps();

            $table->foreign('user_cont_id')->references('id')->on('user_contatos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contatos');
    }
}
