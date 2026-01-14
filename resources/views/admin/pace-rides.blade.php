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
                                <i class="fa fa-thumbs-o-up animation-expandUp"></i>Pace Rides Reports<br><small>for fileds</small>
                            </h1>
                        </a>

                    </div>
                    <ul class="breadcrumb breadcrumb-top">
                        <li><i class="fa fa-th"></i></li>
                        <li>Tickyplex</li>
                        <li><a href="">Pace Rides</a></li>
                    </ul>
                    <!-- END Datatables Header -->

                    <!-- Datatables Content -->
                    <div class="form-group-row">
                        <form>



                            <!--    <label class="control-label col-md-2" for="example-datepicker3">Datepicker (auto close on select)</label> -->
                                <div class="col-md-2">
                                    <input type="text" id="date_of_service" name="date_of_service" class="form-control input-datepicker-close text-center" data-date-format="dd/mm/yy" placeholder="Select Date" autocomplete="off">
                                </div>
                                <div class="col-md-2">
                                    <select id="client_name" name="client_name" class="select-chosen" data-placeholder="Choose a Client" style="width: 250px;">
                                    <option value="">Choose a Client...</option>
                                      @foreach ($taxi_Manifests as $item)

                                        <option value="{{$item->Client_Name}}"> {{$item->Client_Name}} </option>

                                      @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-2">

                                    <input type="text" value="{{request()->search}}" class="form-control" name="search" placeholder="Enter Booking Id">
                                </div>

                                <div class="col-md-1">
                                <input type="submit" value="Genterate" class="btn btn-primary"/>
                                </div>



                        </form>



                        <form method="POST" action="{{route('taxi_manifest_import')}}" enctype="multipart/form-data">
                           @csrf
                          <div class="form-group-row">


                            <div class="col-md-2">
                            <input type="file" name="file">

                            </div>
                            <div class="col-md-1">
                            <input type="submit" id="upload-csv" value="Import Data" class="btn btn-primary"/>
                            </div>

                            <div class="col-md-1">
                                <a href="{{route('taxi_manifest_export',['search'=>request()->search,'client_name'=>request()->client_name,'date_of_service'=>request()->date_of_service])}}" > <input type="button" value="Export Data" class="btn btn-block btn-primary"/> </a>
                            </div>

                         </div>


                       </form>


                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{route('pace_rides')}}" > <input type="button" value="View All Records" class="btn btn-block btn-primary"/> </a>
                        </div>
                    </div>

                    <div class="table-responsive">
                      @include('admin.partials.exportTable')
                    </div>
                    <!-- END Datatables Content -->
                </div>
                <!-- END Page Content -->


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
