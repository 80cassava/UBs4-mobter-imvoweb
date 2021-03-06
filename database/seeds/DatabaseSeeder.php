<?php

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
        factory(\App\User::class, 5)->create();
        $this->call(PerusahaanSeeder::class);
        $this->call(JurusanSeeder::class);
        $this->call(JurusanPerusahaanSeeder::class);
        $this->call(UlasanSeeder::class);
        $this->call(BeritaSeeder::class);
    }
}
