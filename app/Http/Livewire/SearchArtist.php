<?php

namespace App\Http\Livewire;

use App\Models\Artist;
use Livewire\Component;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;

class SearchArtist extends Component
{

    public $buscar;
    public $artistas;
    public $artist_id;
    public $picked;


    public function mount() {
        $this->buscar = '';
        $this->artistas = [];
        $this->picked = true;
        $this->artist_id = '';

    }


    public function asignarPrimero() {
       $artistas = Artist::where('name', 'like', $this->buscar . '%')->first();
       if($artistas)
       {
            $this->buscar = $artistas->name;
            $this->artist_id = $artistas->id;

            $this->picked = true;
       }
       else
       {
            $this->buscar = '';
            $this->picked = false;
       }
    }
    public function updatedBuscar() {

        $this->picked = false;

        $this->artistas = Artist::where('name', 'like', $this->buscar . '%')
                            ->take(5)
                            ->get();
    }

    public function asignarUsuario($id, $nombre){
        $this->buscar = $nombre;
        $this->artist_id = $id;
        $this->picked = true;
    }

    

    public function render()
    {
        return view('livewire.search-artist');
    }
}
