@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Edit Pokemon</h1>
    <form action="{{ route('pokemon.update', $pokemon) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card shadow">
            <div class="card-body">
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
                        <option value="">Select Type</option>
                        <option value="Grass" {{ $pokemon->primary_type == 'Grass' ? 'selected' : '' }}>Grass</option>
                        <option value="Fire" {{ $pokemon->primary_type == 'Fire' ? 'selected' : '' }}>Fire</option>
                        <option value="Water" {{ $pokemon->primary_type == 'Water' ? 'selected' : '' }}>Water</option>
                        <option value="Bug" {{ $pokemon->primary_type == 'Bug' ? 'selected' : '' }}>Bug</option>
                        <option value="Normal" {{ $pokemon->primary_type == 'Normal' ? 'selected' : '' }}>Normal</option>
                        <option value="Poison" {{ $pokemon->primary_type == 'Poison' ? 'selected' : '' }}>Poison</option>
                        <option value="Electric" {{ $pokemon->primary_type == 'Electric' ? 'selected' : '' }}>Electric</option>
                        <option value="Ground" {{ $pokemon->primary_type == 'Ground' ? 'selected' : '' }}>Ground</option>
                        <option value="Fairy" {{ $pokemon->primary_type == 'Fairy' ? 'selected' : '' }}>Fairy</option>
                        <option value="Fighting" {{ $pokemon->primary_type == 'Fighting' ? 'selected' : '' }}>Fighting</option>
                        <option value="Psychic" {{ $pokemon->primary_type == 'Psychic' ? 'selected' : '' }}>Psychic</option>
                        <option value="Rock" {{ $pokemon->primary_type == 'Rock' ? 'selected' : '' }}>Rock</option>
                        <option value="Ghost" {{ $pokemon->primary_type == 'Ghost' ? 'selected' : '' }}>Ghost</option>
                        <option value="Ice" {{ $pokemon->primary_type == 'Ice' ? 'selected' : '' }}>Ice</option>
                        <option value="Dragon" {{ $pokemon->primary_type == 'Dragon' ? 'selected' : '' }}>Dragon</option>
                        <option value="Dark" {{ $pokemon->primary_type == 'Dark' ? 'selected' : '' }}>Dark</option>
                        <option value="Steel" {{ $pokemon->primary_type == 'Steel' ? 'selected' : '' }}>Steel</option>
                        <option value="Flying" {{ $pokemon->primary_type == 'Flying' ? 'selected' : '' }}>Flying</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="weight" class="form-label">Weight (kg)</label>
                    <input type="number" class="form-control" id="weight" name="weight" value="{{ $pokemon->weight }}" step="0.01" min="0">
                </div>
                <div class="mb-3">
                    <label for="height" class="form-label">Height (m)</label>
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
                <div class="mb-3">
                    <label class="form-label">Is Legendary?</label>
                    <div>
                        <input type="checkbox" name="is_legendary" id="is_legendary" value="1" {{ $pokemon->is_legendary ? 'checked' : '' }}>
                        <label for="is_legendary" class="form-check-label">Yes</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="photo" class="form-label">Photo</label>
                    <input type="file" class="form-control" id="photo" name="photo">
                </div>
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">Update Pokemon</button>
                    <a href="{{ route('pokemon.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
