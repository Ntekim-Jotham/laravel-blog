<?php

namespace Database\Seeders;
use App\User;

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user =   User::create([
            'name' => 'Jotham',
            'email' => 'jothamweb@gmail.com',
            'password' => bcrypt('DONJEA7n'),
            'role' => 'admin',
            'created_at' => Carbon::now(),
        ]);
    }
}
