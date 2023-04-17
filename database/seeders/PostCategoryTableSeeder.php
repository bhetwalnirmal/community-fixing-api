<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post_categories')->insert([
            'name'=>'ROOM_AVAILABLE',
        ]);
        DB::table('post_categories')->insert([
            'name'=>'ROOM_NEEDED',
        ]);
        DB::table('post_categories')->insert([
            'name'=>'JOB_AVAILABLE',
        ]);
        DB::table('post_categories')->insert([
            'name'=>'JOB_NEEDED',
        ]);
        DB::table('post_categories')->insert([
            'name'=>'NEWS',
        ]);

    }
}
