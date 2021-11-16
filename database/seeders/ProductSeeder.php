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
        
    }
}
