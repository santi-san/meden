<?php

namespace Database\Factories;

use App\Models\Artist;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ArtistFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Artist::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $name = $this->faker->sentence(3);
        return [
            'name' => $name,
            'slug' => Str::slug($name, '-'),
            'members' => $this->faker->words(3, true),
            'country' => $this->faker->country(),
            'foundation' => $this->faker->year(),
            'description' => $this->faker->paragraph(),
        ];
    }
}
