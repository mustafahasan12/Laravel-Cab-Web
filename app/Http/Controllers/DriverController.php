<?php

namespace App\Http\Controllers;

use App\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function list()
      {
          //
          $drivers_list = Driver::all();
          return view('admin.driver.driver_list' , ['drivers_list' => $drivers_list]);
          
      }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.driver.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        //
        $drivers = Driver::create([
            'First_Name' => $request['First_Name'],
            'Middle_Name' => $request['Middle_Name'],
            'Last_Name' => $request['Last_Name'],
            'Civil_Status' => $request['Civil_Status'],
            'Date_Of_Birth' => $request['Date_Of_Birth'],
            'Height_Cm' => $request['Height_Cm'],
            'Weight_Ibs' => $request['Weight_Ibs'],
            'Address' => $request['Address'],
            'Apt_Suite_Other' => $request['Apt_Suite_Other'],
            'Driver_Image' => $request['Driver_Image'],
            'City' => $request['City'],
            'State' => $request['State'],
            'Zip_Code' => $request['Zip_Code'],
            'Documents' => $request['Documents'],
            'Phone_Number' => $request['Phone_Number'],
            'Secondary_Phone_No' => $request['Secondary_Phone_No'],
            'License_Image' => $request['License_Image'],
            'Email_Address' => $request['Email_Address'],
            'Password' => $request['Password'],
            'Region' => $request['Region'],
            'Driving_License' => $request['Driving_License'],
            'Dln_State' => $request['Dln_State'],
            'Issue_Date' => $request['Issue_Date'],
            'Expiration_Date' => $request['Expiration_Date'],
            'Chauffeur_Number' => $request['Chauffeur_Number'],
            'Employee_ID' => $request['Employee_ID'],
            'Join_Date' => $request['Join_Date'],
            'Social_Security_Number' => $request['Social_Security_Number'],
            'Run_ID' => $request['Run_ID'],
            'Driver_Type' => $request['Driver_Type'],
            'Department' => $request['Department'],
            'Assign_Vehicle' => $request['Assign_Vehicle'],
            'Performance_type' => $request['Performance_type'],
            'Remarks' => $request['Remarks'],
            'Flexable_Hrs' => $request['flexable_hrs'],
            'Flexible_Side' => $request['Flexible_Side'],
            'Flexible_Hours' => $request['Flexible_Hours'],
            'Special_Hrs_1' => $request['Special_Hrs_1'],
            'Speacial_Day' => $request['Speacial_Day'],
            'Special_Time_Start' => $request['Special_Time_Start'],
            'Special_Time_End' => $request['Special_Time_End'],
            'Available_All_Time' => $request['Available_All_Time'],
            'Pace_Program' => $request['Pace_Program'],
            'inActive' => $request['inActive'],

        ]);

            return redirect()->route('driver_list');
            return redirect()->route('admin.vehicle.vehicle_list');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
      
        $driver = Driver::find($id);
        return View('admin.driver.edit')->with('driver',$driver);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $driver = Driver::find($id);
        $driver->First_Name = $request->First_Name;
        $driver->Middle_Name = $request->Middle_Name;
        $driver->Last_Name = $request->Last_Name;
        $driver->Civil_Status = $request->Civil_Status;
        $driver->Date_Of_Birth = $request->Date_Of_Birth;
        $driver->Height_Cm = $request->Height_Cm;
        $driver->Weight_Ibs = $request->Weight_Ibs;
        $driver->Address = $request->Address;
        $driver->Apt_Suite_Other = $request->Apt_Suite_Other;
        $driver->Driver_Image = $request->Driver_Image;
        $driver->City = $request->City;
        $driver->State = $request->State;
        $driver->Zip_Code = $request->Zip_Code;
        $driver->Documents = $request->Documents;
        $driver->Phone_Number = $request->Phone_Number;
        $driver->Secondary_Phone_No = $request->Secondary_Phone_No;
        $driver->License_Image = $request->License_Image;
        $driver->Email_Address = $request->Email_Address;
        $driver->Password = $request->Password;
        $driver->Region = $request->Region;
        $driver->Driving_License = $request->Driving_License;
        $driver->Dln_State = $request->Dln_State;
        $driver->Issue_Date = $request->Issue_Date;
        $driver->Expiration_Date = $request->Expiration_Date;
        $driver->Chauffeur_Number = $request->Chauffeur_Number;
        $driver->Employee_ID = $request->Employee_ID;
        $driver->Join_Date = $request->Join_Date;
        $driver->Social_Security_Number = $request->Social_Security_Number;
        $driver->Run_ID = $request->Run_ID;
        $driver->Driver_Type = $request->Driver_Type;
        $driver->Department = $request->Department;
        $driver->Assign_Vehicle = $request->Assign_Vehicle;
        $driver->Performance_type = $request->Performance_type;
        $driver->Remarks = $request->Remarks;
        $driver->Flexable_Hrs = $request->flexable_hrs;
        $driver->Flexible_Side = $request->Flexible_Side;
        $driver->Flexible_Hours = $request->Flexible_Hours;
        $driver->Special_Hrs_1 = $request->Special_Hrs_1;
        $driver->Speacial_Day = $request->Speacial_Day;
        $driver->Special_Time_Start = $request->Special_Time_Start;
        $driver->Special_Time_End = $request->Special_Time_End;
        $driver->Available_All_Time = $request->Available_All_Time;
        $driver->Pace_Program = $request->Pace_Program;
        $driver->inActive = $request->inActive;
        $driver->save();

        return back()->with('success','Driver Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
           $driver = Driver::find($id);
           $driver->delete();
           return back()->with('success','Driver Delete');
    }
}
