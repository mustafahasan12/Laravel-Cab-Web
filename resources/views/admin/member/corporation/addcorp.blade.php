@extends('admin.layout.app')

@section('content')
@foreach($membercorps as $membercorp)
<form action="{{route('corp.add',['id'=>$membercorp->id])}}"  method="POST">
    @csrf
    <div id="page-container">
       <div id="fx-container" class="fx-opacity">
          <div id="page-content" class="block">
             <div class="row gutter30">
                <div class="col-md-12">
                    <section class="content">
                        <div class="container-fluid">
                           <div class="row">
                              <!-- left column -->
                              <div class="col-md-12">


                              @if ($message = Session::get('success'))
              <div class="alert alert-success alert-block">
              <button type="button" class="close" data-dismiss="alert">×</button>    
                      <strong>{{ $message }}</strong>
                  </div>
                          @endif

                   <div class="card-body">
                      <div class="card card-success mb-3">
                        <div class="bg-primary card-header">
                            <h3 class="card-title">Add Corporation</h3>
                        </div>
                                          
                           <div class="card-body">

                                 <div class="row">
                                     <div class="col-md-3 col-sm-3 col-lg-3">
                                     <label style="font-weight: bold;"> Member Name </label>
                                           <select class="form-control" name="member_id" required>
                                              <option value="{{$membercorp->id}}"> {{$membercorp->first_name}} {{$membercorp->middle_name}} {{$membercorp->last_name}} </option>
                                             
                                           </select>
                                     </div>
                                     <div class="col-md-3 col-sm-3 col-lg-3">
                                     <label style="font-weight: bold;"> Status </label>
                                     <select class="form-control" name="status" required>
                                             <option value="Active"> Active </option>
                                             <option value="InActive"> InActive </option>
                                      </select>
                                     </div>
                                     <div class="col-md-3 col-sm-3 col-lg-3">
                                          <label style="font-weight: bold;"> Corporation Name </label>
                                          <input type="text" class="form-control" name="corporation_name" Placeholder="Enter Corporation Name" required/>
                                     </div>
                                     <div class="col-md-3 col-sm-3 col-lg-3">
                                          <label style="font-weight: bold;"> Incorporation Date </label>
                                          <input type="date" class="form-control" name="incorporation_date" required/>
                                    
                                     </div>
                                 </div>   <br>

                                 <div class="row">
                                     <div class="col-md-3 col-sm-3 col-lg-3">
                                     <label> State </label>
                                     <select class="form-control" name="state" required>
                                            <option value="AL">Alabama</option>
	<option value="AK">Alaska</option>
	<option value="AZ">Arizona</option>
	<option value="AR">Arkansas</option>
	<option value="CA">California</option>
	<option value="CO">Colorado</option>
	<option value="CT">Connecticut</option>
	<option value="DE">Delaware</option>
	<option value="DC">District Of Columbia</option>
	<option value="FL">Florida</option>
	<option value="GA">Georgia</option>
	<option value="HI">Hawaii</option>
	<option value="ID">Idaho</option>
	<option value="IL">Illinois</option>
	<option value="IN">Indiana</option>
	<option value="IA">Iowa</option>
	<option value="KS">Kansas</option>
	<option value="KY">Kentucky</option>
	<option value="LA">Louisiana</option>
	<option value="ME">Maine</option>
	<option value="MD">Maryland</option>
	<option value="MA">Massachusetts</option>
	<option value="MI">Michigan</option>
	<option value="MN">Minnesota</option>
	<option value="MS">Mississippi</option>
	<option value="MO">Missouri</option>
	<option value="MT">Montana</option>
	<option value="NE">Nebraska</option>
	<option value="NV">Nevada</option>
	<option value="NH">New Hampshire</option>
	<option value="NJ">New Jersey</option>
	<option value="NM">New Mexico</option>
	<option value="NY">New York</option>
	<option value="NC">North Carolina</option>
	<option value="ND">North Dakota</option>
	<option value="OH">Ohio</option>
	<option value="OK">Oklahoma</option>
	<option value="OR">Oregon</option>
	<option value="PA">Pennsylvania</option>
	<option value="RI">Rhode Island</option>
	<option value="SC">South Carolina</option>
	<option value="SD">South Dakota</option>
	<option value="TN">Tennessee</option>
	<option value="TX">Texas</option>
	<option value="UT">Utah</option>
	<option value="VT">Vermont</option>
	<option value="VA">Virginia</option>
	<option value="WA">Washington</option>
	<option value="WV">West Virginia</option>
	<option value="WI">Wisconsin</option>
	<option value="WY">Wyoming</option>
                                      </select>
                                     </div>
                                     <div class="col-md-3 col-sm-3 col-lg-3">
                                          <label style="font-weight: bold;"> Corporation Type </label>
                                          <input type="text" class="form-control" name="corporation_type" required/>
                                    
                                     </div>
                                     <div class="col-md-3 col-sm-3 col-lg-3">
                                          <label style="font-weight: bold;"> Corporation Sub Type </label>
                                          <input type="text" class="form-control" name="corporation_sub_type" required/>
                                     </div>
                                     <div class="col-md-3 col-sm-3 col-lg-3">
                                          <label style="font-weight: bold;"> IRIS # </label>
                                          <input type="number" class="form-control" name="irisno" required/>
                                     </div>
                                 </div> 
                                       <br>

                                       <div class="row">
                                     <div class="col-md-3 col-sm-3 col-lg-3">
                                          <label style="font-weight: bold;"> PIN </label>
                                          <input type="number" class="form-control" name="pin" required/>
                                     </div>
                                     <div class="col-md-3 col-sm-3 col-lg-3">
                                          <label style="font-weight: bold;"> Corporate Registered Address </label>
                                          <input type="text" class="form-control" name="corporate_registered_address" required/>
                                     </div>
                                     <div class="col-md-3 col-sm-3 col-lg-3">
                                     <label> State </label>
                                     <select class="form-control" name="state1" required>
                                            <option value="AL">Alabama</option>
	<option value="AK">Alaska</option>
	<option value="AZ">Arizona</option>
	<option value="AR">Arkansas</option>
	<option value="CA">California</option>
	<option value="CO">Colorado</option>
	<option value="CT">Connecticut</option>
	<option value="DE">Delaware</option>
	<option value="DC">District Of Columbia</option>
	<option value="FL">Florida</option>
	<option value="GA">Georgia</option>
	<option value="HI">Hawaii</option>
	<option value="ID">Idaho</option>
	<option value="IL">Illinois</option>
	<option value="IN">Indiana</option>
	<option value="IA">Iowa</option>
	<option value="KS">Kansas</option>
	<option value="KY">Kentucky</option>
	<option value="LA">Louisiana</option>
	<option value="ME">Maine</option>
	<option value="MD">Maryland</option>
	<option value="MA">Massachusetts</option>
	<option value="MI">Michigan</option>
	<option value="MN">Minnesota</option>
	<option value="MS">Mississippi</option>
	<option value="MO">Missouri</option>
	<option value="MT">Montana</option>
	<option value="NE">Nebraska</option>
	<option value="NV">Nevada</option>
	<option value="NH">New Hampshire</option>
	<option value="NJ">New Jersey</option>
	<option value="NM">New Mexico</option>
	<option value="NY">New York</option>
	<option value="NC">North Carolina</option>
	<option value="ND">North Dakota</option>
	<option value="OH">Ohio</option>
	<option value="OK">Oklahoma</option>
	<option value="OR">Oregon</option>
	<option value="PA">Pennsylvania</option>
	<option value="RI">Rhode Island</option>
	<option value="SC">South Carolina</option>
	<option value="SD">South Dakota</option>
	<option value="TN">Tennessee</option>
	<option value="TX">Texas</option>
	<option value="UT">Utah</option>
	<option value="VT">Vermont</option>
	<option value="VA">Virginia</option>
	<option value="WA">Washington</option>
	<option value="WV">West Virginia</option>
	<option value="WI">Wisconsin</option>
	<option value="WY">Wyoming</option>
                                      </select>
                                       </div>
                                     <div class="col-md-3 col-sm-3 col-lg-3">
                                          <label style="font-weight: bold;"> FEIN # </label>
                                          <input type="number" class="form-control" name="feinno" required/>
                                     </div>
                                 </div>   <br>   

                                   <div class="row">
                                     <div class="col-md-3 col-sm-3 col-lg-3">
                                          <label style="font-weight: bold;"> Corporate Owner Chauffeur # </label>
                                          <input type="number" class="form-control" name="corporate_owner_chauffeurno" required/>
                                     </div>
                                     <div class="col-md-3 col-sm-3 col-lg-3">
                                          <label style="font-weight: bold;"> File Number </label>
                                          <input type="number" class="form-control" name="file_number" required/>
                                     </div>
                                     <div class="col-md-3 col-sm-3 col-lg-3">
                                          <label style="font-weight: bold;"> Annual Report Filling Date </label>
                                          <input type="date" class="form-control" name="annual_report_filling_date" required/>
                                
                                       </div>
                                     <div class="col-md-3 col-sm-3 col-lg-3">
                                          <label style="font-weight: bold;"> Corporation Address </label>
                                          <input type="text" class="form-control" name="corporation_address" required/>
                                     </div>
                                 </div> <br>  

                                 <div class="row">
                                     <div class="col-md-3 col-sm-3 col-lg-3">
                                          <label style="font-weight: bold;"> City </label>
                                          <input type="text" class="form-control" name="city" required/>
                                     </div>
                                     <div class="col-md-3 col-sm-3 col-lg-3">
                                         <label style="font-weight: bold;"> Zip Code </label>
                                          <input type="number" class="form-control" name="zip_code" required/>
                                     </div>
                                     <div class="col-md-3 col-sm-3 col-lg-3">
                                        <label style="font-weight: bold;"> Agent Name </label>
                                          <input type="text" class="form-control" name="agent_name" required/>
                                       </div>
                                     <div class="col-md-3 col-sm-3 col-lg-3">
                                          <label style="font-weight: bold;"> Email </label>
                                          <input type="email" class="form-control" name="email" required/>
                                     </div>
                                 </div> <br>

                                 <div class="row">
                                     <div class="col-md-3 col-sm-3 col-lg-3">
                                          <label style="font-weight: bold;"> Phone Number </label>
                                          <input type="number" class="form-control" name="phone_number" required/>
                                     </div>
                                     <div class="col-md-3 col-sm-3 col-lg-3">
                                        <label style="font-weight: bold;"> Agent Address 1 </label>
                                          <input type="text" class="form-control" name="agent_address1" required/>
                                     </div>
                                     <div class="col-md-3 col-sm-3 col-lg-3">
                                        <label style="font-weight: bold;"> Agent Address 2 </label>
                                          <input type="text" class="form-control" name="agent_address2" required/>
                                       </div>
                                     <div class="col-md-3 col-sm-3 col-lg-3">
                                     <label style="font-weight: bold;"> State </label>
                                     <select class="form-control" name="state2" required>
                                            <option value="AL">Alabama</option>
	<option value="AK">Alaska</option>
	<option value="AZ">Arizona</option>
	<option value="AR">Arkansas</option>
	<option value="CA">California</option>
	<option value="CO">Colorado</option>
	<option value="CT">Connecticut</option>
	<option value="DE">Delaware</option>
	<option value="DC">District Of Columbia</option>
	<option value="FL">Florida</option>
	<option value="GA">Georgia</option>
	<option value="HI">Hawaii</option>
	<option value="ID">Idaho</option>
	<option value="IL">Illinois</option>
	<option value="IN">Indiana</option>
	<option value="IA">Iowa</option>
	<option value="KS">Kansas</option>
	<option value="KY">Kentucky</option>
	<option value="LA">Louisiana</option>
	<option value="ME">Maine</option>
	<option value="MD">Maryland</option>
	<option value="MA">Massachusetts</option>
	<option value="MI">Michigan</option>
	<option value="MN">Minnesota</option>
	<option value="MS">Mississippi</option>
	<option value="MO">Missouri</option>
	<option value="MT">Montana</option>
	<option value="NE">Nebraska</option>
	<option value="NV">Nevada</option>
	<option value="NH">New Hampshire</option>
	<option value="NJ">New Jersey</option>
	<option value="NM">New Mexico</option>
	<option value="NY">New York</option>
	<option value="NC">North Carolina</option>
	<option value="ND">North Dakota</option>
	<option value="OH">Ohio</option>
	<option value="OK">Oklahoma</option>
	<option value="OR">Oregon</option>
	<option value="PA">Pennsylvania</option>
	<option value="RI">Rhode Island</option>
	<option value="SC">South Carolina</option>
	<option value="SD">South Dakota</option>
	<option value="TN">Tennessee</option>
	<option value="TX">Texas</option>
	<option value="UT">Utah</option>
	<option value="VT">Vermont</option>
	<option value="VA">Virginia</option>
	<option value="WA">Washington</option>
	<option value="WV">West Virginia</option>
	<option value="WI">Wisconsin</option>
	<option value="WY">Wyoming</option>
                                      </select>
                                     </div>
                                 </div>  <br>


                                 <div class="row">
                                 <div class="col-md-3 col-sm-3 col-lg-3">
                                          <label style="font-weight: bold;"> City </label>
                                          <input type="text" class="form-control" name="city1" required/>
                                     </div>
                                     <div class="col-md-3 col-sm-3 col-lg-3">
                                         <label style="font-weight: bold;"> Zip Code </label>
                                          <input type="number" class="form-control" name="zip_code1" required/>
                                     </div>
                                     <div class="col-md-3 col-sm-3 col-lg-3">
                                     <label style="font-weight: bold;"> Agent Change Date </label>
                                          <input type="date" class="form-control" name="agent_change_date" required/>
                                       </div>
                                 </div> <br>

                                 <div class="row">
                                 <div class="col-md-3 col-sm-3 col-lg-3">
                                          <label style="font-weight: bold;"> President Name </label>
                                          <input type="text" class="form-control" name="president_name" required/>
                                     </div>
                                     <div class="col-md-3 col-sm-3 col-lg-3">
                                         <label style="font-weight: bold;"> E-Mail </label>
                                          <input type="email" class="form-control" name="email1" required/>
                                     </div>
                                     <div class="col-md-3 col-sm-3 col-lg-3">
                                     <label style="font-weight: bold;"> Phone Number </label>
                                          <input type="number" class="form-control" name="phone_number1" required/>
                                       </div>
                                     <div class="col-md-3 col-sm-3 col-lg-3">
                                     <label style="font-weight: bold;"> President Address 1 </label>
                                          <input type="text" class="form-control" name="president_address1" required/>
                                     </div>
                                 </div> <br>

                                 <div class="row">
                                     <div class="col-md-3 col-sm-3 col-lg-3">
                                     <label style="font-weight: bold;"> President Address 2 </label>
                                          <input type="text" class="form-control" name="president_address2" required/>
                                     </div>
                                     <div class="col-md-3 col-sm-3 col-lg-3">
                                     <label style="font-weight: bold;"> State </label>
                                     <select class="form-control" name="state3" required>
                                            <option value="AL">Alabama</option>
	<option value="AK">Alaska</option>
	<option value="AZ">Arizona</option>
	<option value="AR">Arkansas</option>
	<option value="CA">California</option>
	<option value="CO">Colorado</option>
	<option value="CT">Connecticut</option>
	<option value="DE">Delaware</option>
	<option value="DC">District Of Columbia</option>
	<option value="FL">Florida</option>
	<option value="GA">Georgia</option>
	<option value="HI">Hawaii</option>
	<option value="ID">Idaho</option>
	<option value="IL">Illinois</option>
	<option value="IN">Indiana</option>
	<option value="IA">Iowa</option>
	<option value="KS">Kansas</option>
	<option value="KY">Kentucky</option>
	<option value="LA">Louisiana</option>
	<option value="ME">Maine</option>
	<option value="MD">Maryland</option>
	<option value="MA">Massachusetts</option>
	<option value="MI">Michigan</option>
	<option value="MN">Minnesota</option>
	<option value="MS">Mississippi</option>
	<option value="MO">Missouri</option>
	<option value="MT">Montana</option>
	<option value="NE">Nebraska</option>
	<option value="NV">Nevada</option>
	<option value="NH">New Hampshire</option>
	<option value="NJ">New Jersey</option>
	<option value="NM">New Mexico</option>
	<option value="NY">New York</option>
	<option value="NC">North Carolina</option>
	<option value="ND">North Dakota</option>
	<option value="OH">Ohio</option>
	<option value="OK">Oklahoma</option>
	<option value="OR">Oregon</option>
	<option value="PA">Pennsylvania</option>
	<option value="RI">Rhode Island</option>
	<option value="SC">South Carolina</option>
	<option value="SD">South Dakota</option>
	<option value="TN">Tennessee</option>
	<option value="TX">Texas</option>
	<option value="UT">Utah</option>
	<option value="VT">Vermont</option>
	<option value="VA">Virginia</option>
	<option value="WA">Washington</option>
	<option value="WV">West Virginia</option>
	<option value="WI">Wisconsin</option>
	<option value="WY">Wyoming</option>
                                      </select>
                                     </div>
                                     <div class="col-md-3 col-sm-3 col-lg-3">
                                          <label style="font-weight: bold;"> City </label>
                                          <input type="text" class="form-control" name="city2" required/>
                                     </div>
                                     <div class="col-md-3 col-sm-3 col-lg-3">
                                         <label style="font-weight: bold;"> Zip Code </label>
                                          <input type="number" class="form-control" name="zip_code2" required/>
                                     </div>
                                 </div> <br>

                                 <div class="row">
                                 <div class="col-md-3 col-sm-3 col-lg-3">
                                          <label style="font-weight: bold;"> Secretary Name </label>
                                          <input type="text" class="form-control" name="secretary_name" required/>
                                     </div>
                                     <div class="col-md-3 col-sm-3 col-lg-3">
                                         <label style="font-weight: bold;"> E-Mail </label>
                                          <input type="email" class="form-control" name="email2" required/>
                                     </div>
                                     <div class="col-md-3 col-sm-3 col-lg-3">
                                     <label style="font-weight: bold;"> Phone Number </label>
                                          <input type="number" class="form-control" name="phone_number2" required/>
                                       </div>
                                     <div class="col-md-3 col-sm-3 col-lg-3">
                                     <label style="font-weight: bold;"> Secretary Address 1 </label>
                                          <input type="text" class="form-control" name="secretary_address1" required/>
                                     </div>
                                 </div> <br>

                                 <div class="row">
                                     <div class="col-md-3 col-sm-3 col-lg-3">
                                     <label style="font-weight: bold;"> Secretary Address 2 </label>
                                          <input type="text" class="form-control" name="secretary_address2" required/>
                                     </div>
                                     <div class="col-md-3 col-sm-3 col-lg-3">
                                     <label style="font-weight: bold;"> State </label>
                                     <select class="form-control" name="state4" required>
                                            <option value="AL">Alabama</option>
	<option value="AK">Alaska</option>
	<option value="AZ">Arizona</option>
	<option value="AR">Arkansas</option>
	<option value="CA">California</option>
	<option value="CO">Colorado</option>
	<option value="CT">Connecticut</option>
	<option value="DE">Delaware</option>
	<option value="DC">District Of Columbia</option>
	<option value="FL">Florida</option>
	<option value="GA">Georgia</option>
	<option value="HI">Hawaii</option>
	<option value="ID">Idaho</option>
	<option value="IL">Illinois</option>
	<option value="IN">Indiana</option>
	<option value="IA">Iowa</option>
	<option value="KS">Kansas</option>
	<option value="KY">Kentucky</option>
	<option value="LA">Louisiana</option>
	<option value="ME">Maine</option>
	<option value="MD">Maryland</option>
	<option value="MA">Massachusetts</option>
	<option value="MI">Michigan</option>
	<option value="MN">Minnesota</option>
	<option value="MS">Mississippi</option>
	<option value="MO">Missouri</option>
	<option value="MT">Montana</option>
	<option value="NE">Nebraska</option>
	<option value="NV">Nevada</option>
	<option value="NH">New Hampshire</option>
	<option value="NJ">New Jersey</option>
	<option value="NM">New Mexico</option>
	<option value="NY">New York</option>
	<option value="NC">North Carolina</option>
	<option value="ND">North Dakota</option>
	<option value="OH">Ohio</option>
	<option value="OK">Oklahoma</option>
	<option value="OR">Oregon</option>
	<option value="PA">Pennsylvania</option>
	<option value="RI">Rhode Island</option>
	<option value="SC">South Carolina</option>
	<option value="SD">South Dakota</option>
	<option value="TN">Tennessee</option>
	<option value="TX">Texas</option>
	<option value="UT">Utah</option>
	<option value="VT">Vermont</option>
	<option value="VA">Virginia</option>
	<option value="WA">Washington</option>
	<option value="WV">West Virginia</option>
	<option value="WI">Wisconsin</option>
	<option value="WY">Wyoming</option>
                                      </select>
                                     </div>
                                     <div class="col-md-3 col-sm-3 col-lg-3">
                                          <label style="font-weight: bold;"> City </label>
                                          <input type="text" class="form-control" name="city3" required/>
                                     </div>
                                     <div class="col-md-3 col-sm-3 col-lg-3">
                                         <label style="font-weight: bold;"> Zip Code </label>
                                          <input type="number" class="form-control" name="zip_code3" required/>
                                     </div>
                                 </div> <br>

                                 <br>  

                                  </div>
                                       
                                    </div>
                                <div class="col-md-12" >
                                        <input class="btn btn-success" type="submit"  value="submit">
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
 </form>
 @endforeach 
@endsection


