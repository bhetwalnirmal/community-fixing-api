<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // $this->call(PostCategoryTableSeeder::class);
        // $this->call(PostTableSeeder::class);
        // $this->call(CommentTableSeeder::class);
        $this->call(UserTypeTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(FixedTypeSeeder::class);
        $this->call(ItemTypeSeeder::class);
        $this->call(ItemSeeder::class);
        $this->call(IntakeFormSeeder::class);
        $this->call(IntakeFormImageSeeder::class);
    }
}
