<?php

use Illuminate\Database\Seeder;
use App\car;

class CarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(car::class, 50)->create();
    }
}
