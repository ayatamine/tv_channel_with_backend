<?php

use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \App\Slider::create([
           'image'=>'background2.jpg',
           'title'=>'slider 1',
           'description'=>'slider 1 description',
        ]);
       \App\Slider::create([
           'image'=>'background1.jpg',
           'title'=>'slider 1',
           'description'=>'slider 1 description',
        ]);

    }
}
