<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
<<<<<<< HEAD
            'name'=>'LARAVEL Y LIVEWIRE',
            'cost'=>100,            
            'price'=>350,           
            'barcode'=>'748484101',          
            'stock'=>1000,            
            'alerts'=>10,           
            'category_id'=>1,           
            'image'=>'0'         
        ]);
        Product::create([
            'name'=>'RUNNING NIKE',
            'cost'=>600,            
            'price'=>1500,           
            'barcode'=>'748484102',          
            'stock'=>1000,            
            'alerts'=>10,           
            'category_id'=>2,           
            'image'=>'curso.png'         
        ]);        
        Product::create([
            'name'=>'IPHONE 11',
            'cost'=>900,            
            'price'=>1400,           
            'barcode'=>'748484103',          
            'stock'=>1000,            
            'alerts'=>10,           
            'category_id'=>3,           
            'image'=>'iphone11.png'         
        ]);
        Product::create([
            'name'=>'PC GAMER',
            'cost'=>790,            
            'price'=>1350,           
            'barcode'=>'748484104',          
            'stock'=>1000,            
            'alerts'=>10,           
            'category_id'=>2,           
            'image'=>'0'         
        ]);
        
=======
            'name' => 'LARAVEL Y LIVEWIRE',
            'cost' => 200,
            'price' => 350,
            'barcode' => '75010065981',
            'stock' => 1000,
            'alerts' => 10,
            'category_id' => 1,
            'image' => 'curso.png',
        ]);
        Product::create([
            'name' => 'RUNNING NIKE',
            'cost' => 600,
            'price' => 1500,
            'barcode' => '75010065982',
            'stock' => 1000,
            'alerts' => 10,
            'category_id' => 2,
            'image' => 'tennis.png',
        ]);
        Product::create([
            'name' => 'IPHONE 11',
            'cost' => 900,
            'price' => 1400,
            'barcode' => '75010065983',
            'stock' => 1000,
            'alerts' => 10,
            'category_id' => '3',
            'image' => 'celular.png',
        ]);
        Product::create([
            'name' => 'PC GAMMER',
            'cost' => 790,
            'price' => 1350,
            'barcode' => '75010065984',
            'stock' => 1000,
            'alerts' => 10,
            'category_id' => 4,
            'image' => 'pc.png',
        ]);
>>>>>>> f8804e3338d4b24ea8f205abcb9e454d603e2bd7
    }
}
