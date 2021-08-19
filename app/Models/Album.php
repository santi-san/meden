<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $fillable = ['name','slug','catalog','released_at','format','tracklist'];

    // Relacion uno a muchos inversa
    public function artist() {
        return $this->belongsTo(Artist::class);
    }

    public function label() {
        return $this->belongsTo(Label::class);
    }

    // Relacion muchos a muchos
    public function genres() {
        return $this->belongsToMany(Genre::class);
    }

    // Relacion uno a uno polimorfica
    public function image() {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function getRouteKeyName() {
        return 'slug';
    }
}
