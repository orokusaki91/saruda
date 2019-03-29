<?php

use App\Database\WorkingHours;
use Illuminate\Database\Seeder;

class WorkingHoursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WorkingHours::create([
            'day_name' => 'Lunedi',
            'start' => '09am',
            'end' => '12pm'
        ]);
        WorkingHours::create([
            'day_name' => 'Martedi',
            'start' => '09am',
            'end' => '12pm'
        ]);
        WorkingHours::create([
            'day_name' => 'Mercoledi',
            'start' => '09am',
            'end' => '12pm'
        ]);
        WorkingHours::create([
            'day_name' => 'Giovedi',
            'start' => '09am',
            'end' => '12pm'
        ]);
        WorkingHours::create([
            'day_name' => 'Venerdi',
            'start' => '09am',
            'end' => '12pm'
        ]);
        WorkingHours::create([
            'day_name' => 'Sabato',
            'start' => '09am',
            'end' => '12pm'
        ]);
        WorkingHours::create([
            'day_name' => 'Domenica',
            'start' => '10am',
            'end' => '12pm'
        ]);
    }
}
