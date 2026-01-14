@extends('admin.layout.app')

@section('content')

    <div id="page-container">
       <div id="fx-container" class="fx-opacity">
          <div id="page-content" class="block">
             <div class="row gutter30">
                <div class="col-md-12">
                   <section class="content">
                      <div class="container-fluid">
                         <div class="row">
                         <div class="col-md-12">

                         @if ($message = Session::get('success'))
              <div class="alert alert-success alert-block">
              <button type="button" class="close" data-dismiss="alert">×</button>    
                      <strong>{{ $message }}</strong>
                  </div>
                          @endif

                               <!-- general form elements disabled -->
                               <div class="card card-success mb-3">
                                  <div class="bg-primary card-header">
                                     <h3 class="card-title">Rate Information</h3>
                                  </div>
                                  <div class="card-body">
                                    <form action="{{route('rates.add')}}" method="POST" >
                                     @csrf
                                     <div class="row">
                                        <div class="col-md-4">
                                           <div class="form-group">
                                              <label><b>Miles</b></label>
                                              <input type="text" name="miles" class="form-control" placeholder="Enter Miles" required>
                                           </div>
                                        </div>
                                        <div class="col-md-4">
                                           <div class="form-group">
                                              <label><b>End Miles</b></label>
                                              <input type="text" name="end_miles" class="form-control" placeholder="Enter End Miles" required>
                                           </div>
                                        </div>
                                        <div class="col-md-4">
                                           <div class="form-group">
                                              <label><b>Rates</b></label>
                                              <input type="text" name="rates" class="form-control" placeholder="Enter Rates" required>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="row">
                                        <div class="col-md-4">
                                           <div class="form-group">
                                              <label> <b>WC Rates</b></label>
                                              <input class="form-control" name="wc_rates" type="text" placeholder="Enter WC Rates" required>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="row">
                                         <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary"> Submit </button>
                                         </div>
                                     </div>
                                    </form> 
                                  </div>
                               </div>  
                          </div>
                         </div>
                      </div>
                   </section>
                </div>
             </div>
          </div>
       </div>
    </div>
  @endsection

