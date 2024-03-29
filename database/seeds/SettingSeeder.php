<?php

use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Setting::create([
            'site_name'=>'site_name',
            'site_email'=>'site_email@email.com',
            'logo'=>'logo.png',
            'address'=>'some address',
            'phone'=>'(+647) 0687459215 ',
            'fax'=>'(+647) 6874515',
       ]);
    }
}
