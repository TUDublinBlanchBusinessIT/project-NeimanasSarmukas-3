<?php

namespace Database\Factories;

use App\Models\port;
use Illuminate\Database\Eloquent\Factories\Factory;

class portFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = port::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'port_name' => $this->faker->word,
        'port_country' => $this->faker->word
        ];
    }
}
