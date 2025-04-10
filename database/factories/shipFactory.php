<?php

namespace Database\Factories;

use App\Models\ship;
use Illuminate\Database\Eloquent\Factories\Factory;

class shipFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ship::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ship_name' => $this->faker->word,
        'capacity' => $this->faker->randomDigitNotNull
        ];
    }
}
