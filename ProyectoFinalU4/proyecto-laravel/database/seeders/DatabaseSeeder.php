<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(usersSeeder::class);
        $this->call(ArtistaSeeder::class);
        $this->call(categoriaSeeders::class);
        $this->call(GaleriaSeeders::class);
        $this->call(citasSeeders::class);

        // User::factory(10)->create();
    }
}
 