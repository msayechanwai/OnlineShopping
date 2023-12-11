<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        //User Records
        \App\Models\User::factory()->create([

            'name'      => 'ACW',
            'email'     => 'acw@gmail.com',
            'password'  => Hash::make('12345678')

        ]);

        \App\Models\User::factory()->create([

            'name'      => 'Chan',
            'email'     => 'chan@gmail.com',
            'password'  => Hash::make('87654321')

        ]);

        //Category Records
        \App\Models\Category::factory()->create([

            'name'      => 'Computer',        
            'photo'     => '1.jpg',
            'remark'    => ''

        ]);

        \App\Models\Category::factory()->create([

            'name'      => 'Phone',        
            'photo'     => '2.jpg',
            'remark'    => ''

        ]);

        //Item Records
        \App\Models\Item::factory()->create([

            'category_id'   => 1,
            'name'          => 'Dell',        
            'photo'         => 'dell.jpg',
            'remark'        => ''

        ]);

        \App\Models\Item::factory()->create([

            'category_id'   => 1,
            'name'          => 'Acer',        
            'photo'         => 'acer.jpg',
            'remark'        => ''

        ]);

        \App\Models\Item::factory()->create([

            'category_id'   => 2,
            'name'          => 'Samsung',        
            'photo'         => 'samsung.jpg',
            'remark'        => ''

        ]);

        \App\Models\Item::factory()->create([

            'category_id'   => 2,
            'name'          => 'iPhone',        
            'photo'         => 'iphone.jpg',
            'remark'        => ''

        ]);

        
        //Product Records      
        \App\Models\Product::factory()->create([
            'category_id'   => 1,
            'item_id'       => 1,
            'name'          => 'Dell i5',
            'photo'         => 'delli5.jpg',
            'price'         => 500000,
            'qty'           => 10,
            'remark'        => ''
        ]);

        \App\Models\Product::factory()->create([
            'category_id'   => 1,
            'item_id'       => 1,
            'name'          => 'Dell i7',
            'photo'         => 'delli7.jpg',
            'price'         => 700000,
            'qty'           => 5,
            'remark'        => ''
        ]);

        \App\Models\Product::factory()->create([
            'category_id'   => 1,
            'item_id'       => 2,
            'name'          => 'Acer i5',
            'photo'         => 'aceri5.jpg',
            'price'         => 400000,
            'qty'           => 15,
            'remark'        => ''
        ]);

        \App\Models\Product::factory()->create([
            'category_id'   => 1,
            'item_id'       => 2,
            'name'          => 'Acer i7',
            'photo'         => 'aceri7.jpg',
            'price'         => 600000,
            'qty'           => 7,
            'remark'        => ''
        ]);

        \App\Models\Product::factory()->create([
            'category_id'   => 2,
            'item_id'       => 3,
            'name'          => 'Samsung 4/64',
            'photo'         => 'samsung464.jpg',
            'price'         => 200000,
            'qty'           => 10,
            'remark'        => ''
        ]);

        \App\Models\Product::factory()->create([
            'category_id'   => 2,
            'item_id'       => 3,
            'name'          => 'Samsung 8/64',
            'photo'         => 'samsung864.jpg',
            'price'         => 400000,
            'qty'           => 5,
            'remark'        => ''
        ]);

        \App\Models\Product::factory()->create([
            'category_id'   => 2,
            'item_id'       => 4,
            'name'          => 'iPhone 4/64',
            'photo'         => 'iphone464.jpg',
            'price'         => 1000000,
            'qty'           => 5,
            'remark'        => ''
        ]);

        \App\Models\Product::factory()->create([
            'category_id'   => 2,
            'item_id'       => 4,
            'name'          => 'iPhone 8/64',
            'photo'         => 'iphone864.jpg',
            'price'         => 1500000,
            'qty'           => 2,
            'remark'        => ''
        ]);

    }
}
