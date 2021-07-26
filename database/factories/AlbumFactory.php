<?php

namespace Database\Factories;

use App\Models\Album;
use App\Models\Artist;
use App\Models\Label;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AlbumFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Album::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->sentence(3);
        return [
            'name'=> $name,
            'slug'=> Str::slug($name),
            'catalog'=> $this->faker->bothify('??#?##?#'),
            'released_at'=> $this->faker->date(),
            'format'=> $this->faker->randomElement(['album', 'ep', 'single']),
            'tracklist'=> $this->faker->text(100),
            'artist_id' => Artist::all()->random()->id,
            'label_id' => Label::all()->random()->id,
        ];
    }
}
