<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 商品データのシーダー
        for ($i = 1; $i <= 10; $i++) {
            DB::table('products')->insert([
                'product_name' => "Product $i",
                'price' => rand(100, 1000),
                'product_text' => "Description for Product $i",
                'category_id' => rand(1, 5), // ダミーのカテゴリーID
                'delete_flag' => false,
                'active_flag' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
