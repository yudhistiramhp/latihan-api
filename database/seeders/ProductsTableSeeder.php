<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        Product::factory(100)->create();
        // DB::table('products')->insert([
        //     'name' => 'Mouse Fantech',
        //     'price' => 170000,
        //     'stock' => 10,
        //     'created_at' => $now,
        //     'updated_at' => $now,
        // ]);

        // DB::table('products')->insert([
        //     'name' => 'Keyboard Fantech',
        //     'price' => 500000,
        //     'stock' => 15,
        //     'created_at' => $now,
        //     'updated_at' => $now,
        // ]);
    }
}
