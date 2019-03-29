<?php

use App\Database\HomeImage;
use Illuminate\Database\Seeder;

class HomeImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HomeImage::create([
            'name' => 'test 1',
            'image_path' => '/img/homeImage/1.jpg'
        ]);
        HomeImage::create([
            'name' => 'test 2',
            'image_path' => '/img/homeImage/2.jpg'
        ]);
        HomeImage::create([
            'name' => 'test 3',
            'image_path' => '/img/homeImage/3.jpg'
        ]);
        HomeImage::create([
            'name' => 'test 4',
            'image_path' => '/img/homeImage/4.jpg'
        ]);
    }
}
