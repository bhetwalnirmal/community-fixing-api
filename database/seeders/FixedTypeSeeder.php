<?php

namespace Database\Seeders;

use App\Models\FixedType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FixedTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fixed_types')->insert(
            [
                [
                    'id' => FixedType::FIXED,
                    'name'=>'FIXED',
                ],
                [
                    'id' => FixedType::NOT_FIXABLE,
                    'name'=>'NOT FIXABLE',
                ],
                [
                    'id' => FixedType::NEED_PARTS,
                    'name'=>'NEED PARTS',
                ]
            ]
        );
    }
}
