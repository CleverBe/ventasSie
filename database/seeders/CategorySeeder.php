<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Models\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        Category::create([
            'name'=>'CURSOS',
            'image'=>'https://dummyimage.com/200x150/f516f5/0a0a0a'
        ]);
        Category::create([
            'name'=>'TENIS',
            'image'=>'https://dummyimage.com/200x150/f516f5/0a0a0a'
        ]);
        Category::create([
            'name'=>'CELULARES',
            'image'=>'https://dummyimage.com/200x150/f516f5/0a0a0a'
        ]);
        Category::create([
            'name'=>'COMPUTADORAS',
            'image'=>'https://dummyimage.com/200x150/f516f5/0a0a0a'
        ]);
=======
        Category::Create([
            'name'=>'CURSOS',
            'image'=>'https://dummyimage.com/200x150/ff9a03/ffffff'
        ]);
        Category::Create([
            'name'=>'TENIS',
            'image'=>'https://dummyimage.com/200x150/ff9a03/ffffff'
        ]);
        Category::Create([
            'name'=>'CELULARES',
            'image'=>'https://dummyimage.com/200x150/ff9a03/ffffff'
        ]);
        Category::Create([
            'name'=>'COMPUTADORAS',
            'image'=>'https://dummyimage.com/200x150/ff9a03/ffffff'
        ]);
        
>>>>>>> f8804e3338d4b24ea8f205abcb9e454d603e2bd7
    }
}
