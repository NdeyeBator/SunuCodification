<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
  protected $fillable = [
      'id', 'localisation',
  ];

  public function batiment()
  {
    return $this->hasMany('App\Models\Batiment');
  }
}
