<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    //
    public $fillable = [

    'Vehicle_Maker',
          'Vehicle_Engine_Type',
          'Vehicle_Model',
        'Vehicle_Type',
          'Vehicle_Color',
          'Vehicle_Initial_Mileage',
          'Vin_Number',
          'Vehicle_Image',
          'Emission_Number',
        'Emission_Expiry_Date',
          'Medallion_Number',
        'Medallion_Expiry_Date',
          'Registration_Number',
        'Registration_Expiry',
          'Company',



    ];
}
