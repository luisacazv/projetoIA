<!-- resources/views/disciplines/create.blade.php -->
<h1>Adicionar Nova Disciplina</h1>
<form action="{{ route('disciplines.store') }}" method="POST">
    @csrf
    @include('disciplines._form')
    <button type="submit">Salvar</button>
</form>
