<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
</head>
<body>
    <form method="POST" action="{{route("cadastro.cadastrar")}}">
        @csrf
        <input type="text" name="name" placeholder="Seu nome" required>
        <input type="text" name="email" placeholder="Insira seu usuário ou email" required>
        <input type="password" name="password" placeholder="insira sua senha" required>
        <input type="submit" value="Cadastrar">
        {{-- {{$cadastro}} --}}
    </form>
</body>
</html>