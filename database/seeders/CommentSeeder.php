<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            ['user_id'=> '1', 'post_id' => '1', 'content'=> 'First Post', 'created_at' => Carbon::now(), ],
            ['user_id'=> '1', 'post_id' => '2', 'content'=> 'Second Post', 'created_at' => Carbon::now(), ],
            ['user_id'=> '1', 'post_id' => '4', 'content'=> 'This seems okay', 'created_at' => Carbon::now(), ],
            ['user_id'=> '1', 'post_id' => '3', 'content'=> 'Fourth comment', 'created_at' => Carbon::now(), ],
            ['user_id'=> '1', 'post_id' => '5', 'content'=> 'New Comment', 'created_at' => Carbon::now(), ],
        ]);
    }
}
