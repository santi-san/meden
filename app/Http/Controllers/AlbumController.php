<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Genre;
use App\Models\Label;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AlbumController extends Controller
{

    public function index()
    {
        $albums = Album::latest('id')->get();
        
        return view('album.index', compact('albums'));
    }

    public function create()
    {
        $album = new Album();
        $genres = Genre::orderBy('name')->get();
        $labels = Label::orderBy('name')->get();
        return view('album.create', compact( 'album', 'genres', 'labels'));
    }

    public function store(Request $request)
    {
       $request->validate([
            'name' => 'required|min:2|max:255',
            'slug' => 'required|unique:artists,slug',
            'catalog' => 'required',
            'released_at' => 'required',
            'format' => 'required',
            'tracklist' => 'required|min:2|',
            'artist_id' => 'required',
            'label_id' => 'required',
            'genre' => 'required',
            'file' => 'required|image',
        ],
        [
            'name.required' => 'The name is required.',
            'name.min' => 'The name must be at least 2 characters.',
            'name.max' => 'The name must not be longer than 255 characters.',
            'slug.required' => 'The slug is required.',
            'slug.unique' => 'The slug name is already in use, try adding a number at the end of the name.',
            'catalog.required' => 'The catalog is required.',
            'released_at.required' => 'The release date is required.',
            'format.required' => 'The format is required.',
            'tracklist.required' => 'The tracklist is required.',
            'tracklist.min' => 'The tracklist must be at least 10 characters.',
            'artist_id.required' => 'The artist is required.',
            'label_id.required' => 'The label is required.',
            'genre.required' => 'The genre is required.',
            'file.max' => 'La imagen no puede estar vacia.',
            'file.required' => 'The image is required.',
            'file.image' => 'The image must be a valid format of image.',
        ]
    );
        $album = Album::create($request->except('artist'));

        if ($request->file('file')) {
            $url = Storage::put('public/img', $request->file('file'));

            $album->image()->create([
                'url' => $url
            ]);
        }
       

        if($request->genre) {
            $album->genres()->attach($request->genre);
        }

        return redirect()->route('album.index')->with(['mensaje'=>'Album ' . $request->name . ': Added correctly.']);


    }

    public function show(Album $album)
    {
        return view('album.show', compact('album'));
    }

    public function edit(Album $album)
    {
        $labels = Label::orderBy('name')->get();
        $genres = Genre::orderBy('name')->get();

        return view('album.edit', compact('album', 'labels', 'genres'));
    }

    public function update(Request $request, Album $album)
    {
        //
    }

    public function destroy(Album $album)
    {
        //
    }
}
