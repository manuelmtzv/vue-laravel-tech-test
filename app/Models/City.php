<?php

namespace App\Models;

use App\Models\Hotel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class City extends Model
{
  use HasFactory;

  public function hotels()
  {
    return $this->hasMany(Hotel::class);
  }
}
