@extends('admin.layout.app')

@section('content')

<form action="{{route('member.corporation.update',['id'=>$membercorps->id])}}"  method="POST">
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
                                             <h3 class="card-title">Edit Corporation</h3>
                                             </div>
                                             <div class="card-body">
                                                <div class="row">
                                                   <div class="col-md-4">
                                                      <div class="form-group">
                                                         <label><b>First Name</b></label>
                                                         <input type="text" name="first_name" class="form-control" value="{{$membercorps->first_name}}" >
                                                      </div>
                                                   </div>
                                                   <div class="col-md-4">
                                                      <div class="form-group">
                                                         <label><b>Middle Name</b></label>
                                                         <input type="text" name="middle_name" class="form-control" value="{{$membercorps->middle_name}}" >
                                                      </div>
                                                   </div>
                                                   <div class="col-md-4">
                                                      <div class="form-group">
                                                         <label><b>Last Name</b></label>
                                                         <input type="text" name="last_name" class="form-control" value="{{$membercorps->last_name}}" >
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col-md-6">
                                                      <div class="form-group">
                                                         <label><b>City</b></label>
                                                         <input type="text" name="city" class="form-control" value="{{$membercorps->city}}" >
                                                      </div>
                                                   </div>
                                                   <div class="col-md-3">
                                                      <div class="form-group">
                                                         <label>Apt #</label>
                                                         <input class="form-control" name="apt_no" type="text" id="apt_no" value="{{$membercorps->apt_no}}" >
                                                      </div>
                                                   </div>
                                                   <div class="col-md-3">
                                                      <div class="form-group">
                                                         <label><b>City/St/Zip</b></label>
                                                         <input class="form-control" name="zip_code" type="text" id="zip_code" value="{{$membercorps->zip_code}}">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col-md-6">
                                                      <div class="form-group">
                                                         <label><b>Home #</b></label>
                                                         <input class="form-control" maxlength="15" name="home_num" type="text" id="home_num" onkeypress="checkValidatHomeNumber()" value="{{$membercorps->home_num}}">
                                                      </div>
                                                   </div>
                                                   <div class="col-md-6">
                                                      <div class="form-group">
                                                         <label><b>Cell #</b></label>
                                                         <input type="text" name="cell_num" maxlength="15" id="cell_num" onkeypress="checkValidatCellNo()" class="form-control" value="{{$membercorps->cell_num}}" >
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
                                                         <input class="form-control" maxlength="15" name="emergency_contact" type="text" id="emergency_contact" onkeypress="checkValidatEmergencyNumber()" value="{{$membercorps->emergency_contact}}">
                                                      </div>
                                                   </div>
                                                   <div class="col-md-6">
                                                      <div class="form-group">
                                                         <label><b>Phone Number</b></label>
                                                         <input type="text" name="phone_num" maxlength="15" id="phone_num" onkeypress="checkValidatPhoneNo()" class="form-control" value="{{$membercorps->phone_num}}">
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
                                                            <input class="form-control" name="dob" type="date" id="dob" value="{{$membercorps->dob}}">
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col-md-6">
                                                      <div class="form-group">
                                                         <label><b>Email Address *</b></label>
                                                            <input class="form-control" name="email_address" type="email" id="Email_Address" value="{{$membercorps->email_address}}">
                                                         
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col-md-4">
                                                      <div class="form-group">
                                                         <label><b>Driver License #</b></label>
                                                         <input type="text" name="driver_license_num" class="form-control" value="{{$membercorps->driver_license_num}}">
                                                      </div>
                                                   </div>
                                                   <div class="col-md-4">
                                                      <div class="form-group">
                                                         <label><b>Issue Date</b></label>
                                                         <div class="input-group date">
                                                            <input class="form-control" name="driver_issue_date" type="date" id="issue_date" value="{{$membercorps->driver_issue_date}}">
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col-md-4">
                                                      <div class="form-group">
                                                         <label><b>Expiration Date</b></label>
                                                         <div class="input-group date">
                                                            <input class="form-control" name="driver_expiration_date" type="date" id="expiration_date" value="{{$membercorps->driver_expiration_date}}">
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col-md-4">
                                                      <div class="form-group">
                                                         <label><b>Chauffeur License #</b></label>
                                                         <input type="text" name="chauffeur_license_num" class="form-control" value="{{$membercorps->chauffeur_license_num}}">
                                                      </div>
                                                   </div>
                                                   <div class="col-md-4">
                                                      <div class="form-group">
                                                         <label><b>Issue Date</b></label>
                                                         <div class="input-group date">
                                                            <input class="form-control" name="chauffeur_issue_date" type="date" id="issue_date_2" value="{{$membercorps->chauffeur_issue_date}}">
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col-md-4">
                                                      <div class="form-group">
                                                         <label><b>Expiration Date</b></label>
                                                         <div class="input-group date">
                                                            <input class="form-control" name="chauffeur_expiration_date" type="date" id="expiration_date_2" value="{{$membercorps->chauffeur_expiration_date}}">
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col-md-6">
                                                      <div class="form-group">
                                                         <label><b>Social Security Number *</b></label>
                                                         <input type="text" name="ssn" minlength="11" onkeypress="checkValidatSocial()" id="ssn" maxlength="11" class="form-control" value="{{$membercorps->ssn}}">
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
                                                         <select id="us_citizen" name="us_citizen" class="form-control" value="{{$membercorps->us_citizen}}">
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
                                                         <input type="text" name="name" class="form-control" value="{{$membercorps->name}}">
                                                      </div>
                                                   </div>
                                                   <div class="col-md-4">
                                                      <div class="form-group">
                                                         <label><b>Designation</b></label>
                                                         <input type="text" name="designation" class="form-control" value="{{$membercorps->designation}}">
                                                      </div>
                                                   </div>
                                                   <div class="col-md-4">
                                                      <div class="form-group">
                                                         <label><b>24 Hours Phone Number</b></label>
                                                         <input type="text" name="hours_phone_number" class="form-control" value="{{$membercorps->hours_phone_number}}">
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>

                                          <div class="row">
                                          <div class="col-md-12" >
                                        <input class="btn btn-success" type="submit"  value="Update">
                                        </div>
                                        <div class="col-md-12" id="notice"  style="display: none">
                                            <div class="alert alert-danger"></div>
                                        </div>
                                          </div> <br>

                                          <div class="card card-success mb-3">
                                             <div class="bg-primary card-header">
                                               <div class="row">
                                                 <div class="col-md-11 col-sm-11 col-lg-11">
                                                  <h3 class="card-title">Corporation</h3>
                                                 </div>
                                                 <div class="col-md col-sm col-lg">
                                                  <h3 class="card-title"><a href="{{route('member.corp.add',['id'=>$membercorps->id])}}"> <i class="fa fa-plus" style="color: white;"></i> </a></h3>
                                                 </div>
                                               </div>  
                                             </div>
                                             <div class="card-body">
                                             <div class="row" >
          <div class="col-md-12 col-sm-12 col-lg-12">
                <div class="table-responsive">
                <table class="table">
  <thead>
    <tr>
      <th></th>
      <th scope="col">Corporation Name</th>
      <th scope="col">Member Name</th>
      <th scope="col">Incorporation Date</th>
      <th scope="col">State Corporation Type</th>
      <th scope="col">Corporation Sub Type</th>
      <th scope="col">Iris Number</th>
      <th scope="col">Corporate Registered Address</th>
      <th scope="col">Fein Number</th>
      <th scope="col">File Number</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($corps as $corp)
    <tr>
      <td> <div class="form-check" style="margin-top: -10px;">
      <input class="form-check-input corp_id" type="checkbox" value="{{$corp->id}}" id="corp_id" name="corp_id"  onchange="cbChange(obj)"  onclick="myshow()" > </div>
     </td>
      <td scope="row" class="text-center">{{$corp->corporation_name}}</td>
      <th scope="row" class="text-center">{{$corp->member_id}}</th>
      <th scope="row" class="text-center">{{$corp->incorporation_date}}</th>
      <th scope="row" class="text-center">{{$corp->corporation_type}}</th>
      <th scope="row" class="text-center">{{$corp->corporation_sub_type}}</th>
      <th scope="row" class="text-center">{{$corp->irisno}}</th>
      <th scope="row" class="text-center">{{$corp->corporate_registered_address}}</th>
      <th scope="row" class="text-center">{{$corp->feinno}}</th>
      <th scope="row" class="text-center">{{$corp->file_number}}</th>
      <td>
          <div class="btn-group"  class="text-center" >
             <a href="{{route('member.corp.edit',['id'=>$corp->id])}}" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
             <a href="{{route('member.corp.delete',['id'=>$corp->id])}}" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-default"><i class="fa fa-times"></i></a>
          </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
                </div>
          </div>
      </div>
                    </div>

                    <div class="row" id="tab">
  <div class="col-md-12" id="mymedallion" >
  
        

  </div>
</div>
                                          </div>
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
    });


    $('input#corp_id').on('change', function() {
    $('input#corp_id').not(this).prop('checked', false);  
});


$( document ).ready(function() {

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$("#corp_id").on('click', function() {
   var id =$("#corp_id").val();
   var url1 = '{{ route("member.assign_medallion", ":id") }}';
   url1 = url1.replace(':id', id);
    $.ajax({
        type:'POST',
        url:'/myajax/'+id,
        data: {status: 'seen'},
        success:function(data){
         var Data = JSON.parse(data);
     var option = '';
      
        option += '<div class="card card-success">';
        option += '<div class="card-header">';
        option += '<h3 class="card-title">Medallion Number</h3>';
        option += '<a href="'+url1+'" >  <i class="fa fa-plus" style="float:right"></i> </a>';
        option += '</div>';
        option += '<div class="card-body table-responsive" >';
        option += '<table class="table">';
        option += '<thead>';
        option += '<tr>';
        option += '<th class="text-center">Corporation Name</th>';
        option += '<th class="text-center">Member Name</th>';
        option += '<th class="text-center">Medallion Number</th>';
        option += '<th class="text-center">Medallion Expiry Date</th>';
        option += '<th class="text-center">Action</th>';
        option += '</tr>';
        option += '</thead>';
           
        
         option += '<tbody>';
         option += '<tr>';
         option += '<td class="text-center">  hello  </td>';
         option += '<td class="text-center"> hello  </td>';
         option += '<td class="text-center">  hello </td>';
         option += '<td class="text-center">  hello </td>';
         option += '<td class="text-center"> <a href="view_asign_medallion.php?id=  " class="text-muted">';
         option += '<a href="edit_asign_medallion.php?id=  " class="text-muted">  <i class="fa fa-edit"></i>';
         option += '</a>';
         option += ' <button type="button"  data-toggle="modal" data-target="#myModal1" onclick="myDel(  )" style="background-color: #3d3d2000;border: none;"><i class="fa fa-trash-alt"></i></button>';
         option += '</form>';
         option += '</span>';
         option += '</td>';
         option += '</tr>';
         option += '</tbody>';
         

        option += '</table>';
       option += '</div>';
       option += '</div>';
            $('#mymedallion').html(option);
                 }
    });
});

});

    </script>

@endpush
