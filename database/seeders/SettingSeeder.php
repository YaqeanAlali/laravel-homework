<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'name'=>'midcen',
            'logo'=>'logo',
            'city'=>'Azaz',
            'favicon'=>'favicon',
            'address'=>'Aleppo-Syria',
            'phone'=>'+3526815334446',
            'work_hours'=>'9:00 to 16:00',
            'email'=>'ahmad@gmail.com',
            'fb'=>'facebook.com',
            'twitter'=>'twitter.com',
            'insta'=>'instagram.com',
            'map'=>'<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6342301.00043755!2d35.17777245!3d39.0876459!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2str!4v1680354261477!5m2!1sar!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            
        ]);
    }
}
