<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Cidades </title>
</head>
<body>
<h1>Cidade</h1>
<a href="/cidades/criar">Adicionar cidade</a>
<ul>
    @foreach ($cidades as $cidade)
        <li>{{$cidade->nome}}</li>
    @endforeach
</ul>
</body>
</html>

