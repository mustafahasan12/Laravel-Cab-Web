<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Driver;
use App\Schedule;
use Illuminate\Support\Carbon;

class ScheduleController extends Controller
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

          $drivers = Driver::all();
          return view('admin.schedule.index' , ['drivers' => $drivers]);

      }

    public function currentList(){
        $schedules = Schedule::all();
        return view('admin.schedule.currentIndex' , ['schedules' => $schedules]);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $driver     = Driver::find($id);
       // $schedule   = Schedule::whereDriverId($id)->first();
         $schedule = Schedule::find(request()->schedule_id);

        return view('admin.schedule.add')->with('driver',$driver)
        ->with('schedule',$schedule);

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

            return redirect()->route('driver.list');
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

        return $schedule = Schedule::find(request()->schedule_id);

        return View('admin.schedule.edit')
                    ->with('driver',$driver)
                    ->with('schedule',$schedule);

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

        $schedule_ = Schedule::find($request->schedule_id);

        $schedule  = Schedule::updateOrCreate([
            'driver_id'=>$id,
            'id'=>$request->schedule_id
        ])->update([
            'flexible_time'=>[
                'startTimeArray'=>$request->startTimeArray,
                'offTimeArray'=>$request->offTimeArray
            ],
            'total_hours'=>$request->totalHr,
            'rest_days'=>$request->restDays,
            'start_time'=>$request->defualt_startTimeSingle,
            'off_time'=>$request->defualt_offTimeSingle,
            'start_weekend' => $schedule_?$schedule_->start_weekend:Carbon::now()->startOfWeek(),
            'end_weekend'   => $schedule_?$schedule_->end_weekend:Carbon::now()->endOfWeek(),
        ]);

        return redirect()->route('schedule.list')->with('class','success')->with('message','Schedule add successfully.');
    }

    public function duplicate($id)
    {
        $schedule_ = Schedule::find($id);

        $schedule = Schedule::find($id)->replicate();
        $schedule->start_weekend = Carbon::parse($schedule_->start_weekend)->startOfWeek()->addWeeks(1);
        $schedule->end_weekend   = Carbon::parse($schedule_->start_weekend)->endOfWeek()->addWeeks(1);
        $schedule->save();

        return redirect()->route('schedule.current.list')->with('class','success')->with('message','Schedule add successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
