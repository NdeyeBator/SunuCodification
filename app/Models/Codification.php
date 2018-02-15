<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Codification extends Model
{
      protected $fillable = [
        'id', 'dateDebut', 'dateFin', 'etudiant_id', 'position_id',
    ];

    public function etudiant() {
      return $this->belongsTo('App\Models\Etudiant');
    }

    public function position() {
      return $this->belongsTo('App\Models\Position');
    }


}
