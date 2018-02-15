<?php
namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Etudiant extends Authenticatable
{
  use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = [
      'id', 'numeroEtudiant','email', 'nomEtudiant', 'prenomEtudiant', 'genre', 'departement_id', 'formation_id', 'password',
   ];

   /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */
   protected $hidden = [
       'password', 'remember_token',
   ];

   public function is_admin()
   {
     if($this->admin)
     {
       return true;
     }
     return false;
   }

   public function reservation() {
     return $this->hasMany('App\Models\Reservation');
   }

   public function codification() {
     return $this->hasMany('App\Models\Codification');
   }


}
