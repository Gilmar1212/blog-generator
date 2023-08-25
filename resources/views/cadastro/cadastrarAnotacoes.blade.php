<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastre suas anotações</title>
</head>
<body>
    
    <form action="{{route("cadastro.anotacoes")}}" method="post">        
        @csrf
        <textarea type="text" name="anotacao" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>