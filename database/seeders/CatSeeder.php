<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cat;

class CatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Cat::create([
            'name'=>'Midcal',
            
        ]);
        Cat::create([
            'name'=>'Chimstry',
            
        ]);
        Cat::create([
            'name'=>'Writting',
            
        ]);
        Cat::create([
            'name'=>'Web design',
            
        ]);
        Cat::create([
            'name'=>'Programming',
            
        ]);
    }
}
