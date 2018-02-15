<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chambre extends Model
{
  protected $fillable = [
      'id', 'numeroChambre','capacite', 'couloir_id', 'etage_id', 'batiment_id',
  ];

  public function couloir() {
    return $this->belongsTo('App\Models\Couloir');
  }

  public function etage() {
    return $this->belongsTo('App\Models\Etage');
  }

  public function batiment() {
    return $this->belongsTo('App\Models\Batiment');
  }

  public function position() {
    return $this->hasMany('App\Models\Position');
  }

  public function reservation() {
    return $this->hasMany('App\Models\Reservation');
  }
}
