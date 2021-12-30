<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

// 가상의 데이터를 만든다.
class BoardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->realText(20),
            'ctnt' => $this->faker->realText(50),
            'user_id' => User::factory(),
            'hits' => $this->faker->numberBetween(1, 100)
        ];
    }
}
