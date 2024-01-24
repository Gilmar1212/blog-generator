<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastre sua anotação</title>
</head>
<body>
    <form action="{{route("cadastro.materia")}}" method="post">
        @csrf
        <input type="text" name="materia" placeholder="Escreva o nome da matéria">
        <input type="submit" value="Cadastrar">
    </form><br>
    <form action="{{route("cadastro.anotacoes")}}" method="post">        
        @csrf
        <input type="text" name="titulo" placeholder="Titulo"><br><br>
        <input type="hidden" name="id_materia" value="{{request("id_materia")}}"><br><br>
        <textarea type="text" name="anotacao" cols="30" rows="10" placeholder="Anotação"></textarea><br>
        <input type="submit" value="Enviar">
    </form>     
    {{-- @isset($anotacoes)
    @foreach($anotacoes as $key)
        {{$key}}
    @endforeach
    @endisset --}}
</body>
</html>