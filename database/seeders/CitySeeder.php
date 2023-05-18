<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use League\Csv\Reader;

class CitySeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $csv = Reader::createFromPath(__DIR__ . '/data/cities.csv');
    $csv->setHeaderOffset(0);

    foreach ($csv as $record) {
      City::create([
        'name' => $record['name']
      ]);
    }
  }
}
