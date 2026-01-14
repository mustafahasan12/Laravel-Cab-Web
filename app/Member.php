<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'type','first_name','last_name','middle_name','city','apt_no','zip_code','home_num','cell_num',
        'emergency_contact','phone_num','dob','email_address','driver_license_num','driver_issue_date','driver_expiration_date','chauffeur_license_num','chauffeur_issue_date',
        'chauffeur_expiration_date','ssn','us_citizen','name','designation','hours_phone_number','md_id'
    ];

       public function corporation(){
             return $this->hasMany(Corporation::class);
       }
}
