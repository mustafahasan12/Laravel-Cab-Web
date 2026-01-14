@extends('admin.layout.app')

@section('content')

<div id="fx-container" class="fx-opacity">
    <!-- Page content -->
    <div id="page-content" class="block">
        <!-- Forms General Header -->
        <div class="block-header">
            <!-- If you do not want a link in the header, instead of .header-title-link you can use a div with the class .header-section -->
            <a href="" class="header-title-link">
                <h1>
                    <i class="fa fa-wrench animation-expandUp"></i>Add Vehicle<br><small>!</small>
                </h1>
            </a>
        </div>
        <ul class="breadcrumb breadcrumb-top">
            <li><i class="fa fa-pencil-square-o"></i></li>
            <li> Home</li>
            <li><a href="">Manage Vehicle</a></li>
            <li><a href="">Add Vehicle</a></li>
        </ul>
      
        @if ($message = Session::get('success'))
              <div class="alert alert-success alert-block">
              <button type="button" class="close" data-dismiss="alert">×</button>    
                      <strong>{{ $message }}</strong>
                  </div>
                          @endif
        
        

        <!-- Input Grid Row -->
        <form method="POST" enctype="multipart/form-data" action="{{ route('vehicle_update' ,['id'=>$vehicle->id]) }}" class="form-horizontal form-grid">   
            @csrf
        <div class="row gutter30">
            <div class="col-md-12">
                <!-- Input Grid Block -->
                <div class="block">
                    <!-- Input Grid Title -->
                    <div class="block-title">
                        <h2>Vehicle Identification</h2>
                    </div>
                    <!-- END Input Grid Title -->

                    <!-- Input Grid Content -->
                    
                        <div class="form-group">
                            <div class="col-md-4">
                                <label  class="control-label"> Vehicle Maker</label>
                                <input type="text" name="vehicle_maker" value="{{$vehicle->Vehicle_Maker}}" class="form-control" placeholder="Vehicle Maker">
                            </div>
                            <div class="col-md-4">
                                <label  class="control-label"> Vehicle Engine Type </label>
                                <select id="vehicle_engine_type" name="vehicle_engine_type" class="form-control" size="1">
                                    <option value="0">{{$vehicle->Vehicle_Engine_Type}}</option>
                                    <option value="1">Option #1</option>
                                    <option value="2">Option #2</option>
                                    <option value="3">Option #3</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label  class="control-label"> Vehicle Model </label>
                                <input type="text" class="form-control" name="vehicle_model" value="{{$vehicle->Vehicle_Model}}" placeholder="Vehicle Model">
                            </div>
                        
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">
                                <label  class="control-label"> Vehicle Type </label>
                                <select id="vehicle_type" name="vehicle_type" class="form-control" size="1">
                                    <option value="0">{{$vehicle->Vehicle_Type}}</option>
                                    <option value="1">Option #1</option>
                                    <option value="2">Option #2</option>
                                    <option value="3">Option #3</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label  class="control-label"> Vehicle Color </label>
                                <input type="text" class="form-control" name="vehicle_color" value="{{$vehicle->Vehicle_Color}}" placeholder="Vehicle Color">
                            </div>
                            <div class="col-md-4">
                                <label  class="control-label"> Vehicle Initial Mileage </label>
                                <input type="text" class="form-control" name="vehicle_initial_mileage" value="{{$vehicle->Vehicle_Initial_Mileage}}" placeholder="Vehicle Initial Mileage">
                            </div>
                        
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">
                                <label  class="control-label"> Vin Number</label>
                                <input type="text" class="form-control" name="vin_number" value="{{$vehicle->Vin_Number}}" placeholder="Vin Number">
                            </div>
                            <div class="col-md-4">
                                <label  class="control-label"> Company</label>
                                <input type="text" class="form-control" name="company" value="{{$vehicle->Company}}" placeholder="Company">
                            </div>
                            <div class="col-md-4">
                                <label  class="control-label"> Vehicle Image</label>
                                <input type="file" id="vehicle_image" name="vehicle_image">
                            </div>
                        
                        </div>
                      
                  
                    <!-- END Input Grid Content -->
                </div>
                <!-- END Input Grid Block -->
            </div>
            
        </div>
        <div class="row gutter30">
            <div class="col-md-12">
                <!-- Input Grid Block -->
                <div class="block">
                    <!-- Input Grid Title -->
                    <div class="block-title">
                        <h2>Vehicle Renewals</h2>
                    </div>
                    <!-- END Input Grid Title -->

                    <!-- Input Grid Content -->
                    
                        <div class="form-group">
                            <div class="col-md-4">
                                <label  class="control-label"> Emission Number</label>
                                <input type="text" class="form-control" name="emission_number" value="{{$vehicle->Emission_Number}}" placeholder="Emission Number">
                            </div>
                            <div class="col-md-4">
                                <label  class="control-label"> Emission Expiry Date</label>
                                <input type="text" id="example-datepicker3" name="emi_expire" value="{{$vehicle->Emission_Expiry_Date}}" class="form-control input-datepicker-close text-center" data-date-format="yy/mm/dd" placeholder="yy/mm/dd">
                            </div>
                            <div class="col-md-4">
                                <label  class="control-label"> Medallion Number</label>
                                <select id="medallion_number" name="medallion_number" class="form-control" size="1">
                                    <option value="0">{{$vehicle->Medallion_Number}}</option>
                                    <option value="1">Option #1</option>
                                    <option value="2">Option #2</option>
                                    <option value="3">Option #3</option>
                                </select>
                            </div>
                        
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">
                                <label  class="control-label"> Medallion Expiry Date</label>
                                <input type="text" id="example-datepicker3" name="med_expire"  value="{{$vehicle->Medallion_Expiry_Date}}" class="form-control input-datepicker-close text-center" data-date-format="yy/mm/dd" placeholder="yy/mm/dd">
                            </div>
                            <div class="col-md-4">
                                <label  class="control-label"> Registration Number</label>
                                <input type="text" class="form-control" name="registration_number"   value="{{$vehicle->Registration_Number}}" placeholder="Registration Number">
                            </div>
                            <div class="col-md-4">
                                <label  class="control-label"> Registration Expiry </label>
                                <input type="text" id="example-datepicker3" name="reg_expire" value="{{$vehicle->Registration_Expiry}}" class="form-control input-datepicker-close text-center" data-date-format="yy/mm/dd" placeholder="yy/mm/dd">
                            </div>

                            <button type="submit" class="btn btn-primary">
                                {{ __('Update') }}
                            </button>
                        
                        </div>
                       
                  
                    <!-- END Input Grid Content -->
                </div>
                <!-- END Input Grid Block -->
            </div>
            
        </div>
    </form>
        <!-- END Input Grid Row -->
    </div>
    <!-- END Page Content -->

    <!-- Footer -->

    <!-- END Footer -->
</div>

  
@endsection



        
    