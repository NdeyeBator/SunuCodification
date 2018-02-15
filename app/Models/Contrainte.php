<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrainte extends Model
{
  protected $fillable = [
      'id', 'valeur', 'batiment_id', 'etage_id',
  ];
}
