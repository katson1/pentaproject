<?php

namespace App\Http\Controllers;

use App\Models\Cidade;
use App\Models\Bairro;
use Illuminate\Http\Request;

class BairrosController extends Controller
{
    public function index()
    {
        $bairros = Bairro::all();
        return view('bairros.index')->with('bairros',$bairros);
    }

    public function create()
    {
        $cidades = Cidade::all();
        return view('bairros.create ')->with('cidades',$cidades);
    }

    public function store(Request $request)
    {
        Bairro::create($request->all());
        return redirect('/bairros');
    }
}