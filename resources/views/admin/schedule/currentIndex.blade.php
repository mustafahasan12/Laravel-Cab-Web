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

        <!-- Datatables Content -->

        <div class="table-responsive">
            <table id="example-datatable" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>Chauffeur_Number</th>
                        <th>Driver Name</th>
                        <th>From(Date)</th>
                        <th>To(Date)</th>
                        <th>Hours</th>
                        <th>Rest Days</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
             <tbody>
                 @foreach ($schedules as $schedule)
                 <tr>
                    <td class="text-center">{{$loop->iteration}}</td>
                    <td>{{$schedule->driver->Chauffeur_Number}}</td>
                    <td>{{$schedule->driver->First_Name }}</td>
                    <td>{{ ($schedule->start_weekend)?$schedule->start_weekend->format('D jS \\of M Y'):null }}</td>
                    <td>{{($schedule->start_weekend)?$schedule->end_weekend->format('D jS \\of M Y'):null }}</td>
                    <td>{{$schedule->total_hours}}</td>
                    <td>
                        @if($schedule->rest_days)
                        {{implode(", ",$schedule->rest_days)}}
                        @endif
                    </td>
                    <td class="text-center">
                        <div class="btn-group">

                            <a href="{{route('schedule.create',['id'=>$schedule->driver->id,'schedule_id'=>$schedule->id])}}" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>

                            @if(!$schedule->isDuplicate())
                            <a href="{{route('schedule.duplicate',['id'=>$schedule->id])}}" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-clipboard" aria-hidden="true"></i></a>
                            @endif
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
