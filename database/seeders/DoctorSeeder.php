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
        Doctor::create(['DR. Spesialis Mata']);
        Doctor::create(['DR. Spesialis Kulit']);
        Doctor::create(['DR. THT']);
        Doctor::create(['DR. Bedah']);
        Doctor::create(['DR. Umum']);
        Doctor::factory(100)->create();
    }
}
