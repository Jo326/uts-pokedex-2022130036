@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">{{ $pokemon->name }}</h1>

    <div class="row">
        <div class="col-md-6">
            <div class="card p-3">
                <h5 class="card-title">Details</h5>
                <p><strong>Species:</strong> {{ $pokemon->species }}</p>
                <p><strong>Primary Type:</strong> {{ $pokemon->primary_type }}</p>
                <p><strong>Weight:</strong> {{ $pokemon->weight }} kg</p>
                <p><strong>Height:</strong> {{ $pokemon->height }} m</p>
                <p><strong>HP:</strong> {{ $pokemon->hp }}</p>
                <p><strong>Attack:</strong> {{ $pokemon->attack }}</p>
                <p><strong>Defense:</strong> {{ $pokemon->defense }}</p>
                <p><strong>Legendary:</strong> {{ $pokemon->is_legendary ? 'Yes' : 'No' }}</p>
            </div>
        </div>

        <div class="col-md-6 text-center">
            @if ($pokemon->photo)
            <img src="{{ Storage::url($pokemon->photo) ?? 'https://placehold.co/200' }}"
            class="img-thumbnail w-50">
            @else
                <img src="https://via.placeholder.com/300" alt="No image available" class="img-fluid mb-3 rounded">
            @endif
        </div>
    </div>

    <div class="mt-4 text-center">
        <a href="{{ route('pokemon.index') }}" class="btn btn-secondary">Back to List</a>
        <a href="{{ route('pokemon.edit', $pokemon) }}" class="btn btn-warning">Edit</a>
        <form action="{{ route('pokemon.destroy', $pokemon) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
</div>
@endsection
