<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Individual;

class IndividualTableSeeder extends Seeder
{
    
    public function run(): void
    {
        $i = new Individual;
        $i->name = 'Sarath';
        $i->weight = 57;
        $i->SportsGear_id=1;
        $i->save();

        //factory(App\Individual::class,50)->create();
        Individual::factory()->count(30)->create();
    }
}
