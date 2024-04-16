<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sport;

class SportTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $s->new Sport;
        $s-> name = 'Badminton';
        $s->save(); 
        $s->individual->attach(1);

        Sport::factory()->count(30)->create();

    }
}
