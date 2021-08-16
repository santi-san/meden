<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArtistController extends Controller
{

    public function index()
    {
        $artists = Artist::latest('id')->get();

        return view('artist.index', compact('artists'));
    }

    public function create()
    {
        $artist = new Artist();
        $countries = Country::all();
        return view('artist.create', compact('countries', 'artist'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2|max:255',
            'slug' => 'required|unique:artists,slug',
            'members' => 'required',
            'country' => 'required',
            'foundation' => 'required',
            'description' => 'required|min:2|',
            'file' => 'required|image',
            ],
            [
            'name.required' => 'The name is required.',
            'name.min' => 'The name must be at least 2 characters.',
            'name.max' => 'The name must not be longer than 255 characters.',
            'slug.required' => 'The slug is required.',
            'slug.unique' => 'The slug name is already in use, try adding a number at the end of the name.',
            'members.required' => 'The members is required.',
            'country.required' => 'The country is required.',
            'foundation.required' => 'The year of foundation is required',
            'description.required' => 'The description is required.',
            'description.min' => 'The description must be at least 10 characters.',
            'file.max' => 'La imagen no puede estar vacia.',
            'file.required' => 'The image is required.',
            'file.image' => 'The image must be a valid format of image.',
            ]
        );

        $artist = Artist::create($request->all());
        if ($request->file('file')) {
            $url = Storage::put('public/img', $request->file('file'));

            $artist->image()->create([
                'url' => $url
            ]);
        }
        return redirect()->route('artist.index')->with(['mensaje'=>'Artist ' . $request->name . ': Added correctly.']);
    }


    public function show(Artist $artist)
    {
        return view('artist.show', compact('artist'));
    }


    public function edit(Artist $artist)
    {
        $countries = Country::all();

        return view('artist.edit', compact('artist', 'countries'));
    }

    public function update(Request $request, Artist $artist)
    {

        $request->validate([
            'name' => 'required|min:2|max:255',
            'slug' => 'required|unique:artists,slug,' . $artist->id,
            'members' => 'required',
            'country' => 'required',
            'foundation' => 'required',
            'description' => 'required|min:2|',
            'file' => 'image',
            ],
            [
            'name.required' => 'The name is required.',
            'name.min' => 'The name must be at least 2 characters.',
            'name.max' => 'The product must not be longer than 255 characters.',
            'slug.required' => 'The slug is required.',
            'slug.unique' => 'The slug name is already in use, try adding a number at the end of the name.',
            'members.required' => 'The members is required.',
            'country.required' => 'The country is required.',
            'foundation.required' => 'The year of foundation is required',
            'description.required' => 'The description is required.',
            'description.min' => 'The description must be at least 10 characters.',
            'file.max' => 'La imagen no puede estar vacia.',
            'file.required' => 'The image is required.',
            'file.image' => 'The image must be a valid format of image.',
            ]
        );

        $artist->update($request->all());

        if ($request->file('file')) {
            $url = Storage::put('public/img', $request->file('file'));

            if ($artist->image) {
                Storage::delete($artist->image->url);

                $artist->image->update([
                    'url' => $url
                ]);
            }
            else {
                $artist->image->create([
                    'url' => $url
                ]);
            }
        }

        return redirect()->route('artist.index')->with(['mensaje'=>'Artist ' . $request->name . ': Updated successfully.']);
    }

    public function destroy(Artist $artist)
    {
        $artist->delete();

        return redirect()->route('artist.index')->with(['mensaje'=>'Artist ' . $artist->name . ': Deleted successfully.']);;
    }
}
