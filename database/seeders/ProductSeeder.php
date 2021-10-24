<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'iPhone 13 Pro',
                'price'=>'120000',
                'category'=>'Mobile',
                'gallery'=>'../iphone13.jpeg',
                'description'=>'Highly demanding phone, 6GB Ram, 128GB HDD and Super Amoled Display'
    
            ],
            [
                'name'=>'Sony Tv',
                'price'=>'65000',
                'category'=>'TV',
                'gallery'=>'../sonytv.jpg',
                'description'=>'This is a best TV in india. \n Smart Connectivity'
    
            ],
            [
                'name'=>'Noise Smartwatch',
                'price'=>'5000',
                'category'=>'Watch',
                'gallery'=>'../noisewatch.jpg',
                'description'=>'This is a best Smartwatch in india with android OS support'
    
            ],
        ]);
    }
}
