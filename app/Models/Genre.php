<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    // Relacion muchos a muchos
    public function albums() {
        return $this->belongsToMany(Album::class);
    }

}
