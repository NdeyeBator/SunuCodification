<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Batiment extends Model
{
  protected $fillable = [
      'id', 'nomBatiment', 'dateCreation', 'site_id',
  ];


  public function site()
  {
    return $this->belongsTo('App\Models\Site');
  }

  public function etage()
  {
    return $this->hasMany('App\Models\Etage');
  }

  public function chambre() {
    return $this->hasMany('App\Models\Chambre');
  }

  public function position() {
    return $this->hasMany('App\Models\Position');
  }
}
