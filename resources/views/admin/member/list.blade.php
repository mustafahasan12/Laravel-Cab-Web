@extends('admin.layout.app')

@section('content')


            <div id="fx-container" class="fx-opacity">
                <!-- Page content -->
                <div id="page-content" class="block full">
                    <!-- Datatables Header -->
                    <div class="block-header">
                        <!-- If you do not want a link in the header, instead of .header-title-link you can use a div with the class .header-section -->
                        <a href="" class="header-title-link">
                            <h1>
                                <i class="fa fa-thumbs-o-up animation-expandUp"></i>All Members<br>
                            </h1>
                        </a>

                    </div>
                    <ul class="breadcrumb breadcrumb-top">
                        <li><i class="fa fa-th"></i></li>
                        <li>Members</li>
                        <li><a href="{{route('member.list')}}">All Members</a></li>
                    </ul>
                    <!-- END Datatables Header -->

                    @if ($message = Session::get('success'))
              <div class="alert alert-success alert-block">
              <button type="button" class="close" data-dismiss="alert">×</button>    
                      <strong>{{ $message }}</strong>
                  </div>
                          @endif

                      <!-- Datatables Content -->
      <a href="{{route('member.create')}}" > <input type="button" value="Add Members" class="btn btn-block btn-primary"/>  </a>
            <br>
      
      <div class="row text-center" style="padding-left: 10px; padding-right:10px;" >
         <div class="col-md-2 col-sm-2 col-lg-2"></div>
         <div class="col-md-3 col-sm-3 col-lg-3" id="sole" style="font-size: 20px; background-color: #569cd6" > Sole Proprieter </div>
         <div class="col-md-2 col-sm-2 col-lg-2"></div>
         <div class="col-md-3 col-sm-3 col-lg-3" id="corporation" style="font-size: 20px;" > Corporation </div>
         <div class="col-md-2 col-sm-2 col-lg-2"></div>
      </div>
           <br>
      <div class="row" id="show_sole">
          <div class="col-md-12 col-sm-12 col-lg-12">
                <div class="table-responsive">
                <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Full Name</th>
      <th scope="col">City</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">Driver License Number</th>
      <th scope="col">Issue Date</th>
      <th scope="col">Expiration Date</th>
      <th scope="col">Chauffeur License Number</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
   @foreach($members as $member)
    <tr>
      <th scope="row" class="text-center">{{$member->id}}</th>
      <td class="text-center" >{{$member->first_name}} {{$member->middle_name}} {{$member->last_name}}</td>
      <td class="text-center" >{{$member->city}}</td>
      <td class="text-center" >{{$member->phone_num}}</td>
      <td class="text-center" >{{$member->dob}}</td>
      <td class="text-center" >{{$member->driver_license_num}}</td>
      <td class="text-center" >{{$member->driver_issue_date}}</td>
      <td class="text-center" >{{$member->driver_expiration_num}}</td>
      <td class="text-center" >{{$member->chauffeur_license_num}}</td>
      <td>
          <div class="btn-group"  class="text-center" >
             <a href="{{route('member.sole.edit',['id'=>$member->id])}}" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
             <a href="{{route('member.delete',['id'=>$member->id])}}" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-default"><i class="fa fa-times"></i></a>
          </div>
      </td>
    </tr>
   @endforeach 
  </tbody>
</table>
                </div>
          </div>
      </div>


      <div class="row" id="show_corporation" style="display: none;">
          <div class="col-md-12 col-sm-12 col-lg-12">
                <div class="table-responsive">
                <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Full Name</th>
      <th scope="col">City</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">Driver License Number</th>
      <th scope="col">Issue Date</th>
      <th scope="col">Expiration Date</th>
      <th scope="col">Chauffeur License Number</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($membercorps as $membercorp)
    <tr>
      <th scope="row" class="text-center">{{$membercorp->id}}</th>
      <td class="text-center" >{{$membercorp->first_name}} {{$membercorp->middle_name}} {{$membercorp->last_name}}</td>
      <td class="text-center" >{{$membercorp->city}}</td>
      <td class="text-center" >{{$membercorp->phone_num}}</td>
      <td class="text-center" >{{$membercorp->dob}}</td>
      <td class="text-center" >{{$membercorp->driver_license_num}}</td>
      <td class="text-center" >{{$membercorp->driver_issue_date}}</td>
      <td class="text-center" >{{$membercorp->driver_expiration_num}}</td>
      <td class="text-center" >{{$membercorp->chauffeur_license_num}}</td>
      <td>
          <div class="btn-group"  class="text-center" >
             <a href="{{route('member.corporation.edit',['id'=>$membercorp->id])}}" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
             <a href="{{route('member.delete',['id'=>$membercorp->id])}}" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-default"><i class="fa fa-times"></i></a>
          </div>
      </td>
    </tr>
   @endforeach 
  </tbody>
</table>
                </div>
          </div>
      </div>
 
<!-- END Datatables Content -->
                      
                </div>
                <!-- END Page Content -->

            </div>
            </div>
            <!-- END FX Container -->
  @endsection


  @push('scripts')

  <script>

$(document).ready(function(){
  $("#sole").click(function(){
    $("#show_sole").show();
    $("#show_corporation").hide();
    $("#sole").css('background-color', '#569cd6');
    $("#corporation").css('background-color', 'white');
  });

  $("#corporation").click(function(){
    $("#show_sole").hide();
    $("#show_corporation").show();
    $("#sole").css('background-color', 'white');
    $("#corporation").css('background-color', '#569cd6');
  });
});

</script>

@endpush
