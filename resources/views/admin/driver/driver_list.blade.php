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
                    <i class="fa fa-thumbs-o-up animation-expandUp"></i>Manage Drivers
                </h1>
            </a>
        </div>
        <ul class="breadcrumb breadcrumb-top">
            <li><i class="fa fa-th"></i></li>
            <li>Home</li>
            <li><a href="">Driver list</a></li>
        </ul>
        <!-- END Datatables Header -->

        @if ($message = Session::get('success'))
              <div class="alert alert-success alert-block">
              <button type="button" class="close" data-dismiss="alert">×</button>    
                      <strong>{{ $message }}</strong>
                  </div>
                          @endif

        <!-- Datatables Content -->
      <a href="{{route('driver.create')}}" > <input type="button" value="Add Driver" class="btn btn-block btn-primary"/>  </a>

        <div class="table-responsive">
            <table id="example-datatable" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>Driver Image</th>
                        <th>Chauffeur_Number</th>
                        <th>Driver Name</th>
                        <th>Driving_License</th>
                        <th>Driver_Type</th>
                        <th>Assign_Vehicle</th>
                        <th>Email</th>
                       

                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
             <tbody>
                 @foreach ($drivers_list as $driver)
                 <tr>
                    <td class="text-center">{{$loop->iteration}}</td>
                    <td><a href="javascript:void(0)">Driver image</a></td>
                    <td>{{$driver->Chauffeur_Number}}</td>
                    <td>{{$driver->First_Name }}</td>
                    <td>{{$driver->Driving_License}}</td>
                    <td>{{$driver->Driver_Type}}</td>
                    <td>{{$driver->Assign_Vehicle}}</td>
                    <td>{{$driver->Email_Address}}</td>
                    <td class="text-center">
                        <div class="btn-group">
                            <a href="{{route('driver_edit',['id'=>$driver->id])}}" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                            <a href="{{route('driver.delete',['id'=>$driver->id])}}" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-default"><i class="fa fa-times"></i></a>
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
