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
<form method="post">
    {!! csrf_field() !!}
    <div>
        <label for="email"> Email: </label>
        <input type="email" id="email" name="email">
        <label for="name"> Nome: </label>
        <input type="name" id="nome" name="name">
        <label for="senha"> senha: </label>
        <input type="password" id="password" name="password">
        <button type="submit">Cadastrar</button>
    </div>

</form>
</body>
</html>