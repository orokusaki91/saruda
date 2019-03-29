<?php

use App\Database\Lunch;
use Illuminate\Database\Seeder;

class LunchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lunch::create([
            'type' => 'text',
            'data' => 'lunch text'
        ]);
    }
}
