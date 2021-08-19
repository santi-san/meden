<?php

namespace App\Http\Livewire;

use App\Models\Artist;
use Livewire\Component;

class SearchArtist extends Component
{

    public $buscar;
    public $artistas;
    public $picked;


    public function mount() {
        $this->buscar = '';
        $this->artistas = [];
        $this->picked = true;
    }

    public function updatedBuscar() {

        $this->picked = false;

        $this->artistas = Artist::where('name', 'like', $this->buscar . '%')
                            ->take(5)
                            ->get();
    }

    public function asignarUsuario($nombre){
        $this->buscar = $nombre;
        $this->picked = true;
    }

    public function asignarPrimero() {
       $artistas = Artist::where('name', 'like', $this->buscar . '%')->first();
       if($artistas)
       {
            $this->buscar = $artistas->name;
            $this->picked = true;
       }
       else
       {
            $this->buscar = '';
            $this->picked = false;
       }
    }

    public function render()
    {
        return view('livewire.search-artist');
    }
}
