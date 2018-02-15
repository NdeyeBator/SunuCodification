<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etage extends Model
{
  protected $fillable = [
      'id', 'numeroEtage', 'batiment_id',
  ];

  public function batiment()
  {
    return $this->belongsTo('App\Models\Batiment');
  }

  public function couloir() {
    return $this->hasMany('App\Models\Couloir');
  }

  public function chambre() {
    return $this->hasMany('App\Models\Chambre');
  }
}
