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
                    <i class="fa fa-thumbs-o-up animation-expandUp"></i>Manage Schedules
                </h1>
            </a>
        </div>
        <ul class="breadcrumb breadcrumb-top">
            <li><i class="fa fa-th"></i></li>
            <li>Home</li>
            <li><a href="">Driver list</a></li>
        </ul>
        <!-- END Datatables Header -->

        <!-- Datatables Content -->

        <div class="table-responsive">
            <table id="example-datatable" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>Chauffeur_Number</th>
                        <th>Driver Name</th>
                        <th>Hours</th>
                        <th>Rest Days</th>
                        <th>Status</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
             <tbody>
                 @foreach ($drivers as $driver)
                 <tr>
                    <td class="text-center">{{$loop->iteration}}</td>
                    <td>{{$driver->Chauffeur_Number}}</td>
                    <td>{{$driver->First_Name }}</td>
                    <td>
                        @foreach ($driver->schedule as $total_hours )

                            <a href="{{route('schedule.create',['id'=>$driver->id,'schedule_id'=>isset($total_hours->id)?$total_hours->id:null])}}" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"> {{$total_hours->total_hours}}</a>
                            <br>
                        @endforeach
                    </td>
                    <td>

                        @foreach ($driver->schedule as $rest_day )
                        @if($rest_day->rest_days)
                            <a href="{{route('schedule.create',['id'=>$driver->id,'schedule_id'=>isset($rest_day->id)?$rest_day->id:null])}}" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"> {{implode(", ",$rest_day->rest_days)}}</a>
                        <br>
                        @endif
                        {{-- {{isset($rest_day->rest_days[$loop->iteration -1])?$rest_day->rest_days[$loop->iteration -1]:null}}, --}}
                        @endforeach

                    </td>
                    <td>
                        @if($driver->schedule->first())
                        <i class="fa fa-flag" style="color: green"></i>
                        @else
                        <i class="fa fa-flag" style="color: red"></i>
                        @endif
                    </td>
                    <td class="text-center">
                        <div class="btn-group">
                            {{-- <a href="{{route('schedule.view',['id'=>$driver->id])}}" data-toggle="tooltip" title="View" class="btn btn-xs btn-default"><i class="fa fa-eye"></i></a> --}}
                            <a href="{{route('schedule.create',['id'=>$driver->id,'schedule_id'=>isset($driver->schedule->first()->id)?$driver->schedule->first()->id:null])}}" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                            {{-- <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-default"><i class="fa fa-times"></i></a> --}}
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
