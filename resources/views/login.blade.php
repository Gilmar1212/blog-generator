<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    
    @isset($user)
    bem vindo: {{$user}}
    @endisset
    <a href="{{route("cadastro.anotacoes")}}" title="Cadastre-se">Cadastre sua anotação</a> 
    <h2>Suas anotações</h2>
    @isset($anotacoes)
    @foreach ($anotacoes as $content)
    @if ($data == $content["id_materia"])     
    <p>{{$content["anotacoes"]}}</p>
   @endif
   @endforeach
    @endisset    
</body>

</html>
