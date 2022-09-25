<?php

namespace App\Http\Controllers;

use App\Models\Cidade;
use Illuminate\Http\Request;

class CidadesController
{
    public function index()
    {
        $cidades = Cidade::all();

        return view('cidades.index')->with('cidades',$cidades);
    }

    public function create()
    {
        return view('cidades.create ');

    }

    public function store(Request $request)
    {
        Cidade::create($request->all());
        return redirect('/cidades');
    }
}