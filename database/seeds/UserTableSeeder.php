<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     //  factory(App\user::class, 50) ->create()->each(function ($su) {});

        DB::table('users')->insert([
            'name' => str_random( 10),
            'password' => bcrypt( 'secret'),
        ]);
    }
}