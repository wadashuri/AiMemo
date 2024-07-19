<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Memo;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ユーザーを10人作成し、それぞれにメモを作成
        User::factory(10)->create()->each(function ($user) {
            Memo::factory(5)->create(['user_id' => $user->id]);
        });
    }
}
