@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $pokemon->name }}</h1>
    <p><strong>Species:</strong> {{ $pokemon->species }}</p>
    <p><strong>Primary Type:</strong> {{ $pokemon->primary_type }}</p>
    <p><strong>Weight:</strong> {{ $pokemon->weight }} kg</p>
    <p><strong>Height:</strong> {{ $pokemon->height }} m</p>
    <p><strong>HP:</strong> {{ $pokemon->hp }}</p>
    <p><strong>Attack:</strong> {{ $pokemon->attack }}</p>
    <p><strong>Defense:</strong> {{ $pokemon->defense }}</p>
    <p><strong>Legendary:</strong> {{ $pokemon->is_legendary ? 'Yes' : 'No' }}</p>
    @if ($pokemon->photo)
        <img src="{{ asset('storage/' . $pokemon->photo) }}" alt="{{ $pokemon->name }}" class="img-fluid">
    @endif
    <a href="{{ route('pokemon.index') }}" class="btn btn-secondary">Back to List</a>
    <a href="{{ route('pokemon.edit', $pokemon) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('pokemon.destroy', $pokemon) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</div>
@endsection
