<?php

namespace Database\Factories;

use App\Models\cruise;
use Illuminate\Database\Eloquent\Factories\Factory;

class cruiseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = cruise::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ship_id' => $this->faker->randomDigitNotNull,
        'dep_date' => $this->faker->word,
        'return_date' => $this->faker->word,
        'cruise_origin' => $this->faker->randomDigitNotNull,
        'cruise_destination' => $this->faker->randomDigitNotNull
        ];
    }
}
