<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
  protected $fillable = [
      'id', 'etudiant_id', 'chambre_id',
  ];

  public function etudiant() {
    return $this->belongsTo('App\Models\Etudiant');
  }

  public function chambre() {
    return $this->belongsTo('App\Models\Chambre');
  }
}
