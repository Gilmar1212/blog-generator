<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastre sua anotação</title>
</head>
<body>
    <form action="{{route("cadastro.store")}}" method="get">        
        @csrf
        <input type="text" name="titulo" placeholder="Titulo">
        <input type="hidden" name="id_materia" value="{{request("id")}}" required><br><br>
        <textarea type="text" name="anotacao" cols="30" rows="10" placeholder="Anotação" required></textarea><br>
        <input type="submit" value="Enviar">
    </form>     
    {{-- @isset($anotacoes)
    @foreach($anotacoes as $key)
        {{$key}}
    @endforeach
    @endisset --}}
</body>
</html>