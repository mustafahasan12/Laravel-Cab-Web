<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Corporation extends Model
{
    public function member(){
        return $this->belongsTo(Member::class);
    }

  public function assign_corporation_medallion(){
    return $this->hasMany(Assign_Corporation_Medallion::class);
  }

}
