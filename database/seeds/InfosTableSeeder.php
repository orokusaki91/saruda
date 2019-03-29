<?php

use App\Database\Info;
use Illuminate\Database\Seeder;

class InfosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Info::create([
            'text' => 'info test'
        ]);
    }
}
