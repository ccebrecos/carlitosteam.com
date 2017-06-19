<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Velocity extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['athlete_id', 'category', 'track', 'result', 'wind',
  'place', 'date', 'field'];

  public function athlete(){
      return $this->belongsTo('App\Athlete');
  }
}
