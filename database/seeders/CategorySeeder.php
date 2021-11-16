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
        
    }
}
