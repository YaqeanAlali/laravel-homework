<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Trainer;
use Faker\Provider\Faker;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Trainer::create([
            'name'=>'Majad Alahmad',
            'spec'=>'Engneer',
            'phone'=>fake()->phoneNumber()
        ]);
        Trainer::create([
            'name'=>'Yaqean alali',
            'spec'=>'teacher',
            'phone'=>fake()->phoneNumber()
        ]);
        Trainer::create([
            'name'=>'Abd alhafez',
            'spec'=>'AI',
            'phone'=>fake()->phoneNumber()
        ]);
        Trainer::create([
            'name'=>'Yasouf alali',
            'spec'=>'teacher',
            'phone'=>fake()->phoneNumber()
        ]);
        Trainer::create([
            'name'=>'Malik',
            'spec'=>'phiscal',
            'phone'=>fake()->phoneNumber()
        ]);
        Trainer::create([
            'name'=>'Farzat',
            'spec'=>'scurity',
            'phone'=>fake()->phoneNumber()
        ]);
    }
}
