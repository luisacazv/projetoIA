<!-- resources/views/teachers/index.blade.php -->
<h1>Lista de Professores</h1>
<a href="{{ route('teachers.create') }}">Adicionar Novo Professor</a>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>
    @foreach($teachers as $teacher)
        <tr>
            <td>{{ $teacher->id }}</td>
            <td>{{ $teacher->name }}</td>
            <td>{{ $teacher->email }}</td>
            <td>
                <a href="{{ route('teachers.edit', $teacher->id) }}">Editar</a>
                <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Excluir</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
