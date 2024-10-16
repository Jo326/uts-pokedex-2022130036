@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Add Pokemon</h1>
    <form action="{{ route('pokemon.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card shadow">
            <div class="card-body">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="species" class="form-label">Species</label>
                    <input type="text" class="form-control" id="species" name="species" required>
                </div>
                <div class="mb-3">
                    <label for="primary_type" class="form-label">Primary Type</label>
                    <select class="form-select" id="primary_type" name="primary_type" required>
                        <option value="">Select Type</option>
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
                    <label for="weight" class="form-label">Weight (kg)</label>
                    <input type="number" class="form-control" id="weight" name="weight" step="0.01" min="0">
                </div>
                <div class="mb-3">
                    <label for="height" class="form-label">Height (m)</label>
                    <input type="number" class="form-control" id="height" name="height" step="0.01" min="0">
                </div>
                <div class="mb-3">
                    <label for="hp" class="form-label">HP</label>
                    <input type="number" class="form-control" id="hp" name="hp" min="0">
                </div>
                <div class="mb-3">
                    <label for="attack" class="form-label">Attack</label>
                    <input type="number" class="form-control" id="attack" name="attack" min="0">
                </div>
                <div class="mb-3">
                    <label for="defense" class="form-label">Defense</label>
                    <input type="number" class="form-control" id="defense" name="defense" min="0">
                </div>
                <div class="mb-3">
                    <label class="form-label">Is Legendary?</label>
                    <div>
                        <input type="checkbox" name="is_legendary" id="is_legendary" value="1">
                        <label for="is_legendary" class="form-check-label">Yes</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="photo" class="form-label">Photo</label>
                    <input type="file" class="form-control" id="photo" name="photo">
                </div>
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">Add Pokemon</button>
                    <a href="{{ route('pokemon.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
