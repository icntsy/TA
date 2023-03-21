<?php

namespace Database\Factories;

use App\Models\Lab;
use Illuminate\Database\Eloquent\Factories\Factory;

class LabFactory extends Factory
{
    protected $model = Lab::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->name,
            'harga' => $this->faker->randomDigit(),
            'stok' => $this->faker->randomDigit(),
        ];
    }
}
