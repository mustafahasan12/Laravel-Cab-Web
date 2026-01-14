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
                                <i class="fa fa-thumbs-o-up animation-expandUp"></i>All Prices<br>
                            </h1>
                        </a>

                    </div>
                    <ul class="breadcrumb breadcrumb-top">
                        <li><i class="fa fa-th"></i></li>
                        <li>Tools</li>
                        <li>Prices</li>
                        <li><a href="{{route('tools.prices.list')}}">All Prices</a></li>
                    </ul>
                    <!-- END Datatables Header -->

                    @if ($message = Session::get('success'))
              <div class="alert alert-success alert-block">
              <button type="button" class="close" data-dismiss="alert">×</button>    
                      <strong>{{ $message }}</strong>
                  </div>
                          @endif

                      <!-- Datatables Content -->
      <a href="{{route('tools.prices.add')}}" > <input type="button" value="Add Prices" class="btn btn-block btn-primary"/>  </a>

<div class="table-responsive">
    <table id="example-datatable" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th class="text-center">#</th>
                <th>Payment Type</th>
                <th>Company Name</th>
                <th>Cost Price</th>
                <th>Retail Price</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
     <tbody>
     @foreach ($prices as $price)
        <tr>
           <td class="text-center">{{$price->price_id}}</td>
           <td class="text-center">{{$price->payment_type}}</td>
           <td class="text-center">{{$price->company_name}}</td>
           <td class="text-center">{{$price->cost_price}}</td>
           <td class="text-center">{{$price->retail_price}}</td>
           <td class="text-center">
                   <div class="btn-group">
                     <a href="{{route('tools.prices.edit',['id'=>$price->price_id])}}" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                     <a href="{{route('tools.prices.delete',['id'=>$price->price_id])}}" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-default"><i class="fa fa-times"></i></a>
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

