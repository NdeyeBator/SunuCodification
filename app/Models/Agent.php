<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
  protected $fillable = [
      'id', 'numeroAgent', 'nomAgent', 'prenomAgent',
  ];
}
