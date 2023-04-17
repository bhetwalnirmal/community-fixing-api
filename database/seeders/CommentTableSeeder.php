<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert(
            [
                'post_id' => 2,
                'text'=>'DM me 1',
                'commenter_id' => 2,
            ],
            [
                'post_id' => 2,
                'text'=>'DM me 2',
                'commenter_id' => 2,
            ],
            [
                'post_id' => 2,
                'text'=>'DM me 3',
                'commenter_id' => 2,
            ],
            [
                'post_id' => 2,
                'text'=>'DM me 4',
                'commenter_id' => 2,
            ],
            [
                'post_id' => 2,
                'text'=>'DM me 5',
                'commenter_id' => 2,
            ],
            [
                'post_id' => 1,
                'text'=>'DM me 1',
                'commenter_id' => 2,
            ],
            [
                'post_id' => 1,
                'text'=>'DM me 2',
                'commenter_id' => 2,
            ],
            [
                'post_id' => 1,
                'text'=>'DM me 3',
                'commenter_id' => 2,
            ],
            [
                'post_id' => 1,
                'text'=>'DM me 4',
                'commenter_id' => 2,
            ],
            [
                'post_id' => 1,
                'text'=>'DM me 5',
                'commenter_id' => 2,
            ],
    );
    }
}
