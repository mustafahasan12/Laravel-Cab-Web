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
                                     <h3 class="card-title">Price Information</h3>
                                  </div>
                                  <div class="card-body">
                                    <form action="{{route('prices.add')}}" method="POST" >
                                     @csrf
                                     <div class="row">
                                        <div class="col-md-4">
                                           <div class="form-group">
                                              <label><b>Payment Type</b></label>
                                              <select type="text" name="payment_type" class="form-control" required>
                                                  <option value="Liability"> Liability </option>
                                                  <option value="Affiliation"> Affiliation </option>
                                                  <option value="Workman"> Workman </option>
                                              </select>
                                           </div>
                                        </div>
                                        <div class="col-md-4">
                                           <div class="form-group">
                                              <label><b>Company Name</b></label>
                                              <input type="text" name="company_name" class="form-control" placeholder="Enter Company Name" required>
                                           </div>
                                        </div>
                                        <div class="col-md-4">
                                           <div class="form-group">
                                              <label><b>Cost Price</b></label>
                                              <input type="number" name="cost_price" class="form-control" required>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="row">
                                        <div class="col-md-4">
                                           <div class="form-group">
                                              <label> <b>Retail Price</b></label>
                                              <input class="form-control" name="retail_price" type="number" required>
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

