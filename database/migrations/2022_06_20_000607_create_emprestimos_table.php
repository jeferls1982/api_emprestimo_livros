<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmprestimosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emprestimos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('livroId'); 
            $table->foreign('livroId')->references('id')->on('livros')->onDelete('cascade');

            $table->unsignedBigInteger('leitorId'); 
            $table->foreign('leitorId')->references('id')->on('leitores')->onDelete('cascade');

            $table->string('data_retirada')->nullable();
            $table->string('data_devolucao')->nullable();

            $table->string('status')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emprestimos');
    }
}
