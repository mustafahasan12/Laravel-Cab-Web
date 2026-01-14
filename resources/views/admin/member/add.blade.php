@extends('admin.layout.app')

@section('content')

<form action="{{route('member.store')}}"  method="POST" enctype="multipart/form-data" id="member_create">
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


                              @if ($message = Session::get('success'))
              <div class="alert alert-success alert-block">
              <button type="button" class="close" data-dismiss="alert">×</button>    
                      <strong>{{ $message }}</strong>
                  </div>
                          @endif

                                 <div class="card-body">
                                       <div class="card card-success mb-3">
                                          <div class="bg-primary card-header">
                                             <h3 class="card-title">Member Type</h3>
                                          </div>
                                          <div class="card-body">
                                             <div class="row">
                                                <div class="col-md-4">
                                                   <div>
                                                      <label><b>Sole Proprietor</b></label>&nbsp;&nbsp;&nbsp;
                                                      <input type="radio" name="type" id="sole" value="Sole Proprietor" checked="">
                                                   </div>
                                                </div>
                                                <div class="col-md-4">
                                                   <div class="form-group">
                                                      <label><b>Corporation</b></label>&nbsp;&nbsp;&nbsp;
                                                      <input type="radio" name="type" id="corporation" value="Corporation" >
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div id="sole">
                                          <div class="card card-success mb-3">
                                             <div class="bg-primary card-header">
                                                <h3 class="card-title">Add Member</h3>
                                             </div>
                                             <div class="card-body">
                                                <div class="row">
                                                   <div class="col-md-4">
                                                      <div class="form-group">
                                                         <label><b>First Name</b></label>
                                                         <input type="text" name="first_name" class="form-control">
                                                      </div>
                                                   </div>
                                                   <div class="col-md-4">
                                                      <div class="form-group">
                                                         <label><b>Middle Name</b></label>
                                                         <input type="text" name="middle_name" class="form-control">
                                                      </div>
                                                   </div>
                                                   <div class="col-md-4">
                                                      <div class="form-group">
                                                         <label><b>Last Name</b></label>
                                                         <input type="text" name="last_name" class="form-control">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col-md-6">
                                                      <div class="form-group">
                                                         <label><b>City</b></label>
                                                         <input type="text" name="city" class="form-control">
                                                      </div>
                                                   </div>
                                                   <div class="col-md-3">
                                                      <div class="form-group">
                                                         <label>Apt #</label>
                                                         <input class="form-control" name="apt_no" type="text" id="apt_no">
                                                      </div>
                                                   </div>
                                                   <div class="col-md-3">
                                                      <div class="form-group">
                                                         <label><b>City/St/Zip</b></label>
                                                         <input class="form-control" name="zip_code" type="text" id="zip_code">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col-md-6">
                                                      <div class="form-group">
                                                         <label><b>Home #</b></label>
                                                         <input class="form-control" maxlength="15" name="home_num" type="text" id="home_num" onkeypress="checkValidatHomeNumber()">
                                                      </div>
                                                   </div>
                                                   <div class="col-md-6">
                                                      <div class="form-group">
                                                         <label><b>Cell #</b></label>
                                                         <input type="text" name="cell_num" maxlength="15" id="cell_num" onkeypress="checkValidatCellNo()" class="form-control">
                                                      </div>
                                                   </div>
                                                   <script>
                                                      function checkValidatHomeNumber(){
                                                      var Home_Number=document.getElementById('home_num').value;
                                                      if(Home_Number.length == 0){
                                                      Home_Number =  "("+Home_Number ;
                                                      document.getElementById('home_num').value = Home_Number;
                                                      }else if(Home_Number.length == 4){
                                                      Home_Number = Home_Number + ") ";
                                                      document.getElementById('home_num').value = Home_Number;
                                                      }else if(Home_Number.length == 9){
                                                      Home_Number = Home_Number + "-";
                                                      document.getElementById('home_num').value = Home_Number;
                                                      }else{
                                                      }
                                                      }


                                                      function checkValidatCellNo(){
                                                      var Cell_No=document.getElementById('cell_num').value;
                                                      if(Cell_No.length == 0){
                                                      Cell_No =  "("+Cell_No ;
                                                      document.getElementById('cell_num').value = Cell_No;
                                                      }else if(Cell_No.length == 4){
                                                      Cell_No = Cell_No + ") ";
                                                      document.getElementById('cell_num').value = Cell_No;
                                                      }else if(Cell_No.length == 9){
                                                      Cell_No = Cell_No + "-";
                                                      document.getElementById('cell_num').value = Cell_No;
                                                      }else{
                                                      }
                                                      }
                                                   </script>
                                                </div>
                                                <div class="row">
                                                   <div class="col-md-6">
                                                      <div class="form-group">
                                                         <label><b>Emergency Contact</b></label>
                                                         <input class="form-control" maxlength="15" name="emergency_contact" type="text" id="emergency_contact" onkeypress="checkValidatEmergencyNumber()">
                                                      </div>
                                                   </div>
                                                   <div class="col-md-6">
                                                      <div class="form-group">
                                                         <label><b>Phone Number</b></label>
                                                         <input type="text" name="phone_num" maxlength="15" id="phone_num" onkeypress="checkValidatPhoneNo()" class="form-control">
                                                      </div>
                                                   </div>
                                                   <script>
                                                      function checkValidatEmergencyNumber(){
                                                      var Emergency_Number=document.getElementById('emergency_contact').value;
                                                      if(Emergency_Number.length == 0){
                                                      Emergency_Number =  "("+Emergency_Number ;
                                                      document.getElementById('emergency_contact').value = Emergency_Number;
                                                      }else if(Emergency_Number.length == 4){
                                                      Emergency_Number = Emergency_Number + ") ";
                                                      document.getElementById('emergency_contact').value = Emergency_Number;
                                                      }else if(Emergency_Number.length == 9){
                                                      Emergency_Number = Emergency_Number + "-";
                                                      document.getElementById('emergency_contact').value = Emergency_Number;
                                                      }else{
                                                      }
                                                      }


                                                      function checkValidatPhoneNo(){
                                                      var Phone_Num=document.getElementById('phone_num').value;
                                                      if(Phone_Num.length == 0){
                                                      Phone_Num =  "("+Phone_Num ;
                                                      document.getElementById('phone_num').value = Phone_Num;
                                                      }else if(Phone_Num.length == 4){
                                                      Phone_Num = Phone_Num + ") ";
                                                      document.getElementById('phone_num').value = Phone_Num;
                                                      }else if(Phone_Num.length == 9){
                                                      Phone_Num = Phone_Num + "-";
                                                      document.getElementById('phone_num').value = Phone_Num;
                                                      }else{
                                                      }
                                                      }
                                                   </script>
                                                </div>
                                                <div class="row">
                                                   <div class="col-md-6">
                                                      <div class="form-group">
                                                         <label><b>Date Of Birth</b></label>
                                                         <div class="input-group date">
                                                            <input class="form-control" name="dob" type="date" id="dob">
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col-md-6">
                                                      <div class="form-group">
                                                         <label><b>Email Address *</b></label>
                                                            <input class="form-control" name="email_address" type="email" id="Email_Address" >
                                                         
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col-md-4">
                                                      <div class="form-group">
                                                         <label><b>Driver License #</b></label>
                                                         <input type="text" name="driver_license_num" class="form-control">
                                                      </div>
                                                   </div>
                                                   <div class="col-md-4">
                                                      <div class="form-group">
                                                         <label><b>Issue Date</b></label>
                                                         <div class="input-group date">
                                                            <input class="form-control" name="driver_issue_date" type="date" id="issue_date">
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col-md-4">
                                                      <div class="form-group">
                                                         <label><b>Expiration Date</b></label>
                                                         <div class="input-group date">
                                                            <input class="form-control" name="driver_expiration_date" type="date" id="expiration_date">
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col-md-4">
                                                      <div class="form-group">
                                                         <label><b>Chauffeur License #</b></label>
                                                         <input type="text" name="chauffeur_license_num" class="form-control">
                                                      </div>
                                                   </div>
                                                   <div class="col-md-4">
                                                      <div class="form-group">
                                                         <label><b>Issue Date</b></label>
                                                         <div class="input-group date">
                                                            <input class="form-control" name="chauffeur_issue_date" type="date" id="issue_date_2">
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col-md-4">
                                                      <div class="form-group">
                                                         <label><b>Expiration Date</b></label>
                                                         <div class="input-group date">
                                                            <input class="form-control" name="chauffeur_expiration_date" type="date" id="expiration_date_2">
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col-md-6">
                                                      <div class="form-group">
                                                         <label><b>Social Security Number *</b></label>
                                                         <input type="text" name="ssn" minlength="11" onkeypress="checkValidatSocial()" id="ssn" maxlength="11" class="form-control" >
                                                      </div>
                                                   </div>
                                                   <script>
                                                      function checkValidatSocial(){
                                                        var Social_Security_Number=document.getElementById('ssn').value;
                                                        if(Social_Security_Number.length == 3){
                                                          Social_Security_Number = Social_Security_Number + "-";
                                                          document.getElementById('ssn').value = Social_Security_Number;
                                                        }else if(Social_Security_Number.length == 6){
                                                           Social_Security_Number = Social_Security_Number + "-";
                                                          document.getElementById('ssn').value = Social_Security_Number;
                                                        }else{
                                                        }
                                                      }
                                                   </script>
                                                   <div class="col-md-6">
                                                      <div class="form-group">
                                                         <label><b>US Citizen</b></label>
                                                         <select id="us_citizen" name="us_citizen" class="form-control">
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                         </select>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="card card-success mb-3">
                                             <div class="bg-primary card-header">
                                                <h3 class="card-title">To Be Printed On Lease Paper</h3>
                                             </div>
                                             <div class="card-body">
                                                <div class="row">
                                                   <div class="col-md-4">
                                                      <div class="form-group">
                                                         <label><b>Name</b></label>
                                                         <input type="text" name="name" class="form-control">
                                                      </div>
                                                   </div>
                                                   <div class="col-md-4">
                                                      <div class="form-group">
                                                         <label><b>Designation</b></label>
                                                         <input type="text" name="designation" class="form-control">
                                                      </div>
                                                   </div>
                                                   <div class="col-md-4">
                                                      <div class="form-group">
                                                         <label><b>24 Hours Phone Number</b></label>
                                                         <input type="text" name="hours_phone_number" class="form-control">
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="card card-success mb-3" id="hidee" >
                                             <div class="bg-primary card-header">
                                                <h3 class="card-title">Select Vehicle</h3>
                                             </div>
                                             <div class="card-body">
                                                <div class="row">
                                                   <div class="col-sm-6">
                                                      <div class="form-group">
                                                         <label>Medaliion Number's</label>
                                                         <select name="md_id" id="md_id" class="form-control">
                                                            <option value="" selected="" disabled="">Select Medallion</option>
                                                            @foreach ($vehicles as $item)
                                                                <option value="{{$item->id}}" data-json="{{$item}}">{{$item->Medallion_Number}}</option>
                                                            @endforeach
                                                         </select>
                                                      </div>
                                                   </div>
                                                   <div class="col-sm-6">
                                                      <div class="form-group">
                                                         <label>Medallion Expiry Date</label>
                                                         <input type="text" class="form-control" name="exp_date" id="exp_date" disabled="">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col-sm-6">
                                                      <div class="form-group">
                                                         <label>Vehicle Model</label>
                                                         <input type="text" class="form-control" name="veh_model" id="veh_model" disabled="">
                                                      </div>
                                                   </div>
                                                   <div class="col-sm-6">
                                                      <div class="form-group">
                                                         <label>Vehicle Maker</label>
                                                         <input type="text" class="form-control" name="veh_maker" id="veh_maker" disabled="">
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-md-12" >
                                        <input class="btn btn-success" type="submit"  value="Submit">
                                        </div>
                                        <div class="col-md-12" id="notice"  style="display: none">
                                            <div class="alert alert-danger"></div>
                                        </div>
                                 </div>
                              </div>
                           </div>
                        </div>
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

            $('#md_id').on('change',function(){
                    var id=$(this).val();
                    var respone = (jQuery('#md_id option:selected').attr('data-json'))
                    if(respone !==undefined)
                    {
                        var Data=JSON.parse(respone);
                        document.getElementById('veh_model').value=Data["Vehicle_Model"];
                        document.getElementById('veh_maker').value=Data["Vehicle_Maker"];
                        document.getElementById('exp_date').value=Data["Medallion_Expiry_Date"];
                    }

            });
    



        $(document).ready(function(){
            $('#sole').click(function(){
                $('#hidee').show();
            });
        }); 

        $(document).ready(function(){
            $('#corporation').click(function(){
                $('#hidee').hide();
            });
        }); 



       
    });
    </script>

@endpush
