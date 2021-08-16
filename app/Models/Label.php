<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'country', 'foundation', 'description'];

    // Relacion uno a muchos
    public function albums() {
        return $this->hasMany(Album::class);
    }

    // Relacion uno a uno polimorfica
    public function image() {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function getRouteKeyName() {
        return 'slug';
    }
}
