@foreach ($anotacoes as $content => $index)
    @if (request()->query('id_materia') == $index['id_materia'])
        <form action="{{ route('delete.deleteAnotacoes') }}" method="post">
            @csrf
            {{ $index['titulo_anotacoes'] }}
            @method('DELETE')
            <input type="hidden" name="id_anotacoes" value="{{ $index['id_anotacoes'] }}">
            <button type="submit">Excluir</button>
        </form>       
    @endif
@endforeach
@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
