<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Batiment;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
         BatimentSeeder::class,
         EleveSeeder::class,
         FormationSeeder::class,
        ]);
        $this->call(TypeformationSeeder::class);
    }
}
