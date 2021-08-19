<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

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
        return view('album.create', compact( 'album'));
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
            'file.max' => 'La imagen no puede estar vacia.',
            'file.required' => 'The image is required.',
            'file.image' => 'The image must be a valid format of image.',
        ]
        );
    }

    public function show(Album $album)
    {
        return view('album.show', compact('album'));
    }

    public function edit(Album $album)
    {
        //
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
