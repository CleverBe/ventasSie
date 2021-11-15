<?php

namespace Database\Seeders;

use App\Models\Category;
<<<<<<< HEAD
use Database\Factories\CategoryFactory;
=======
>>>>>>> f8804e3338d4b24ea8f205abcb9e454d603e2bd7
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        // \App\Models\User::fctory(10)->create();
=======
        // \App\Models\User::factory(10)->create();
        //Category::factory(20)->create();
>>>>>>> f8804e3338d4b24ea8f205abcb9e454d603e2bd7
        $this->call(DenominationSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(UserSeeder::class);
<<<<<<< HEAD

       /*  Category::factory(20)->create(); */
=======
>>>>>>> f8804e3338d4b24ea8f205abcb9e454d603e2bd7
    }
}
