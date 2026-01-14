<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    //
    protected $fillable = [

      'First_Name',
      'Middle_Name',
      'Last_Name',
      'Civil_Status',
      'Date_Of_Birth',
      'Height_Cm',
      'Weight_Ibs',
      'Address',
      'Apt_Suite_Other',
      'Driver_Image',
      'City',
      'State',
      'Zip_Code',
      'Documents',
      'Phone_Number',
      'Secondary_Phone_No',
      'License_Image',
      'Email_Address',
      'Password',
      'Region',
      'Driving_License',
      'Dln_State',
      'Issue_Date',
      'Expiration_Date',
      'Chauffeur_Number',
      'Employee_ID',
      'Join_Date',
      'Social_Security_Number',
      'Run_ID',
       'Driver_Type',
      'Department',
       'Assign_Vehicle',
      'Performance_type',
      'Remarks',
       'Flexable_Hrs',
      'Flexible_Side',
      'Flexible_Hours',
       'Special_Hrs_1',
      'Speacial_Day',
      'Special_Time_Start',
      'Special_Time_End',
       'Available_All_Time',
       'Pace_Program',
       'inActive',

    ];


    public function schedule()
    {
        return $this->hasMany('App\Schedule');
    }
}
