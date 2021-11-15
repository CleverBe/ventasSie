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
<<<<<<< HEAD
            'name'=>$this ->faker->unique()->randomElement(['Celulares','Impresoras','Celulares','Celulares']),
            'image'=>$this ->faker->randomElement(['https://dummyimage.com/200x150/f516f5/0a0a0a','https://dummyimage.com/200x150/0df720/0a0a0a&text=a']),
=======
            'name' => $this -> faker->unique()->randmElement([' ']),
            'image' => $this -> faker->randomElement(['https://github.com/fzaninotto/Faker','https://dummyimage.com/200x150/ff9a03/ffffff'])
             
>>>>>>> f8804e3338d4b24ea8f205abcb9e454d603e2bd7
        ];
    }
}
