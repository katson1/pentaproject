<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Listar </title>
    <style>
        html {
            font-family: sans-serif;
        }

        table {
            border-collapse: collapse;
            border: 2px solid rgb(200,200,200);
            letter-spacing: 1px;
            font-size: 0.8rem;
        }

        td, th {
            border: 1px solid rgb(190,190,190);
            padding: 10px 20px;
        }

        td {
            text-align: center;
        }

        caption {
            padding: 10px;
        }
    </style>
</head>
<body>
<h1>Cidades e Bairros</h1>
<form action="{{url('/listar')}}" method="get">
    {!! csrf_field() !!}
        <div style="padding-bottom: 10px">
        <label for="nome_cidade"> Nome da cidade: </label>
        <input type="text" id="nome_cidade" name="nome_cidade">
        <label for="nome"> Nome do bairro: </label>
        <input type="text" id="nome_bairro" name="nome_bairro">
        <label for="nome"> Data de fundacao entre: </label>
        <input type="date" id="data_inicial" name="data_inicial">
        <input type="date" id="data_final" name="data_final">
        <button type="submit">Adicionar</button>
    </div>
</form>
<table>
    @if(sizeof($results) > 0)
        <tr>
            <th>Cidade</th>
            <th>Bairro</th>
            <th>Data da fundacao da cidade</th>
        </tr>
        @foreach ($results as $result)
        <tr>
            <td>{{$result->cidade_nome}}</td>
            <td>{{$result->bairros_nome}}</td>
            <td>{{$result->fundacao}}</td>
        </tr>
        @endforeach
    @else
        <span>Nenhum registro encontrado!</span>
    @endif

</table>
</body>
</html>

