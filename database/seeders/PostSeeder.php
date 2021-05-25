<?php

namespace Database\Seeders;
// use App\Post;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $posts =   Post::create([
       

        // ]);

        DB::table('posts')->insert([
            ['user_id'=> '1', 'title' => '1', 'body'=> 'First Post', 'created_at' => Carbon::now(), ],
            ['user_id'=> '2', 'topic_id' => '2', 'body'=> 'Second Post', 'created_at' => Carbon::now(), ],
            ['user_id'=> '1', 'topic_id' => '1', 'body'=> 'Third Post', 'created_at' => Carbon::now(), ],
            ['user_id'=> '2', 'topic_id' => '1', 'body'=> 'Fourth Post', 'created_at' => Carbon::now(), ],
            ['user_id'=> '1', 'topic_id' => '2', 'body'=> 'New Post', 'created_at' => Carbon::now(), ],
        ]);


    }
}
