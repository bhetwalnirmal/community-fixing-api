<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IntakeFormImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('intake_form_images')->insert(
            [
                [
                    'intake_form_id' => 1,
                    'name' => 'test.jpg',
                ],
                [
                    'intake_form_id' => 2,
                    'name' => 'comfortmate_fan.webp',
                ]
            ]
        );
    }
}
