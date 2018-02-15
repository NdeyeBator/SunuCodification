<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Couloir extends Model
{
  protected $fillable = [
      'id', 'numeroCouloir', 'batiment_id', 'etage_id',
  ];

  public function batiment() {
    return $this->belongsTo('App\Models\Batiment');
  }

  public function etage() {
    return $this->belongsTo('App\Models\Etage');
  }

  public function chambre() {
    return $this->hasMany('App\Models\Chambre');
  }
}
