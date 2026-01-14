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
                                <i class="fa fa-thumbs-o-up animation-expandUp"></i>All Corporation<br>
                            </h1>
                        </a>

                    </div>
                    <ul class="breadcrumb breadcrumb-top">
                        <li><i class="fa fa-th"></i></li>
                        <li>Members</li>
                        <li><a href="{{route('member.list')}}">All Corporation</a></li>
                    </ul>
                    <!-- END Datatables Header -->

                    @if ($message = Session::get('success'))
              <div class="alert alert-success alert-block">
              <button type="button" class="close" data-dismiss="alert">×</button>    
                      <strong>{{ $message }}</strong>
                  </div>
                          @endif

                      <!-- Datatables Content -->
      

      <div class="row" >
          <div class="col-md-12 col-sm-12 col-lg-12">
                <div class="table-responsive">
                <table class="table">
  <thead>
    <tr>
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
      <th scope="row" class="text-center">{{$corp->corporation_name}}</th>
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
 
<!-- END Datatables Content -->
                      
                </div>
                <!-- END Page Content -->

            </div>
            </div>
            <!-- END FX Container -->
  @endsection


