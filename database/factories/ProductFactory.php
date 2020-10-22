<?php

namespace Database\Factories;

use App\Models\product;
use Illuminate\Database\Eloquent\Factories\Factory;

class productFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(3, false),
            'photo_url' => 'https://via.placeholder.com/640x480.jpg',
            'amount' => $this->faker->randomFloat(2, 2.00, 24.00),
        ];
    }
}
