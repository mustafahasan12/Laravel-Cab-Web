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
                    <i class="fa fa-thumbs-o-up animation-expandUp"></i>Manage Vehicles
                </h1>
            </a>
        </div>
        <ul class="breadcrumb breadcrumb-top">
            <li><i class="fa fa-th"></i></li>
            <li>Home</li>
            <li><a href="">vehicle list</a></li>
        </ul>
        <!-- END Datatables Header -->
        @if ($message = Session::get('success'))
              <div class="alert alert-success alert-block">
              <button type="button" class="close" data-dismiss="alert">×</button>    
                      <strong>{{ $message }}</strong>
                  </div>
                          @endif
        <!-- Datatables Content -->
      <a href="{{route('add_vehicle')}}" > <input type="button" value="Add Vechicle" class="btn btn-block btn-primary"/>  </a>

        <div class="table-responsive">
            <table id="example-datatable" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>Vehicle Image</th>
                        <th>Vehicle Maker</th>
                        <th>Vehicle Model</th>
                        <th>Vehicle Type</th>
                        <th>Vehicle Color</th>
                        <th>Registration Number</th>
                       

                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
             <tbody>
                 @foreach ($vehicle_list as $vehicle)
                 <tr>
                    <td class="text-center">{{$loop->iteration}}</td>
                    <td><img src="{{url('storage/app/public/uploads'.$vehicle->Vehicle_Image)}}" /></td>
                    <td>{{$vehicle->Vehicle_Maker}}</td>
                    <td>{{$vehicle->Vehicle_Model}}</td>
                    <td>{{$vehicle->Vehicle_Type}}</td>
                    <td>{{$vehicle->Vehicle_Color}}</td>
                    <td>{{$vehicle->Registration_Number}}</td>
                    <td class="text-center">
                        <div class="btn-group">
                            <a href="{{route('vehicle_edit',['id'=>$vehicle->id])}}" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                            <a href="{{route('vehicle_delete',['id'=>$vehicle->id])}}" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-default"><i class="fa fa-times"></i></a>
                        </div>
                    </td>
                </tr>
                 @endforeach
         
             </tbody>
            </table>
        </div>
        <!-- END Datatables Content -->
    </div>
    <!-- END Page Content -->

    <!-- Footer -->
  
    <!-- END Footer -->
</div>
            <!-- END FX Container -->
  @endsection



        
        
        <!-- Javascript code only for this page -->
        <script>
            $(function () {
                /* Initialize Bootstrap Datatables Integration */
                webApp.datatables();

                /* Initialize Datatables */
                $('#example-datatable').dataTable({
                    columnDefs: [{orderable: false, targets: [4]}],
                    pageLength: 15,
                    lengthMenu: [[15, 30, 50, -1], [15, 30, 50, "All"]]
                });

                /* Add placeholder attribute to the search form */
                $('.dataTables_filter input').attr('placeholder', 'Search');
            });

          
        </script>
