<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>
</head>

<body>
    <form action="{{route("login.user-area")}}" method="post">
        @csrf
        <input type="email" name="email" placeholder="Login" required>
        <input type="password" name="password" placeholder="Senha" required>
        <input type="submit">
        <a href="{{route("cadastro.cadastrar")}}" title="Cadastre-se">Cadastre-se</a>        
    </form>
</body>

</html>
