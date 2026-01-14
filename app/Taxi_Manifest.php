<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Casts\Json;

class Taxi_Manifest extends Model
{

    protected $table ='texi_manifest';
    protected $fillable = ['Date_Of_Service',
    'Run_Number',
    'Booking_ID',
    'Client_Name',
    'Space_On',
    'Origin_Street',
    'Origin_Comment',
    'Orig_Apt',
    'Origin_City' ,
    'Origin_Phone' ,
    'Origin_Lon' ,
    'Origin_Lat' ,
    'Space_Off'  ,
    'Dest_Street' ,
    'Dest_Comment' ,
    'Dest_Apt' ,
    'Dest_City' ,
    'Dest_Phone' ,
    'Dest_Lon' ,
    'Dest_Lat' ,
    'schedule_time',
    'Neg_Time' ,
    'Appt_Time',
    'Origin_Actual_Arrive' ,
    'Origin_Actual_Depart',
    'Dest_Actual_Arrive' ,
    'Dest_Actual_Depart' ,
    'Trip_Distance' ,
    'Trip_Distance',
    'Fare',
    'Fare_Collected' ,
    'Provider_Cost',
    'Adjusted_Cost',
    'Comments',
    'distance_data',
    'est_end_time'
    ];


    protected $casts = [
        'distance_data' => 'object',
        'schedule_time'=>'datetime:h:m:s',
        'est_end_time'=>'datetime:h:m:s',
    ];


    public function setScheduleTimeAttribute($value)
    {
        $this->attributes['schedule_time'] =$value.':00';
    }


}
