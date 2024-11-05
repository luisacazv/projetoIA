<!-- resources/views/disciplines/_form.blade.php -->
<div>
    <label for="name">Nome:</label>
    <input type="text" name="name" id="name" value="{{ old('name', $discipline->name ?? '') }}">
    @error('name')
        <p>{{ $message }}</p>
    @enderror
</div>

<div>
    <label for="description">Descrição:</label>
    <textarea name="description" id="description">{{ old('description', $discipline->description ?? '') }}</textarea>
    @error('description')
        <p>{{ $message }}</p>
    @enderror
</div>
