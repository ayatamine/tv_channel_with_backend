<?php

use Illuminate\Database\Seeder;

class LiveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \App\Lives::create([
           'link'=>'U0yLJenRuKQ'
       ]);
    }
}
