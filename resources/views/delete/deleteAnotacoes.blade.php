@foreach ($anotacoes as $content =>$index)
<form action="{{route("delete.deleteAnotacoes",["id_materia"=>$index["id_materia"]])}}" method="post">
    @csrf
    {{$index["titulo_anotacoes"]}}
    @method("DELETE")
    <button type="submit">Excluir</button>
</form>
@endforeach
