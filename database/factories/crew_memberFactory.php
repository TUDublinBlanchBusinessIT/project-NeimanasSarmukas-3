<?php

namespace Database\Factories;

use App\Models\crew_member;
use Illuminate\Database\Eloquent\Factories\Factory;

class crew_memberFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = crew_member::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'crew_name' => $this->faker->word,
        'crew_role' => $this->faker->word,
        'ship_id' => $this->faker->randomDigitNotNull
        ];
    }
}
