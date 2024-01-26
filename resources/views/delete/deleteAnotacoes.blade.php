@foreach ($anotacoes as $content =>$index)
@if(request()->query("id_materia") == $index["id_materia"])
<form action="{{route("delete.deleteAnotacoes",["id_anotacoes"=>$index["id_anotacoes"]])}}" method="post">
    @csrf
    {{$index["titulo_anotacoes"]}}
    @method("DELETE")
    <button type="submit">Excluir</button>
</form>
@endif
@endforeach