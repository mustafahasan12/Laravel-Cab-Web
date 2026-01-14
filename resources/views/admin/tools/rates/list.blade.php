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
                                <i class="fa fa-thumbs-o-up animation-expandUp"></i>All Rates<br>
                            </h1>
                        </a>

                    </div>
                    <ul class="breadcrumb breadcrumb-top">
                        <li><i class="fa fa-th"></i></li>
                        <li>Tools</li>
                        <li>Rates</li>
                        <li><a href="{{route('tools.rates.list')}}">All Rates</a></li>
                    </ul>
                    <!-- END Datatables Header -->

                    @if ($message = Session::get('success'))
              <div class="alert alert-success alert-block">
              <button type="button" class="close" data-dismiss="alert">×</button>    
                      <strong>{{ $message }}</strong>
                  </div>
                          @endif

                      <!-- Datatables Content -->
      <a href="{{route('tools.rates.add')}}" > <input type="button" value="Add Rates" class="btn btn-block btn-primary"/>  </a>

<div class="table-responsive">
    <table id="example-datatable" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th class="text-center">#</th>
                <th>Miles</th>
                <th>End Miles</th>
                <th>Rates</th>
                <th>MWC Rates</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
     <tbody>
          @foreach ($rates as $rate)
        <tr>
           <td class="text-center">{{$rate->rate_id}}</td>
           <td class="text-center">{{$rate->miles}}</td>
           <td class="text-center">{{$rate->end_miles}}</td>
           <td class="text-center">{{$rate->a_rates}}</td>
           <td class="text-center">{{$rate->wc_rates}}</td>
           <td class="text-center">
                   <div class="btn-group">
                     <a href="{{route('tools.rates.edit',['id'=>$rate->rate_id])}}" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                     <a href="{{route('tools.rates.delete',['id'=>$rate->rate_id])}}" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-default"><i class="fa fa-times"></i></a>
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

