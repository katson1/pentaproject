<?php

namespace App\Http\Controllers;

use App\Models\Cidade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SistemaController
{
    public function index()
    {
        return view('sistema');
    }

    public function listar(Request $request)
    {
        $lista = DB::table('cidades')
            ->leftjoin('bairros', 'bairros.cidade_id', '=', 'cidades.id')
            ->select('cidades.nome as cidade_nome','bairros.nome as bairros_nome','cidades.fundacao');

        if(!isset($request->nome_cidade) and !isset($request->nome_bairro) and
            !isset($request->data_inicial) and !isset($request->data_final)){
            $lista = DB::table('cidades')
                ->leftjoin('bairros', 'bairros.cidade_id', '=', 'cidades.id')
                ->select('cidades.nome as cidade_nome','bairros.nome as bairros_nome','cidades.fundacao');
        } else{
            if(isset($request->nome_cidade)) {
                $lista = $lista
                    ->where('cidade_nome', 'like', $request->nome_cidade);
            }
            if(isset($request->nome_bairro)) {
                $lista = $lista
                    ->where('bairros_nome', 'like', $request->nome_bairro);
            }
            if(isset($request->data_inicial) and isset($request->data_final)) {
                $lista = $lista
                    ->whereBetween('fundacao', [$request->data_inicial, $request->data_final]);
            }
        }

        return view('listar')->with('results',$lista->get());
    }

    public function store(Request $request)
    {
    }
}