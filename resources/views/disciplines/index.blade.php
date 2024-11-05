<!-- resources/views/disciplines/index.blade.php -->
<h1>Lista de Disciplinas</h1>
<a href="{{ route('disciplines.create') }}">Adicionar Nova Disciplina</a>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Ações</th>
    </tr>
    @foreach($disciplines as $discipline)
        <tr>
            <td>{{ $discipline->id }}</td>
            <td>{{ $discipline->name }}</td>
            <td>{{ $discipline->description }}</td>
            <td>
                <a href="{{ route('disciplines.edit', $discipline->id) }}">Editar</a>
                <form action="{{ route('disciplines.destroy', $discipline->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Excluir</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
