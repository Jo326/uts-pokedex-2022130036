<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index()
    {
        $pokemons = Pokemon::paginate(20);
        return view('pokemon.index', compact('pokemons'));
    }

    public function create()
    {
        return view('pokemon.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'species' => 'required|string|max:100',
            'primary_type' => 'required|string|in:Grass,Fire,Water,Bug,Normal,Poison,Electric,Ground,Fairy,Fighting,Psychic,Rock,Ghost,Ice,Dragon,Dark,Steel,Flying',
            'weight' => 'nullable|numeric|max:99999999|min:0',
            'height' => 'nullable|numeric|max:99999999|min:0',
            'hp' => 'nullable|integer|max:9999|min:0',
            'attack' => 'nullable|integer|max:9999|min:0',
            'defense' => 'nullable|integer|max:9999|min:0',
            'photo' => 'nullable|image|max:2048|mimes:jpeg,jpg,png,gif,svg',
        ]);


        $data = $request->except(['photo']);
        $data['is_legendary'] = $request->has('is_legendary') ? 1 : 0;


        Pokemon::create($data);

        return redirect()->route('pokemon.index')->with('success', 'Pokemon created successfully.');
    }

    public function show(Pokemon $pokemon)
    {
        return view('pokemon.show', compact('pokemon'));
    }

    public function edit(Pokemon $pokemon)
    {
        return view('pokemon.edit', compact('pokemon'));
    }

    public function update(Request $request, Pokemon $pokemon)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'species' => 'required|string|max:100',
            'primary_type' => 'required|string|in:Grass,Fire,Water,Bug,Normal,Poison,Electric,Ground,Fairy,Fighting,Psychic,Rock,Ghost,Ice,Dragon,Dark,Steel,Flying',
            'weight' => 'nullable|numeric|max:99999999|min:0',
            'height' => 'nullable|numeric|max:99999999|min:0',
            'hp' => 'nullable|integer|max:9999|min:0',
            'attack' => 'nullable|integer|max:9999|min:0',
            'defense' => 'nullable|integer|max:9999|min:0',
            'photo' => 'nullable|image|max:2048|mimes:jpeg,jpg,png,gif,svg',
        ]);


        $data = $request->except(['photo']);
        $data['is_legendary'] = $request->has('is_legendary') ? 1 : 0;

        $pokemon->fill($data);

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('public/photos');
            $pokemon->photo = str_replace('public/', '', $path);
        }

        $pokemon->save();

        return redirect()->route('pokemon.index')->with('success', 'Pokemon updated successfully.');
    }

    public function destroy(Pokemon $pokemon)
    {
        $pokemon->delete();
        return redirect()->route('pokemon.index')->with('success', 'Pokemon deleted successfully.');
    }
}
