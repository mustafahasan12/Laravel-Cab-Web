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

                          @if ($message = Session::get('error'))
              <div class="alert alert-danger alert-block">
              <button type="button" class="close" data-dismiss="alert">×</button>    
                      <strong>{{ $message }}</strong>
                  </div>
                          @endif

                               <!-- general form elements disabled -->
                               <div class="card card-success mb-3">
                                  <div class="bg-primary card-header">
                                     <h3 class="card-title">Medallion Number Information</h3>
                                  </div>
                                  <div class="card-body">
                                    <form action="{{route('medallion.add')}}" method="POST" >
                                     @csrf
                                     <div class="row">
                                        <div class="col-md-6">
                                           <div class="form-group">
                                              <label><b>Medallion Number</b></label>
                                              <input type="number" name="medallion_number" class="form-control" required>
                                           </div>
                                        </div>
                                        <div class="col-md-6">
                                           <div class="form-group">
                                              <label><b>Expriy Medallion Number</b></label>
                                              <input type="date" name="medallion_number_exp" class="form-control" required>
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

