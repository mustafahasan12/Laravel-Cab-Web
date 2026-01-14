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
                                     <h3 class="card-title"> Update Charge Information</h3>
                                  </div>
                                  <div class="card-body">
                                    <form action="{{route('charges.edit',['id'=>$charges->charge_id])}}" method="POST" >
                                     @csrf
                                     <div class="row">
                                        <div class="col-md-4">
                                           <div class="form-group">
                                              <label><b>Cost</b></label>
                                              <input type="text" name="cost" class="form-control" value="{{$charges->cost}}" >
                                           </div>
                                        </div>
                                        <div class="col-md-4">
                                           <div class="form-group">
                                              <label><b>Retail</b></label>
                                              <input type="text" name="retail" class="form-control" value="{{$charges->retail}}" >
                                           </div>
                                        </div>
                                        <div class="col-md-4">
                                           <div class="form-group">
                                              <label><b>Year</b></label>
                                              <input type="text" name="year" class="form-control" value="{{$charges->year}}" >
                                           </div>
                                        </div>
                                     </div>
                                     <div class="row">
                                        <div class="col-md-4">
                                           <div class="form-group">
                                              <label> <b>Collision</b></label>
                                              <select class="form-control" name="collision" >
                                              <option value="{{$charges->collision}}"> {{$charges->collision}} </option> 
                                                 <option value="500"> $500 </option> 
                                                 <option value="1000"> $1000 </option> 
                                                 <option value="5000"> $5000 </option> 
                                              </select>                                 
                                              </div>
                                        </div>
                                     </div>
                                     <div class="row">
                                         <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary"> Update </button>
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

