<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\Patient;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Doctor::create(['name' => 'DR. Spesialis Mata']);
        Doctor::create(['name' => 'DR. Spesialis Kulit']);
        Doctor::create(['name' => 'DR. THT']);
        Doctor::create(['name' => 'DR. Bedah']);
        Doctor::factory(100)->create();
    }
}
