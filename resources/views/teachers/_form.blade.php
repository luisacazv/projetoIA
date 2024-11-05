<!-- resources/views/teachers/_form.blade.php -->
<div>
    <label for="name">Nome:</label>
    <input type="text" name="name" id="name" value="{{ old('name', $teacher->name ?? '') }}">
    @error('name')
        <p>{{ $message }}</p>
    @enderror
</div>

<div>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="{{ old('email', $teacher->email ?? '') }}">
    @error('email')
        <p>{{ $message }}</p>
    @enderror
</div>
