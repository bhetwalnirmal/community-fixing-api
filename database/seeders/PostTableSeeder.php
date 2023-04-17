<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'title' => 'Room needed',
                'user_id' => 2,
                'post_category_id' => 2,
                'description' => "We are 2 girls 
                We've already got room from 1st of may but our flight is in April 23rd we're  searching for cheap rate airbnd and hostels for 1 week stay 
                if anyone,knows about this then pleasee Dm me"
            ],
            [
                'title' => 'Room needed',
                'user_id' => 2,
                'post_category_id' => 2,
                'description' => "We are 2 girls 
                We've already got room from 1st of may but our flight is in April 23rd we're  searching for cheap rate airbnd and hostels for 1 week stay 
                if anyone,knows about this then pleasee Dm me"
            ],
            [
                'title' => 'Room needed',
                'user_id' => 2,
                'post_category_id' => 2,
                'description' => "We are 2 girls 
                We've already got room from 1st of may but our flight is in April 23rd we're  searching for cheap rate airbnd and hostels for 1 week stay 
                if anyone,knows about this then pleasee Dm me"
            ],
            [
                'title' => 'Room needed',
                'user_id' => 2,
                'post_category_id' => 2,
                'description' => "We are 2 girls 
                We've already got room from 1st of may but our flight is in April 23rd we're  searching for cheap rate airbnd and hostels for 1 week stay 
                if anyone,knows about this then pleasee Dm me"
            ],
            [
                'title' => 'Room needed',
                'user_id' => 2,
                'post_category_id' => 2,
                'description' => "Female roommates needed who are going to fanshawe toronto campus…"
            ],
            [
                'title' => 'Room available',
                'user_id' => 2,
                'post_category_id' => 1,
                'description' => "1 room is available for girls in Toronto Rent is 600 for 2 people. Single basne vaya chahi rent is 460"
            ],
            [
                'title' => 'Room available',
                'user_id' => 2,
                'post_category_id' => 1,
                'description' => "Room available only for a couple in a house (Upper floor) from April 1st on a sharing basis (separate bathroom)
                Rent: $1,125 (including everything)
                Location: 52 Ionview Rd, Scarborough, ON M1K 2Z4 
                For more information please contact this number: +14164331549"
            ],
            [
                'title' => 'Room available',
                'user_id' => 2,
                'post_category_id' => 1,
                'description' => "Room available near Centennial college (Progress Campus) either for single occupancy or can be shared. 
                Malvern street 
                Male preferred.
                Available from April 1st can be held for you until you arrive. 
                Leave a comment and I will text you."
            ],
            [
                'title' => 'Room available',
                'user_id' => 2,
                'post_category_id' => 1,
                'description' => "Rooms available near seneca and york ville
                Rent 500 (3bed 2 room)
                Room is fully furnished all utilities included
                Location northyork 
                Only serious leave the comment below"
            ]
        ]);
    }
}
