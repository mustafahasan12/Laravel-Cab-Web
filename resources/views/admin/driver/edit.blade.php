@extends('admin.layout.app')

@section('content')
<form action="{{route('driver.edit',['id'=>$driver->id])}}"  method="POST" enctype="multipart/form-data" id="driver_create">
    @csrf
    <div id="page-container">
       <div id="fx-container" class="fx-opacity">
          <div id="page-content" class="block">
             <div class="row gutter30">
                <div class="col-md-12">
                   <section class="content">
                      <div class="container-fluid">
                         <div class="row">
                            <!-- left column -->
                            <div class="col-md-12">
                               <!-- general form elements disabled -->
                               <div class="card card-success mb-3">

                               @if ($message = Session::get('success'))
              <div class="alert alert-success alert-block">
              <button type="button" class="close" data-dismiss="alert">×</button>    
                      <strong>{{ $message }}</strong>
                  </div>
                          @endif

                                  <div class="bg-primary card-header">
                                     <h3 class="card-title">Personal Information</h3>
                                  </div>
                                  <!-- /.card-header -->
                                  <div class="card-body">
                                     <div class="row">
                                        <div class="col-md-4">
                                           <div class="form-group">
                                              <label><b>First Name</b></label>
                                              <input type="text" name="First_Name" class="form-control" value="{{$driver->First_Name}}">
                                           </div>
                                        </div>
                                        <div class="col-md-4">
                                           <div class="form-group">
                                              <label><b>Middle Name</b></label>
                                              <input type="text" name="Middle_Name" class="form-control" value="{{$driver->Middle_Name}}">
                                           </div>
                                        </div>
                                        <div class="col-md-4">
                                           <div class="form-group">
                                              <label><b>Last Name</b></label>
                                              <input type="text" name="Last_Name" class="form-control" value="{{$driver->Last_Name}}">
                                           </div>
                                        </div>
                                     </div>
                                     <div class="row">
                                        <div class="col-md-4">
                                           <div class="form-group">
                                              <label>
                                              <b>Civil Status</b></label>
                                              <select id="Civil_Status" name="Civil_Status" class="form-control" >
                                                 <option value="{{$driver->Civil_Status}}"> {{$driver->Civil_Status}} </option>
                                                 <option value="SINGLE">SINGLE</option>
                                                 <option value="MARRIED">MARRIED</option>
                                                 <option value="ANULLED">ANULLED</option>
                                                 <option value="WIDOWED">WIDOWED</option>
                                                 <option value="LEGALLY SEPARATED">LEGALLY SEPARATED</option>
                                              </select>
                                           </div>
                                        </div>
                                        <div class="col-md-4">
                                           <div class="form-group">
                                              <label><b>Date of Birth</b></label>
                                              <input class="form-control" name="Date_Of_Birth" type="date" id="Date_Of_Birth" value="{{$driver->Date_Of_Birth}}">
                                           </div>
                                        </div>
                                        <div class="col-md-2">
                                           <div class="form-group">
                                              <label><b>Height (cm)</b></label>
                                              <input class="form-control" name="Height_Cm" type="text" value="{{$driver->Height_Cm}}">
                                           </div>
                                        </div>
                                        <div class="col-md-2">
                                           <div class="form-group">
                                              <label><b>Weight (lbs)</b></label>
                                              <input class="form-control" name="Weight_Ibs" type="text" value="{{$driver->Weight_Ibs}}">
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                               <div class="card card-success mb-3">
                                  <div class="bg-primary card-header">
                                     <h3 class="card-title">Contact Information</h3>
                                  </div>
                                  <div class="card-body">
                                     <div class="row">
                                        <div class="col-md-4">
                                           <div class="form-group">
                                              <label><b>Address</b></label>
                                              <input type="text" name="Address" class="form-control" value="{{$driver->Address}}">
                                           </div>
                                        </div>
                                        <div class="col-md-4">
                                           <div class="form-group">
                                              <label><b>Apt / Suite / Other</b></label>
                                              <input type="text" name="Apt_Suite_Other" class="form-control" value="{{$driver->Apt_Suite_Other}}">
                                           </div>
                                        </div>
                                        <div class="col-md-4">
                                           <div class="form-group">
                                              <label><b>Driver Image</b></label>
                                              <input name="Driver_Image" type="file" >
                                           </div>
                                        </div>
                                     </div>
                                     <div class="row">
                                        <div class="col-md-4">
                                           <div class="form-group">
                                              <label><b>City</b></label>
                                              <input type="text" name="City" class="form-control" value="{{$driver->City}}">
                                           </div>
                                        </div>
                                        <div class="col-md-2">
                                           <div class="form-group">
                                              <label>State</label>
                                              <select id="State" name="State" class="form-control" required>
                                                 <option value="{{$driver->State}}">{{$driver->State}}</option>
                                                 <option value="Alabama">Alabama</option>
                                                 <option value="Alaska">Alaska</option>
                                                 <option value="Arizona">Arizona</option>
                                                 <option value="Arkansas">Arkansas</option>
                                                 <option value="California">California</option>
                                                 <option value="Colorado">Colorado</option>
                                                 <option value="Connecticut">Connecticut</option>
                                                 <option value="Delaware">Delaware</option>
                                                 <option value="Florida">Florida</option>
                                                 <option value="Georgia">Georgia</option>
                                                 <option value="Hawaii">Hawaii</option>
                                                 <option value="Idaho">Idaho</option>
                                                 <option value="Illinois">Illinois</option>
                                                 <option value="Indiana">Indiana</option>
                                                 <option value="Iowa">Iowa</option>
                                                 <option value="Kansas">Kansas</option>
                                                 <option value="Kentucky">Kentucky</option>
                                                 <option value="Louisiana">Louisiana</option>
                                                 <option value="Maine">Maine</option>
                                                 <option value="Maryland">Maryland</option>
                                                 <option value="Massachusetts">Massachusetts</option>
                                                 <option value="Michigan">Michigan</option>
                                                 <option value="Minnesota">Minnesota</option>
                                                 <option value="Mississippi">Mississippi</option>
                                                 <option value="Missouri">Missouri</option>
                                                 <option value="Montana">Montana</option>
                                                 <option value="Nebraska">Nebraska</option>
                                                 <option value="Nevada">Nevada</option>
                                                 <option value="New Hampshire">New Hampshire</option>
                                                 <option value="New Jersey">New Jersey</option>
                                                 <option value="New Mexico">New Mexico</option>
                                                 <option value="New York">New York</option>
                                                 <option value="North Carolina">North Carolina</option>
                                                 <option value="North Dakota">North Dakota</option>
                                                 <option value="Ohio">Ohio</option>
                                                 <option value="Pennsylvania">Pennsylvania</option>
                                                 <option value="Rhode Island">Rhode Island</option>
                                                 <option value="South Carolina">South Carolina</option>
                                                 <option value="South Dakota">South Dakota</option>
                                                 <option value="Tennessee">Tennessee</option>
                                                 <option value="Texas">Texas</option>
                                                 <option value="Utah">Utah</option>
                                                 <option value="Vermont">Vermont</option>
                                                 <option value="Virginia">Virginia</option>
                                                 <option value="Washington">Washington</option>
                                                 <option value="West Virginia">West Virginia</option>
                                                 <option value="Wisconsin">Wisconsin</option>
                                                 <option value="Wyoming">Wyoming</option>
                                              </select>
                                           </div>
                                        </div>
                                        <div class="col-md-2">
                                           <div class="form-group">
                                              <label><b>Zip Code</b></label>
                                              <input class="form-control" name="Zip_Code" type="text" id="Zip_Code" value="{{$driver->Zip_Code}}">
                                           </div>
                                        </div>
                                        <div class="col-md-4">
                                           <div class="form-group">
                                              <label><b>Documents</b></label>
                                              <input name="Documents" type="file">
                                           </div>
                                        </div>
                                     </div>
                                     <div class="row">
                                        <div class="col-md-4">
                                           <div class="form-group">
                                              <label><b>Phone Number</b></label>
                                              <input class="form-control" maxlength="15" name="Phone_Number" type="text" id="Phone_Number" onkeypress="checkValidatPhoneNumber()" value="{{$driver->Phone_Number}}">
                                           </div>
                                        </div>
                                        <div class="col-md-4">
                                           <div class="form-group">
                                              <label><b>Secondary Phone No</b></label>
                                              <input type="text" name="Secondary_Phone_No" maxlength="15" id="Secondary_Phone_No" onkeypress="checkValidatSecondaryPhoneNo()" class="form-control" value="{{$driver->Secondary_Phone_No}}">
                                           </div>
                                        </div>
                                        <script>
                                           function checkValidatPhoneNumber(){
                                           var Phone_Number=document.getElementById('Phone_Number').value;
                                           if(Phone_Number.length == 0){
                                           Phone_Number =  "("+Phone_Number ;
                                           document.getElementById('Phone_Number').value = Phone_Number;
                                           }else if(Phone_Number.length == 4){
                                           Phone_Number = Phone_Number + ") ";
                                           document.getElementById('Phone_Number').value = Phone_Number;
                                           }else if(Phone_Number.length == 9){
                                                 Phone_Number = Phone_Number + "-";
                                           document.getElementById('Phone_Number').value = Phone_Number;
                                           }else{
                                           }
                                           }


                                           function checkValidatSecondaryPhoneNo(){
                                           var Secondary_Phone_No=document.getElementById('Secondary_Phone_No').value;
                                           if(Secondary_Phone_No.length == 0){
                                           Secondary_Phone_No =  "("+Secondary_Phone_No ;
                                           document.getElementById('Secondary_Phone_No').value = Secondary_Phone_No;
                                           }else if(Secondary_Phone_No.length == 4){
                                           Secondary_Phone_No = Secondary_Phone_No + ") ";
                                           document.getElementById('Secondary_Phone_No').value = Secondary_Phone_No;
                                           }else if(Secondary_Phone_No.length == 9){
                                                 Secondary_Phone_No = Secondary_Phone_No + "-";
                                           document.getElementById('Secondary_Phone_No').value = Secondary_Phone_No;
                                           }else{
                                           }
                                           }
                                        </script>
                                        <div class="col-md-4">
                                           <div class="form-group">
                                              <label><b>License Image</b></label>
                                              <input name="License_Image" type="file">
                                           </div>
                                        </div>
                                     </div>
                                     <div class="row">
                                        <div class="col-md-4">
                                           <div class="form-group">
                                              <label><b>Email Address</b></label>
                                                 <input class="form-control" name="Email_Address" type="email" id="Email_Address" value="{{$driver->Email_Address}}">
                                              
                                           </div>
                                        </div>

                                                 <div class="input-group-prepend">
                                                 </div>
                                        <div class="col-md-4">
                                           <div class="form-group">
                                              <label><b>Password</b></label>
                                                 <input class="form-control" name="Password" type="Password" value="" id="password" value="{{$driver->Password}}">
                                              
                                           </div>
                                        </div>
                                        <div class="col-md-4">
                                           <div class="form-group">
                                              <label><b>Region</b></label>
                                              <select id="Region" name="Region" class="form-control">
                                                 <option value="{{$driver->Region}}">{{$driver->Region}}</option>
                                                 <option value="north">North</option>
                                                 <option value="south">South</option>
                                                 <option value="east">East</option>
                                                 <option value="west">West</option>
                                                 <option value="none">None</option>
                                              </select>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                               <div class="card card-success mb-3">
                                  <div class="bg-primary card-header">
                                     <h3 class="card-title">License Information</h3>
                                  </div>
                                  <div class="card-body">
                                     <div class="row">
                                        <div class="col-md-4">
                                           <div class="form-group">
                                              <label><b>Driving License</b></label>
                                              <input type="text" name="Driving_License" class="form-control" value="{{$driver->Driving_License}}">
                                           </div>
                                        </div>
                                        <div class="col-md-4">
                                           <div class="form-group">
                                              <label><b>State</b></label>
                                              <input type="text" name="Dln_State" class="form-control" value="{{$driver->Dln_State}}">
                                           </div>
                                        </div>
                                        <div class="col-md-2">
                                           <div class="form-group">
                                              <label><b>Issue Date</b></label>
                                              <div class="input-group date">
                                             
                                                 <input class="form-control" name="Issue_Date" type="date" id="Issue_Date" value="{{$driver->Issue_Date}}">
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-2">
                                           <div class="form-group">
                                              <label><b>Expiration Date</b></label>
                                              <div class="input-group date">
                                                
                                                 <input class="form-control" name="Expiration_Date" type="date" id="Expiration_Date" value="{{$driver->Expiration_Date}}">
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                               <div class="card card-success mb-3">
                                  <div class="bg-primary card-header">
                                     <h3 class="card-title">Chauffeur Information</h3>
                                  </div>
                                  <div class="card-body">
                                     <div class="row">
                                        <div class="col-md-4">
                                           <div class="form-group">
                                              <label><b>Chauffeur Number</b></label>
                                              <input type="text" name="Chauffeur_Number" id="chaferNum" class="form-control" value="{{$driver->Chauffer_Number}}">
                                           </div>
                                        </div>
                                        <div class="col-md-2">
                                           <div class="form-group">
                                              <label><b>Status</b></label>
                                              <input class="form-control" readonly="" name="status_c" id="status_c" type="text" value="{{$driver->status_c}}">
                                           </div>
                                        </div>
                                        <div class="col-md-2">
                                           <div class="form-group">
                                              <label><b>Status Date</b></label>
                                              <input class="form-control" id="status_date" readonly="" name="status_date" type="text" value="{{$driver->status_date}}">
                                           </div>
                                        </div>
                                        <div class="col-md-2">
                                           <div class="form-group">
                                              <label><b>Driver type</b></label>
                                              <input class="form-control" id="d_type" readonly="" name="d_type" type="text" value="{{$driver->d_type}}">
                                           </div>
                                        </div>
                                        <div class="col-md-2">
                                           <div class="form-group">
                                              <label><b>License type</b></label>
                                              <input class="form-control" id="l_type" readonly="" name="l_type" type="text" value="{{$driver->l_type}}">
                                           </div>
                                        </div>
                                     </div>
                                     <div class="row">
                                        <div class="col-md-4">
                                           <div class="form-group">
                                              <label for="c_name" class="form-label required"><b>Chauffeur Name</b></label>
                                              <input class="form-control" id="ch_name" readonly="" name="ch_name" type="text" value="{{$driver->ch_name}}">
                                           </div>
                                        </div>
                                        <div class="col-md-2">
                                           <div class="form-group">
                                              <label for="c_gender" class="form-label required"><b>Gender</b></label>
                                              <input class="form-control" id="ch_gender" readonly="" name="ch_gender" type="text" value="{{$driver->ch_gender}}">
                                           </div>
                                        </div>
                                        <div class="col-md-2">
                                           <div class="form-group">
                                              <label for="c_city" class="form-label required"><b>Chauffeur City</b></label>
                                              <input class="form-control" id="ch_city" readonly="" name="ch_city" type="text" value="{{$driver->ch_city}}">
                                           </div>
                                        </div>
                                        <div class="col-md-2">
                                           <div class="form-group">
                                              <label for="c_state" class="form-label required"><b>Chauffeur State</b></label>
                                              <input class="form-control" id="ch_state" readonly="" name="ch_state" type="text" value="{{$driver->ch_state}}">
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                               <div class="card card-success mb-3">
                                  <div class="bg-primary card-header">
                                     <h3 class="card-title">Other Information</h3>
                                  </div>
                                  <div class="card-body">
                                     <div class="row">
                                        <div class="col-md-3">
                                           <div class="form-group">
                                              <label><b>Employee ID</b></label>
                                              <input type="text" name="Employee_ID" class="form-control" value="{{$driver->Employee_ID}}">
                                           </div>
                                        </div>
                                        <div class="col-md-3">
                                           <div class="form-group">
                                              <label><b>Join Date</b></label>
                                              <div class="input-group date">
                                                 
                                                 <input class="form-control" name="Join_Date" type="date" value="{{$driver->Join_Date}}">
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-3">
                                           <div class="form-group">
                                              <label><b>Social Security Number</b></label>
                                              <input type="text" name="Social_Security_Number" minlength="11" onkeypress="checkValidatSocial()" id="Social_Security_Number" maxlength="11" class="form-control" value="{{$driver->Social_Security_Number}}">
                                           </div>
                                        </div>
                                        <script>
                                           function checkValidatSocial(){

                                           var Social_Security_Number=document.getElementById('Social_Security_Number').value;
                                               if(Social_Security_Number.length == 3){
                                                   Social_Security_Number = Social_Security_Number + "-";
                                                   document.getElementById('Social_Security_Number').value = Social_Security_Number;
                                               }else if(Social_Security_Number.length == 6){
                                                   Social_Security_Number = Social_Security_Number + "-";
                                                   document.getElementById('Social_Security_Number').value = Social_Security_Number;
                                               }else{

                                               }
                                           }

                                        </script>
                                        <div class="col-md-3">
                                           <div class="form-group">
                                              <label><b>Run ID</b></label>
                                              <input type="text" name="Run_ID" class="form-control" value="{{$driver->Run_ID}}">
                                           </div>
                                        </div>
                                     </div>
                                     <div class="row">
                                        <div class="col-md-3">
                                           <div class="form-group">
                                              <label><b>Driver Type</b></label>
                                              <select id="s_driver_type" name="Driver_Type" class="form-control" >
                                                 <option value="{{$driver->Driver_Type}}">{{$driver->Driver_Type}}</option>
                                                 <option value="1">Standard</option>
                                                 <option value="2">Wheel Chair</option>
                                              </select>
                                           </div>
                                        </div>
                                        <div class="col-md-3">
                                           <div class="form-group">
                                              <label><b>Department</b></label>
                                              <select id="department" name="Department" class="form-control">
                                                 <option value="{{$driver->Department}}">{{$driver->Department}}</option>
                                                 <option value="One">One</option>
                                              </select>
                                           </div>
                                        </div>
                                        <div class="col-md-3">
                                           <div class="form-group">
                                              <label>
                                              <b>
                                              Assign Vehicle
                                              </b>
                                              </label>
                                              <select id="assign_vehicle" name="Assign_Vehicle" class="form-control" >
                                                 <option value="{{$driver->Assign_Vehicle}}">{{$driver->Assign_Vehicle}}</option>
                                                 <option value="39">Toyota-2007-123456789</option>
                                                 <option value="44">audi-2009-234234</option>
                                                 <option value="46">Toyota-2007-732879837</option>
                                                 <option value="48">Toyota-2007-32332455335</option>
                                                 <option value="49">Toyota-2007-32332455335</option>
                                                 <option value="52">Honda-2020-32332455335</option>
                                                 <option value="53">tata-2018-32332455335</option>
                                                 <option value="54">Suzuki-2019-32332455335</option>
                                                 <option value="55">Wagon R-2018-32332455335</option>
                                                 <option value="56">Honda-2018-32332455335</option>
                                                 <option value="57">Toyota-2015-54646434</option>
                                                 <option value="58">Toyota-2015-54646434</option>
                                              </select>
                                           </div>
                                        </div>
                                        <div class="col-md-3">
                                           <div class="form-group">
                                              <label><b>Select Performance Type</b></label>
                                              <select id="s_driver_performance" name="Performance_type" class="form-control" >
                                                 <option value="{{$driver->Performance_type}}">{{$driver->Performance_type}}</option>
                                                 <option value="Grade A">Grade A</option>
                                                 <option value="Grade B">Grade B</option>
                                                 <option value="Grade C">Grade C</option>
                                              </select>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="rows">
                                        <div class="col-md-12">
                                           <div class="form-group">
                                              <label for="econtact" class="form-label"><b>Remarks</b></label>
                                              <textarea class="form-control" name="Remarks" cols="50" rows="10" id="econtact" >{{$driver->Remarks}}</textarea>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="row">
                                        <div class="col-md-3">
                                           <div class="form-group">
                                              <label for="flexable_hrs" class="form-label">Flexable Hrs</label>
                                              <input type="checkbox" id="flexCheck" name="flexable_hrs" onclick="flexFunction()" >
                                           </div>
                                           <div class="row" id="flexhr" style="display:none">
                                              <div class="col-md-12">
                                                 <div class="form-group">
                                                    <label for="Flexible_Side" class="form-label">Flexible Side</label>
                                                    <select id="Flexible_Side" name="Flexible_Side" class="form-control" >
                                                       <option value="{{$driver->Flexible_Side}}">{{$driver->Flexible_Side}}</option>
                                                       <option value="Starting">Starting</option>
                                                       <option value="Ending">Ending</option>
                                                       <option value="Both">Both</option>
                                                    </select>
                                                 </div>
                                              </div>
                                              <div class="col-md-12">
                                                 <div class="form-group">
                                                    <label for="Flexible_Hours" class="form-label">Flexible Hours</label>
                                                    <select id="Flexible_Hours" name="Flexible_Hours" class="form-control" >
                                                       <option value="{{$driver->Flexible_Hours}}">{{$driver->Flexible_Hours}}</option>
                                                       <option value="1 Hour">1 Hour</option>
                                                       <option value="2 Hour">2 Hours</option>
                                                       <option value="3 Hour">3 Hours</option>
                                                       <option value="4 Hour">4 Hours</option>
                                                    </select>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-3">
                                           <div class="form-group">
                                              <label for="Special_Hrs_1" class="form-label">Special Hrs (OFF) </label>
                                              <input type="checkbox" id="Special_Hrs_1" name="Special_Hrs_1" onclick="myFunction()" value="{{$driver->Special_Hrs_1}}">
                                           </div>
                                           <div class="row" id="s_hr" style="display:none">
                                              <div class="col-md-12">
                                                 <div class="form-group">
                                                    <label for="Speacial_Day" class="form-label">Speacial Day</label>
                                                    <select id="Speacial_Day" name="Speacial_Day" class="form-control" >
                                                       <option value="{{$driver->Speacial_Day}}">{{$driver->Speacial_Day}}</option>
                                                       <option value="Monday">Monday</option>
                                                       <option value="Tuesday">Tuesday</option>
                                                       <option value="Wednesday">Wednesday</option>
                                                       <option value="thursday">thursday</option>
                                                       <option value="Friday">Friday</option>
                                                       <option value="Saturday">Saturday</option>
                                                       <option value="Sunday">Sunday</option>
                                                    </select>
                                                 </div>
                                              </div>
                                              <div class="col-md-12">
                                                 <div class="form-group">
                                                    <label for="s_time_start" class="form-label">Special Time Start</label>
                                                    <input class="form-control" autofocus="" name="Special_Time_Start" type="time" id="Special_Time_Start" value="{{$driver->Special_Time_Start}}">
                                                 </div>
                                              </div>
                                              <div class="col-md-12">
                                                 <div class="form-group">
                                                    <label for="s_time_end" class="form-label">Special Time End</label>
                                                    <input class="form-control" autofocus="" name="Special_Time_End" type="time" id="Special_Time_End" value="{{$driver->Special_Time_End}}">
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="col-md-2">
                                           <div class="form-group">
                                              <label for="available_all_time" class="form-label">Available All Time</label>
                                              <input type="checkbox" id="Available_All_Time" name="Available_All_Time" value="{{$driver->Available_All_Time}}">
                                           </div>
                                        </div>
                                        <div class="col-md-2">
                                           <div class="form-group">
                                              <label for="inActive" class="form-label">inActive</label>
                                              <input type="checkbox" checked="" id="inActive" name="inActive" value="{{$driver->inActive}}">
                                           </div>
                                        </div>
                                        <div class="col-md-2">
                                           <div class="form-group">
                                              <label for="peace_hrs" class="form-label">Pace Program</label>
                                              <input type="checkbox" name="Pace_Program" id="Pace_Program" value="{{$driver->Pace_Program}}">
                                           </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Submit') }}
                                            </button>
                                         </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <!--/.col (right) -->
                      </div>
                      <!-- /.row -->
                   </section>
                </div>
             </div>
          </div>
       </div>
    </div>
 </form>
@endsection


@push('scripts')


<script>
    $(document).ready(function(){
      $('#chaferNum').keyup(function(){

            var value=$(this).val();
            $.ajax({
            url: "https://data.cityofchicago.org/resource/97wa-y6ff.json",
            type: "GET",
            data: {
            "$limit" : 5000,
            "license" :value,
            "$$app_token" : "maF7iQdMYHMuYqgof0lXDzoDY"
            }
    }).done(function(data) {
      $stutusdate=data[0].status_date.split(' ')[0];

      $('#status_c').val(data[0].status);
        $('#status_date').val($stutusdate);
        $('#d_type').val(data[0].driver_type);
        $('#l_type').val(data[0].license_type);
        $('#ch_name').val(data[0].name);
        $('#ch_gender').val(data[0].sex);
        $('#ch_city').val(data[0].city);
        $('#ch_state').val(data[0].state);
    });

      });

    });

    function myFunction() {
      var checkBox = document.getElementById("Special_Hrs_1");
      var text = document.getElementById("s_hr");
      if (checkBox.checked == true){
        text.style.display = "block";
      } else {
         text.style.display = "none";
      }
    }

    function flexFunction() {
      var checkBox = document.getElementById("flexCheck");
      var text = document.getElementById("flexhr");
      if (checkBox.checked == true){
        text.style.display = "block";
      } else {
         text.style.display = "none";
      }
    }

    $('#driver_create_btn').click(function(e) {
        e.preventDefault();
        var formData = new FormData($('#driver_create')[0]);
        $.ajax({
            url: '{{ route("driver.store") }}',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(result)
            {

            },
            error: function(data)
            {

            }
        });
    });

    </script>

@endpush
