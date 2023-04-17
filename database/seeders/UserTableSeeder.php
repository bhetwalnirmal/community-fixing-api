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
                'name' => 'admin1',
                'password' => Hash::make('admin'),
                'email' => 'admin1@communityfixing.ca',
                'user_type_id' => User::ADMIN,
            ]);
            DB::table('users')
                ->insert([
                    'name' => 'client1',
                    'password' => Hash::make('user'),
                    'email' => 'client1@communityfixing.ca',
                    'user_type_id' => User::CLIENT
                ]);
            DB::table('users')
                ->insert([
                    'name' => 'fixer1',
                    'password' => Hash::make('user'),
                    'email' => 'fixer1@communityfixing.ca',
                    'user_type_id' => User::FIXER
                ]);
    }
}
