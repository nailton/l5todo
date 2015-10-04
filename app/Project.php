<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

  protected $guarded = [];

  public function tasks()
  {
    return $this->hasMany('App\Task');
  }

  public function users()
  {
    return $this->belongsToMany(User::class)->withTimestamps();
  }
}
