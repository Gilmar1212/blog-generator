<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>

<body>
    @isset($user)
        bem vindo: {{ $user }}
    @endisset
    <a href="{{route("cadastro.anotacoes")}}" title="Cadastre sua matéria">
        Cadastre aqui sua anotação
    </a>
    @isset($materia)    
        @foreach ($materia as $content)
            @if ($data == $content['id_user'])
                <div class="materia-container">
                    <div class="materia-container__content">
                        <h2>Materia: {{ $content['materia'] }}</h2>                        
                        <a href="{{route("delete.deleteAnotacoes")}}">       
                            Delete a sua postagem                     
                        </a>
                    </div>
                </div>
            @endif
        @endforeach
    @endisset
</body>

</html>
