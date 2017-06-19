<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Athlete extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['name', 'surname', 'genre', 'role', 'habilities',
  'license', 'date_birth', 'active', 'img_path'];

  public function velocities(){
    return $this->hasMany('App\Velocity');
  }

  public function competitions(){
    return $this->hasMany('App\Competition');
  }
}
