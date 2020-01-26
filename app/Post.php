<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

  // Fillable variables are columns that are allowed to be changed due to an update
  // Guardable is the opposite

  protected $fillable = ['likes'];
  protected $guarded = ['user_id'];

  public function category()
  {
    return $this->belongsTo('App\Category');
  }

  public function user()
  {
    return $this->belongsTo('App\User');
  }
}