<!-- resources/views/teachers/create.blade.php -->
<h1>Adicionar Novo Professor</h1>
<form action="{{ route('teachers.store') }}" method="POST">
    @csrf
    @include('teachers._form')
    <button type="submit">Salvar</button>
</form>
