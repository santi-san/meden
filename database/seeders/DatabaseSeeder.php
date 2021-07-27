<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('img');
        Storage::makeDirectory('img');

        $this->call(ArtistSeeder::class);
        $this->call(LabelSeeder::class);
        Genre::factory(10)->create();
        $this->call(AlbumSeeder::class);

    }
}
