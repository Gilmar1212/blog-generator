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
    <form action="{{route("cadastro.materia")}}" method="post">
        @csrf
        <input type="text" name="materia" placeholder="Escreva o nome da matéria">
        <input type="submit" value="Cadastrar">
    </form><br>
    <form action="{{route("cadastro.anotacoes")}}" method="post">        
        @csrf
        <input type="text" name="titulo" placeholder="Titulo"><br><br>
        <textarea type="text" name="anotacao" cols="30" rows="10" placeholder="Anotação"></textarea><br>
        <input type="submit" value="Enviar">
    </form>
    <a href="{{route("cadastro.anotacoes")}}" title="Cadastre-se">Cadastre sua anotação</a> 
    @isset($anotacoes)
    @foreach ($anotacoes as $content)
    @if ($data == $content["id_materia"])     
    <div class="materia-container">
        <div class="materia-container__content">
            <h2>Materia: {{$content["materia"]}}</h2>
            <h3>Titulo: {{$content["assunto_anotacoes"]}}</h3>
            <p>Anotação: {{$content["anotacoes"]}}</p><br>
        </div>
    </div>
   @endif
   @endforeach
    @endisset    
</body>

</html>
