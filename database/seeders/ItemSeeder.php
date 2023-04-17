<?php

namespace Database\Seeders;

use App\Models\ItemType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert(
            [
                [
                    'name' => 'Lenovo laptop',
                    'item_type_id' => 2,
                    'brand' => 'Lenovo',
                    'accessories' => 'with charger and USB',
                    'description' => 'Bought a new hardisk replace with new one',
                    'problem' => 'the old hard disk is corrupt',
                    'last_working_description' => 'last week and it suddenly stopped',
                    'weight' => 2.5,
                ],
                [
                    'name' => 'Remote Controlled FAN',
                    'item_type_id' => 1,
                    'brand' => 'ComfortMate',
                    'accessories'=> 'None',
                    'description' => 'Not working',
                    'problem' => 'Does not show any power, might be power issue',
                    'last_working_description' => 'last summer',
                    'weight' => 4,
                ],
            ]
        );
    }
}
