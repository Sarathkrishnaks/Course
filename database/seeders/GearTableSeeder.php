<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GearTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $i->new Gear;
        $i-> gear_name = 'Badminton Kit';
        $i->save();   

        Gear::factory()->count(30)->create();

     }
}
