<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Label;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LabelController extends Controller
{
    
    public function index()
    {
        $labels = Label::latest('id')->get();

        return view('label.index', compact('labels'));
    }

    
    public function create()
    {
        $label = new Label();
        $countries = Country::all();

        return view('label.create', compact('countries','label'));
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2|max:255',
            'slug' => 'required|unique:artists,slug',
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
            'country.required' => 'The country is required.',
            'foundation.required' => 'The year of foundation is required',
            'description.required' => 'The description is required.',
            'description.min' => 'The description must be at least 10 characters.',
            'file.required' => 'The image is required.',
            'file.image' => 'The image must be a valid format (ex: jpg, png).',
            ]
        );

        $label = Label::create($request->all());
        if ($request->file('file')) {
            $url = Storage::put('public/img', $request->file('file'));

            $label->image()->create([
                'url' => $url
            ]);
        }
        return redirect()->route('label.index')->with(['mensaje'=>'Label ' . $request->name . ': Added correctly.']);
    }

    
    public function show(Label $label)
    {
        return view('label.show', compact('artist'));
    }

    
    public function edit(Label $label)
    {
        $countries = Country::all();
        return view('label.edit', compact('label', 'countries'));
    }

    
    public function update(Request $request, Label $label)
    {
        $request->validate([
            'name' => 'required|min:2|max:255',
            'slug' => 'required|unique:artists,slug,' . $label->id,
            'country' => 'required',
            'foundation' => 'required',
            'description' => 'required|min:2|',
            'file' => 'image',
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
            'file.required' => 'The image is required.',
            'file.image' => 'The image must be a valid format of image.',
            ]
        );

        $label->update($request->all());

        if ($request->file('file')) {
            $url = Storage::put('public/img', $request->file('file'));

            if ($label->image) {
                Storage::delete($label->image->url);

                $label->image->update([
                    'url' => $url
                ]);
            }
            else {
                $label->image->create([
                    'url' => $url
                ]);
            }
        }
        return redirect()->route('label.index')->with(['mensaje'=>'Label ' . $request->name . ': Updated successfully.']);

    }

    
    public function destroy(Label $label)
    {
        $label->delete();
        Storage::delete($label->image->url);
        return redirect()->route('label.index')->with(['mensaje'=>'Label  ' . $label->name . ': Deleted successfully.']);;
    }
}
