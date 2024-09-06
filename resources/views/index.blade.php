<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>
</head>

<body>
    <h1>Create Post</h1>
  
    <form action="{{ route('auth') }}" method="POST">
        @csrf
        <input type="email" name="email" placeholder="Login">
        <input type="password" name="password" placeholder="Senha">
        <input type="submit">
        <a href="{{ route('cadastro.cadastrar') }}" title="Cadastre-se">Cadastre-se</a>
    </form>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</body>

</html>
