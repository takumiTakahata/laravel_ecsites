<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // カテゴリーデータのシーダー
        $categories = ['Electronics', 'Clothing', 'Books', 'Home & Kitchen', 'Sports'];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'category_name' => $category,
                'delete_flag' => false,
                'active_flag' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

    }
}
}