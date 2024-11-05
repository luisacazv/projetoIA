<!-- resources/views/teachers/edit.blade.php -->
<h1>Editar Professor</h1>
<form action="{{ route('teachers.update', $teacher->id) }}" method="POST">
    @csrf
    @method('PUT')
    @include('teachers._form')
    <button type="submit">Atualizar</button>
</form>
