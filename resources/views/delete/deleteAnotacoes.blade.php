<h2>Fuedase</h2>
@foreach ($materia as $content =>$index)
<form action="{{route("delete.deleteAnotacoes",["id_materia"=>$index["id_materia"]])}}" method="post">
    @csrf
    {{$index["materia"]}}
    @method("DELETE")
    <button type="submit">Excluir</button>
</form>
@endforeach