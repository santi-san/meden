<?php

namespace Database\Seeders;

use App\Models\Artist;
use App\Models\Image;
use Illuminate\Database\Seeder;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $artists = Artist::factory(55)->create();

        foreach ($artists as $artist) {
            Image::factory(1)->create([
                'imageable_id' => $artist->id,
                'imageable_type' => Artist::class,
            ]);
        }
    }
}
