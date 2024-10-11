@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Pokemon</h1>
    <form action="{{ route('pokemon.update', $pokemon) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $pokemon->name }}" required>
        </div>
        <div class="mb-3">
            <label for="species" class="form-label">Species</label>
            <input type="text" class="form-control" id="species" name="species" value="{{ $pokemon->species }}" required>
        </div>
        <div class="mb-3">
            <label for="primary_type" class="form-label">Primary Type</label>
            <select class="form-select" id="primary_type" name="primary_type" required>
                <option value="{{ $pokemon->primary_type }}">{{ $pokemon->primary_type }}</option>
                <option value="Grass">Grass</option>
                <option value="Fire">Fire</option>
                <option value="Water">Water</option>
                <option value="Bug">Bug</option>
                <option value="Normal">Normal</option>
                <option value="Poison">Poison</option>
                <option value="Electric">Electric</option>
                <option value="Ground">Ground</option>
                <option value="Fairy">Fairy</option>
                <option value="Fighting">Fighting</option>
                <option value="Psychic">Psychic</option>
                <option value="Rock">Rock</option>
                <option value="Ghost">Ghost</option>
                <option value="Ice">Ice</option>
                <option value="Dragon">Dragon</option>
                <option value="Dark">Dark</option>
                <option value="Steel">Steel</option>
                <option value="Flying">Flying</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="weight" class="form-label">Weight</label>
            <input type="number" class="form-control" id="weight" name="weight" value="{{ $pokemon->weight }}" step="0.01" min="0">
        </div>
        <div class="mb-3">
            <label for="height" class="form-label">Height</label>
            <input type="number" class="form-control" id="height" name="height" value="{{ $pokemon->height }}" step="0.01" min="0">
        </div>
        <div class="mb-3">
            <label for="hp" class="form-label">HP</label>
            <input type="number" class="form-control" id="hp" name="hp" value="{{ $pokemon->hp }}" min="0">
        </div>
        <div class="mb-3">
            <label for="attack" class="form-label">Attack</label>
            <input type="number" class="form-control" id="attack" name="attack" value="{{ $pokemon->attack }}" min="0">
        </div>
        <div class="mb-3">
            <label for="defense" class="form-label">Defense</label>
            <input type="number" class="form-control" id="defense" name="defense" value="{{ $pokemon->defense }}" min="0">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="is_legendary" name="is_legendary" {{ $pokemon->is_legendary ? 'checked' : '' }}>
            <label class="form-check-label" for="is_legendary">Is Legendary?</label>
        </div>
        <div class="mb-3">
            <label for="photo" class="form-label">Photo</label>
            <input type="file" class="form-control" id="photo" name="photo">
        </div>
        <button type="submit" class="btn btn-primary">Update Pokemon</button>
    </form>
</div>
@endsection