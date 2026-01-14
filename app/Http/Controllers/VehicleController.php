<?php

namespace App\Http\Controllers;

use App\Medallion_Number;
use App\Vehicle;
use App\vehicle_type;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    //
      //
      public function create()
      {
          //
          $vehicle_types = vehicle_type::all();
          $mednum = Medallion_Number::all();
          return view('admin.vehicle.add_vehicle', ['vehicle_types'=> $vehicle_types , 'mednums'=>$mednum]);
      }

      public function list()
      {
          //
          $vehicle_list = Vehicle::all();
          return view('admin.vehicle.vehicle_list' , ['vehicle_list' => $vehicle_list]);
          
      }

      public function store(Request $request)
      {
        $Vehicle = Vehicle::create([
            'Vehicle_Maker' => $request['vehicle_maker'],
            'Vehicle_Engine_Type' => $request['vehicle_engine_type'],
            'Vehicle_Model' => $request['vehicle_model'],
            'Vehicle_Type' => $request['vehicle_type'],
            'Vehicle_Color' => $request['vehicle_color'],
            'Vehicle_Initial_Mileage' => $request['vehicle_initial_mileage'],
            'Vin_Number' => $request['vin_number'],

            $imagePath = $request->file('vehicle_image'),
            $imageName = $imagePath->getClientOriginalName(),
            $path = $request->file('vehicle_image')->storeAs('uploads', $imageName, 'public'),
            'Vehicle_Image' => $path,
            
            'Emission_Number' => $request['emission_number'],
            'Emission_Expiry_Date' => $request['emi_expire'],
            'Medallion_Number' => $request['medallion_number'],
            'Medallion_Expiry_Date' => $request['med_expire'],
            'Registration_Number' => $request['registration_number'],
            'Registration_Expiry' => $request['reg_expire'],
            'Company' => $request['company'],
  

        ]);

       
        return back()->with("success","Vehicle Inserted");
      }

      public function edit($id){
      
        $vehicle = Vehicle::find($id);
        return View('admin.vehicle.vehicle_edit')->with('vehicle',$vehicle);
        
    }

    public function update( Request $request ,$id){
      
        $vehicle = Vehicle::find($id);
        $vehicle->Vehicle_Maker = $request['vehicle_maker'];
        $vehicle->Vehicle_Engine_Type = $request['vehicle_engine_type'];
        $vehicle->Vehicle_Model = $request['vehicle_model'];
        $vehicle->Vehicle_Type = $request['vehicle_type'];
        $vehicle->Vehicle_Color = $request['vehicle_color'];
        $vehicle->Vehicle_Initial_Mileage = $request['vehicle_initial_mileage'];
        $vehicle->Vin_Number = $request['vin_number'];
        $vehicle->Vehicle_Image = $request['vehicle_image'];
  
        $vehicle->Emission_Number = $request['emission_number'];
        $vehicle->Emission_Expiry_Date = $request['emi_expire'];
        $vehicle->Medallion_Number = $request['medallion_number'];
        $vehicle->Medallion_Expiry_Date = $request['med_expire'];
        $vehicle->Registration_Number = $request['registration_number'];
        $vehicle->Registration_Expiry = $request['reg_expire'];
        $vehicle->Company = $request['company'];
  
        $vehicle->save();

        return back()->with("success","Vehicle Updated");
        
    }

          function delete($id){
               
                $vehicle = Vehicle::find($id);
                $vehicle->delete();
                return back()->with("success","Vehicle Deleted");
          }
}
