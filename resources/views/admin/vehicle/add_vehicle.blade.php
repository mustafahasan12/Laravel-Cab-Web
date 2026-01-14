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
        <form method="POST" enctype="multipart/form-data" action="{{ route('vehicle_store') }}" class="form-horizontal form-grid">   
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
                                <input type="text" name="vehicle_maker" class="form-control" placeholder="Vehicle Maker" required>
                            </div>
                            <div class="col-md-4">
                                <label  class="control-label"> Vehicle Engine Type </label>
                                <select id="vehicle_engine_type" name="vehicle_engine_type" class="form-control" size="1" required>
                                    <option value="">Please select</option>
                                    <option value="Petrol">Petrol</option>
                                    <option value="Diesel">Diesel</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label  class="control-label"> Vehicle Model </label>
                                <input type="text" class="form-control" name="vehicle_model" placeholder="Vehicle Model" required>
                            </div>
                        
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">
                                <label  class="control-label"> Vehicle Type </label>
                                <select id="vehicle_type" name="vehicle_type" class="form-control" size="1" required>
                                    <option value="">Please select</option>
                                    @foreach ($vehicle_types as $vehicle_type)
                                    <option value="{{$vehicle_type->id}}">{{$vehicle_type->VT_Name}}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="col-md-4">
                                <label  class="control-label"> Vehicle Color </label>
                                <input type="text" class="form-control" name="vehicle_color" placeholder="Vehicle Color" required>
                            </div>
                            <div class="col-md-4">
                                <label  class="control-label"> Vehicle Initial Mileage </label>
                                <input type="text" class="form-control" name="vehicle_initial_mileage" placeholder="Vehicle Initial Mileage" required>
                            </div>
                        
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">
                                <label  class="control-label"> Vin Number</label>
                                <input type="text" class="form-control" name="vin_number" placeholder="Vin Number" required>
                            </div>
                            <div class="col-md-4">
                                <label  class="control-label"> Company</label>
                                <input type="text" class="form-control" name="company" placeholder="Company" required>
                            </div>
                            <div class="col-md-4">
                                <label  class="control-label"> Vehicle Image</label>
                                <input type="file" id="vehicle_image" name="vehicle_image" required>
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
                                <input type="text" class="form-control" name="emission_number" placeholder="Emission Number" required>
                            </div>
                            <div class="col-md-4">
                                <label  class="control-label"> Emission Expiry Date</label>
                                <input type="text" id="example-datepicker3" name="emi_expire" class="form-control input-datepicker-close text-center" data-date-format="yy/mm/dd" placeholder="yy/mm/dd" required>
                            </div>
                            <div class="col-md-4">
                                <label  class="control-label"> Medallion Number</label>
                                <select id="medallion_number" name="medallion_number" class="form-control" size="1" required>
                                    <option value="0">Please select</option>
                                    @foreach($mednums as $mednum)
                                    <option value="{{$mednum->id}}">{{$mednum->medallion_number}}</option>
                                    @endforeach
                                </select>
                            </div>
                        
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">
                                <label  class="control-label"> Medallion Expiry Date</label>
                                <input type="text" id="example-datepicker3" name="med_expire" class="form-control input-datepicker-close text-center" data-date-format="yy/mm/dd" placeholder="yy/mm/dd" required>
                            </div>
                            <div class="col-md-4">
                                <label  class="control-label"> Registration Number</label>
                                <input type="text" class="form-control" name="registration_number" placeholder="Registration Number" required>
                            </div>
                            <div class="col-md-4">
                                <label  class="control-label"> Registration Expiry </label>
                                <input type="text" id="example-datepicker3" name="reg_expire" class="form-control input-datepicker-close text-center" data-date-format="yy/mm/dd" placeholder="yy/mm/dd" required>
                            </div>

                            <button type="submit" class="btn btn-primary">
                                {{ __('Submit') }}
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




        
    