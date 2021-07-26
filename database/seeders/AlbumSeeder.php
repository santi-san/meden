<?php

namespace Database\Seeders;

use App\Models\Album;
use App\Models\Image;
use Illuminate\Database\Seeder;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $albums = Album::factory(55)->create();

        foreach ($albums as $album) {
            Image::factory(1)->create([
                'imageable_id' => $album->id,
                'imageable_type' => Album::class,
            ]);
            $album->genres()->attach([
                rand(1 ,4),
                rand(5, 8)
            ]);
        }
    }
}
