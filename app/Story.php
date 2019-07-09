<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    //
    protected $guarded= [];

    public function Users(){
        return $this->belongsTo(User::class);
  }

}
