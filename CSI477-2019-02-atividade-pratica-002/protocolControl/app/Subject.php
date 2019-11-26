<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
  protected $fillable = ['name','price'];
  protected $guarded = ['id','created_at','updated_at'];
  protected $table = 'subjects';

  public function requests()
  {
    return $this->hasMany(Request::class);
  }
}
