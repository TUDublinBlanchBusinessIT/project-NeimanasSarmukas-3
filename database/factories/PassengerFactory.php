<?php

namespace Database\Factories;

use App\Models\Passenger;
use Illuminate\Database\Eloquent\Factories\Factory;

class PassengerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Passenger::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pass_name' => $this->faker->word,
        'pass_email' => $this->faker->word,
        'pass_cabin' => $this->faker->randomDigitNotNull,
        'cruise_id' => $this->faker->randomDigitNotNull
        ];
    }
}
