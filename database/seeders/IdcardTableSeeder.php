<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\IdCard;

class IdcardTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $i = new IdCard;
        $i->id_number = 'A123';
        $i->individual_id = 1;
        $i->save();

        Idcard::factory()->count(30)->create();
    
    }
}
