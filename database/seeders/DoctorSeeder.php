<?php

namespace Database\Seeders;
use App\Models\Doctor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PhpParser\Comment\Doc;

class DocterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Doctor::create(['name' => 'dr. Umum']);
        Doctor::create(['name' => 'dr. Gigi']);
        Doctor::create(['name' => 'dr. THT']);
        Doctor::create(['name' => 'dr. Kulit']);

        Doctor::factory(1000)->create();
    }
}
