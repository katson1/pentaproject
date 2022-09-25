<?php
//
//use Illuminate\Support\Facades\Schema;
//use Illuminate\Database\Schema\Blueprint;
//use Illuminate\Database\Migrations\Migration;
//
//class AdicionandoTabelasCidadeBairro extends Migration
//{
//    /**
//     * Run the migrations.
//     *
//     * @return void
//     */
//    public function up()
//    {
//        Schema::create('cidades', function (Blueprint $table){
//            $table->increments('id');
//            $table->string('nome',64);
//            $table->string('estado',2);
//            $table->date('fundacao');
//            $table->timestamps();
//        });
//
//        Schema::create('bairros', function (Blueprint $table){
//            $table->increments('id');
//            $table->string('nome',64);
//            $table->unsignedInteger('cidade_id');
//            $table->foreign('cidade_id')->references('rowid')->on('cidades');
//            $table->timestamps();
//        });
//    }
//
//    /**
//     * Reverse the migrations.
//     *
//     * @return void
//     */
//    public function down()
//    {
//        Schema::drop('bairros');
//        Schema::drop('cidades');
//    }
//}
//
