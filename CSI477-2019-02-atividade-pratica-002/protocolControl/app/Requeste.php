<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requeste extends Model
{
    protected $fillable = ['description','date'];
    protected $guarded = ['id','created_at','updated_at'];
    protected $table = 'requestes';


    public function subject()
    {
      return $this->belongsTo(Subject::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
