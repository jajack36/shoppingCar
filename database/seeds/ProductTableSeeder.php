<?php

use Illuminate\Database\Seeder;
use App\Models\Products;
 
class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Products::create([
            'imagePath'   => '',
            'title'       => 'test',
            'description' => 'test',
            'price'       => 1
        ]);
    }
}