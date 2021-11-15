<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this -> faker->unique()->randmElement([' ']),
            'image' => $this -> faker->randomElement(['https://github.com/fzaninotto/Faker','https://dummyimage.com/200x150/ff9a03/ffffff'])
             
        ];
    }
}
