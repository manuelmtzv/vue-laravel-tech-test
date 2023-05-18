<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    // Run the City seeder
    $this->call(CitySeeder::class);

    // Run the Hotel seeder
    $this->call(HotelSeeder::class);
  }
}
