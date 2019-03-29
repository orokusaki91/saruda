<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::table('users')->insert([
            array(
                'name' => 'Test',
                'email' => 'a@a.com',
                'password' => Hash::make('123123'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            )
        ]);
    }
}
