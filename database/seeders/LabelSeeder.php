<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Label;
use Illuminate\Database\Seeder;

class LabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $labels = Label::factory(35)->create();

        foreach ($labels as $label) {
            Image::factory(1)->create([
                'imageable_id' => $label->id,
                'imageable_type' => Label::class,
            ]);
        }
    }
}
