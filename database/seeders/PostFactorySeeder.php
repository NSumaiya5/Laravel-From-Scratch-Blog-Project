<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostFactorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::factory()->times(3)->create();
    }
}
