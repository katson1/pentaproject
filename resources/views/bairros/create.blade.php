<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Adicionar Bairro </title>
</head>
<body>
<h1>Adicionar Bairro</h1>
<form action="{{url('/bairros/salvar')}}" method="post">
    {!! csrf_field() !!}
    <div>
        <label for="nome"> Nome: </label>
        <input type="text" id="nome" name="nome">
        <label for="nome"> Cidade: </label>
        <select id="cidade_id" name="cidade_id">
            @foreach ($cidades as $cidade)
                <option value="{{$cidade->id}}">{{$cidade->nome}}</option>
            @endforeach
        </select>
        <button type="submit">Adicionar</button>
    </div>
</form>
</body>
</html>