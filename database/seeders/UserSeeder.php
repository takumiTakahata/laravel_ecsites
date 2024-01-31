<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 管理者アカウントを作成
        DB::table('users')->insert([
            'name' => '管理者',
            'email' => 'b@b',
            'password' => Hash::make('b'),
            'admin_flag' => 1,
        ]);
    }
}
