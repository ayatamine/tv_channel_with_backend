<?php

use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \App\Program::create([
        'title'=>'اسم البرنامج',
        'type'=>'صحي',
        'duration'=>'25',
        'delay_at'=>'تشاهدونة كل خميس الساعة 9 مساءً
        الإعادة الجمعة 2:15 ظهراً',
        'thumbnail' => 'المحبره-والقلم2.png',
        'description' => 'برنامج صحي يتحدث عن الصحة وكيف يمكننا ان نحافظ عليها برنامج يومي نوعي ووضع طرق لحل المشاكل الصحية او تفاديها',
       ]);
       \App\Program::create([
        'title'=>'اسم البرنامج',
        'type'=>'صحي',
        'duration'=>'25',
        'delay_at'=>'تشاهدونة كل خميس الساعة 9 مساءً
        الإعادة الجمعة 2:15 ظهراً',
        'thumbnail' => 'المحبره-والقلم2.png',
        'description' => 'برنامج صحي يتحدث عن الصحة وكيف يمكننا ان نحافظ عليها برنامج يومي نوعي ووضع طرق لحل المشاكل الصحية او تفاديها',
       ]);
       \App\Program::create([
        'title'=>'اسم البرنامج',
        'type'=>'صحي',
        'duration'=>'25',
        'delay_at'=>'تشاهدونة كل خميس الساعة 9 مساءً
        الإعادة الجمعة 2:15 ظهراً',
        'thumbnail' => 'المحبره-والقلم2.png',
        'description' => 'برنامج صحي يتحدث عن الصحة وكيف يمكننا ان نحافظ عليها برنامج يومي نوعي ووضع طرق لحل المشاكل الصحية او تفاديها',
       ]);
    }
}
