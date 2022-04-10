<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    static $status = [
        'available',
        'unavailable'
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'ARTICLE' => str_random(10),
            'NAME' => str_random(10),
            'STATUS' => $status,
        ]);
    }
}
