<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
  protected $fillable = [
      'id', 'description', 'chambre_id', 'batiment_id',
  ];

  public function chambre() {
    return $this->belongsTo('App\Models\Chambre');
  }

  public function batiment() {
    return $this->belongsTo('App\Models\Batiment');
  }

  public function codification() {
    return $this->hasMany('App\Models\Codification');
  }
}
