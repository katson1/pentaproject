<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Bairro </title>
</head>
<body>
<h1>Bairro</h1>
<a href="/bairros/criar">Adicionar bairro</a>
<ul>
    @foreach ($bairros as $bairro)
        <li>{{$bairro->nome}}</li>
    @endforeach
</ul>
</body>
</html>

