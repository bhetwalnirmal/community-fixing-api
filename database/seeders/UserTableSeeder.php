<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')
            ->insert([
                'name' => 'admin',
                'password' => Hash::make('admin'),
                'email' => 'admin@rentandjobs.ca',
                'user_type' => User::ADMIN,
            ]);
        DB::table('users')
            ->insert([
                'name' => 'user',
                'password' => Hash::make('user'),
                'email' => 'user@rentandjobs.ca',
            ]);
    }
}
