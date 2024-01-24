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
    @isset($materia)    
        @foreach ($materia as $content)
            @if ($data == $content['id_user'])
                <div class="materia-container">
                    <div class="materia-container__content">
                        <a href="{{route("cadastro.anotacoes",["id_materia"=>$content["id_materia"]])}}" title="{{ $content['materia'] }}">
                            <h2>Materia: {{ $content['materia'] }}</h2>   
                        </a>
                            @isset($anotacoes)
                            @foreach($anotacoes as $anotacao_key)
                                @if($content["id_materia"] == $anotacao_key["id_materia"])
                                Anotação: {{$anotacao_key["titulo_anotacoes"]}}<br>
                                @endif
                            @endforeach
                            @endisset                     
                        <a href="{{route("delete.deleteAnotacoes")}}">       
                            Delete a sua materia                     
                        </a>
                    </div>
                </div>
            @endif
        @endforeach
    @endisset
</body>

</html>
