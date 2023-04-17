<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IntakeFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('intake_forms')->insert(
            [
                [
                    'item_id' => 1,
                    'drop_in_staff_id' => 1,
                    'client_id' => 2,
                    'item_code' => 'Di10',
                    'intake_date' => Carbon::now(),
                ],
                [
                    'item_id' => 2,
                    'drop_in_staff_id' => 1,
                    'client_id' => 2,
                    'item_code' => 'AE15',
                    'intake_date' => Carbon::now(),
                ],
            ]
        );
    }
}
