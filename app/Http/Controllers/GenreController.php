<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{

    public function index()
    {
        $genres = Genre::latest('id')->get();

        return view('genre.index', compact('genres'));
    }


    public function create()
    {
        $genre = new Genre();

        return view('genre.create', compact('genre'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2|max:255',
            'slug' => 'required|unique:artists,slug',
            ],
            [
            'name.required' => 'The name is required.',
            'name.min' => 'The name must be at least 2 characters.',
            'name.max' => 'The name must not be longer than 255 characters.',
            'slug.required' => 'The slug is required.',
            'slug.unique' => 'The slug name is already in use, try adding a number at the end of the name.',
            ]
        );

        Genre::create($request->all());

        return redirect()->route('genre.index')->with(['mensaje'=>'Genre ' . $request->name . ': Added correctly.']);
    }


    public function show(Genre $genre)
    {
        return view('genre.show', compact('genre'));
    }


    public function edit(Genre $genre)
    {
        return view('genre.edit', compact('genre'));
    }


    public function update(Request $request, Genre $genre)
    {
        $request->validate([
            'name' => 'required|min:2|max:255',
            'slug' => 'required|unique:genres,slug,' . $genre->id,
            ],
            [
            'name.required' => 'The name is required.',
            'name.min' => 'The name must be at least 2 characters.',
            'name.max' => 'The name must not be longer than 255 characters.',
            'slug.required' => 'The slug is required.',
            'slug.unique' => 'The slug name is already in use, try adding a number at the end of the name.',
            ]
        );

        $genre->update($request->all());

        return redirect()->route('label.index')->with(['mensaje'=>'Genre ' . $request->name . ' updated successfully.']);

    }

    public function destroy(Genre $genre)
    {
        $genre->delete();
        return redirect()->route('genre.index')->with(['mensaje'=>'genre  ' . $genre->name . ' deleted successfully.']);
    }
}
