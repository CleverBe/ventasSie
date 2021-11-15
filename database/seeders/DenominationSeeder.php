<?php

namespace Database\Seeders;

<<<<<<< HEAD
use Illuminate\Database\Seeder;
use App\Models\Denomination;
=======
use App\Models\Denomination;
use Illuminate\Database\Seeder;

>>>>>>> f8804e3338d4b24ea8f205abcb9e454d603e2bd7
class DenominationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Denomination::create([
<<<<<<< HEAD
            'type'=>'BILLETE',
            'value'=>'200'            
        ]);
        Denomination::create([
            'type'=>'BILLETE',
            'value'=>'100'            
        ]);
        Denomination::create([
            'type'=>'BILLETE',
            'value'=>'50'            
        ]);
        Denomination::create([
            'type'=>'BILLETE',
            'value'=>'20'            
        ]);
        Denomination::create([
            'type'=>'BILLETE',
            'value'=>'10'            
        ]);
        Denomination::create([
            'type'=>'MONEDA',
            'value'=>'5'            
        ]);
        Denomination::create([
            'type'=>'MONEDA',
            'value'=>'2'            
        ]);
        Denomination::create([
            'type'=>'MONEDA',
            'value'=>'1'            
        ]);
        Denomination::create([
            'type'=>'MONEDA',
            'value'=>'0.50'            
        ]);
        Denomination::create([
            'type'=>'MONEDA',
            'value'=>'0.20'            
        ]);
        Denomination::create([
            'type'=>'MONEDA',
            'value'=>'0.10'            
        ]);
        Denomination::create([
            'type'=>'OTRO',
            'value'=>'0'            
=======
            'type' => 'BILLETE',
            'value' => 200,
            'image' => 'https://dummyimage.com/200x150/ff9a03/ffffff'
        ]);
        Denomination::create([
            'type' => 'BILLETE',
            'value' => 100,
            'image' => 'https://dummyimage.com/200x150/ff9a03/ffffff'
        ]);
        Denomination::create([
            'type' => 'BILLETE',
            'value' => 50,
            'image' => 'https://dummyimage.com/200x150/ff9a03/ffffff'
        ]);
        Denomination::create([
            'type' => 'BILLETE',
            'value' => 20,
            'image' => 'https://dummyimage.com/200x150/ff9a03/ffffff'
        ]);
        Denomination::create([
            'type' => 'BILLETE',
            'value' => 10,
            'image' => 'https://dummyimage.com/200x150/ff9a03/ffffff'
        ]);
        Denomination::create([
            'type' => 'MONEDA',
            'value' => 5,
            'image' => 'https://dummyimage.com/200x150/ff9a03/ffffff'
        ]);
        Denomination::create([
            'type' => 'MONEDA',
            'value' => 2,
            'image' => 'https://dummyimage.com/200x150/ff9a03/ffffff'
        ]);
        Denomination::create([
            'type' => 'MONEDA',
            'value' => 1,
            'image' => 'https://dummyimage.com/200x150/ff9a03/ffffff'
        ]);
        Denomination::create([
            'type' => 'MONEDA',
            'value' => 0.50,
            'image' => 'https://dummyimage.com/200x150/ff9a03/ffffff'
        ]);
        Denomination::create([
            'type' => 'MONEDA',
            'value' => 0.20,
            'image' => 'https://dummyimage.com/200x150/ff9a03/ffffff'
        ]);
        Denomination::create([
            'type' => 'MONEDA',
            'value' => 0.10,
            'image' => 'https://dummyimage.com/200x150/ff9a03/ffffff'
        ]);
        Denomination::create([
            'type' => 'OTRO',
            'value' => 0,
            'image' => 'https://dummyimage.com/200x150/ff9a03/ffffff'
>>>>>>> f8804e3338d4b24ea8f205abcb9e454d603e2bd7
        ]);
    }
}
