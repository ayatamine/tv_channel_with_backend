<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(SettingSeeder::class);
         $this->call(SliderSeeder::class);
         $this->call(ProgramSeeder::class);
         $this->call(LiveSeeder::class);
    }
}
