<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Driver;

class Schedule extends Model
{
    protected $fillable = ['driver_id','start_time','off_time','total_hours','flexible_time','rest_days'];


    protected $casts = [
        'rest_days' => 'array', // Will convarted to (Array)
        'flexible_time' => 'array', // Will convarted to (Array)
    ];
    
      protected $dates = [
        'start_weekend', // Will convarted to (Array)
        'end_weekend', // Will convarted to (Array)
    ];

    public function driver(){
        return $this->belongsTo(Driver::class);
    }

    public function isDuplicate(){
        return ($this->driver->schedule->count()==2);
    }
}
