<!-- resources/views/disciplines/edit.blade.php -->
<h1>Editar Disciplina</h1>
<form action="{{ route('disciplines.update', $discipline->id) }}" method="POST">
    @csrf
    @method('PUT')
    @include('disciplines._form')
    <button type="submit">Atualizar</button>
</form>
