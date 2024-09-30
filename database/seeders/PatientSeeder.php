<?php

namespace Database\Seeders;

use App\Models\Patient;
use App\Models\Doctor;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       Doctor::create(['name' => 'dr. Umum']);
       Doctor::create(['name' => 'dr. Gigi']);
       Doctor::create(['name' => 'dr. THT']);
       Doctor::create(['name' => 'dr. Kulit']);
    }
}
