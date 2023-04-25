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
                    'sjt_id' => 'SJT1333',
                    'client_name' => 'Client1',
                    'client_email' => 'client1@sjt.org',
                    'client_phone_number' => '4374371234',
                    'client_location' => '240 Wellesley Street',
                    'item_code' => 'Di10',
                    'intake_date' => Carbon::now(),
                ],
                [
                    'item_id' => 2,
                    'drop_in_staff_id' => 1,
                    'client_id' => 2,
                    'sjt_id' => 'SJT4444',
                    'client_name' => 'Client2',
                    'client_email' => 'client2@sjt.org',
                    'client_phone_number' => '4374371234',
                    'client_location' => '240 Parliament Street',
                    'item_code' => 'AE15',
                    'intake_date' => Carbon::now(),
                ],
            ]
        );
    }
}
