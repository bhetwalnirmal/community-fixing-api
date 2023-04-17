<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        DB::table('user_types')->insert(
            [
                [
                    'id' => User::CLIENT,
                    'name'=>'CLIENT',
                ],
                [
                    'id' => User::ADMIN,
                    'name'=>'CLIENT',
                ],
                [
                    'id' => User::FIXER,
                    'name'=>'FIXER',
                ]
            ]
        );
    }
}
