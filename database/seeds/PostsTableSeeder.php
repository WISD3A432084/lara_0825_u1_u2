<?php

use Illuminate\Database\Seeder;
use App\Post;
use Carbon\Carbon;
use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Post::truncate();
        $total = 20;
        $faker = Faker::create('zh_TW');
        foreach (range(1,20) as $number){
            Post::create([
                'title' => $faker->sentence,
                'content_2' => $faker->paragraph,
                'is_feature' => rand(0,1),
                'created_at' => Carbon::now()->subDays($total - $number),
                'updated_at' => Carbon::now()->subDays($total - $number),
            ]);
        }
    }
}
