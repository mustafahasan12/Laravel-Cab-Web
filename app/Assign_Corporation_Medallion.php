<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assign_Corporation_Medallion extends Model
{

    public $table = 'assign_corporation_medallions';

    public function corporation(){
        return $this->belongsTo(Member::class);
    }
}
