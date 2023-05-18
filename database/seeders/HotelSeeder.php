<?php

namespace Database\Seeders;

use App\Models\Hotel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use League\Csv\Reader;

class HotelSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $csv = Reader::createFromPath(__DIR__ . '/data/hotels.csv');
    $csv->setHeaderOffset(0);



    foreach ($csv as $record) {
      Hotel::create([
        'name' => $record['name'],
        'rating' => $record['rating'],
        'price' => $record['price'],
        'image' => $record['image'],
        'city_id' => $record['city_id']
      ]);
    }
  }
}
