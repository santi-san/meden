<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Artist;
use App\Models\Genre;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $artists = Artist::latest()->take(6)->get();
        $albums = Album::latest()->take(6)->get();
        $genres = Genre::latest()->take(12)->get();


        return view('home.index', compact('artists', 'albums', 'genres'));
    }

    public function artist(){
        return view('home.artist');
    }

    public function album(){
        return view('home.album');
    }


}
