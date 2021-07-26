<?php

namespace Database\Factories;

use App\Models\Label;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class LabelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Label::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->company();
        return [
            'name'=> $name,
            'slug'=> Str::slug($name),
            'country'=> $this->faker->country(),
            'foundation'=> $this->faker->date(),
            'description'=> $this->faker->paragraph(),
        ];
    }
}
