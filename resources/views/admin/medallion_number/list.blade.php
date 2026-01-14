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
                                <i class="fa fa-thumbs-o-up animation-expandUp"></i>All Medallion Numbers<br>
                            </h1>
                        </a>

                    </div>
                    <ul class="breadcrumb breadcrumb-top">
                        <li><i class="fa fa-th"></i></li>
                        <li>Medallion Number</li>
                        <li><a href="{{route('medallion.list')}}">All Medallion Numbers</a></li>
                    </ul>
                    <!-- END Datatables Header -->

                    @if ($message = Session::get('success'))
              <div class="alert alert-success alert-block">
              <button type="button" class="close" data-dismiss="alert">×</button>    
                      <strong>{{ $message }}</strong>
                  </div>
                          @endif

                      <!-- Datatables Content -->
      <a href="{{route('medallion.create')}}" > <input type="button" value="Add Medallion Number" class="btn btn-block btn-primary"/>  </a>
              <br>
<div class="table-responsive">
    <table id="example-datatable" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th class="text-center">#</th>
                <th class="text-center">Medallion Number</th>
                <th class="text-center">Expiry Medallion Number</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
     <tbody>
      
     @foreach ($meddnums as $meddnum)
        <tr>
           <td class="text-center">{{$meddnum->id}}</td>
           <td class="text-center">{{$meddnum->medallion_number}}</td>
           <td class="text-center">{{$meddnum->medallion_number_exp}}</td>
           <td class="text-center">
                   <div class="btn-group">
                     <a href="{{route('medallion.edit',['id'=>$meddnum->id])}}" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                     <a href="{{route('medallion.delete',['id'=>$meddnum->id])}}" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-default"><i class="fa fa-times"></i></a>
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

            </div>
            </div>
            <!-- END FX Container -->
  @endsection

