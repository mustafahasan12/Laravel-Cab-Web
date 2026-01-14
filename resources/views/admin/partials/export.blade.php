<form>

 
      
    <!--    <label class="control-label col-md-2" for="example-datepicker3">Datepicker (auto close on select)</label> -->
        <div class="col-md-2">
            <input type="text" id="date_of_service" name="date_of_service" class="form-control input-datepicker-close text-center" data-date-format="dd/mm/yy" placeholder="Select Date" autocomplete="off">
        </div>
        <div class="col-md-2">
            <select id="client_name" name="client_name" class="select-chosen" data-placeholder="Choose a Country..." style="width: 250px;">
            <option value="">Choose a Client...</option>
              @foreach ($taxi_Manifests as $item) 
                
                <option value="{{$item->Client_Name}}"> {{$item->Client_Name}} </option>

              @endforeach 
            </select>
        </div>
        <div class="col-sm-2">
        
            <input type="text" value="{{request()->search}}" class="form-control" name="search" placeholder="Enter Booking Id">
        </div>
        
        <div class="col-md-1">
        <input type="submit" value="Genterate" class="btn btn-primary"/>
        </div>

    

</form> 

<form method="POST" action="{{route('taxi_manifest_import')}}" enctype="multipart/form-data">
    @csrf
   <div class="form-group-row">
   
   
     <div class="col-md-2">
     <input type="file" name="file">
     
     </div>
     <div class="col-md-1">
     <input type="submit" id="upload-csv" value="Import Data" class="btn btn-primary"/>
     </div>

     <div class="col-md-1">
         <a href="{{route('taxi_manifest_export', ['search'=>request()])}}" > <input type="button" value="Export Data" class="btn btn-block btn-primary"/> </a>
     </div>
  </div>
 

</form> 

<table>

    <thead>
        <tr>
            <th class="text-center">#</th>
            <th>Start_Time</th>
            <th>Est_End_Time</th>
            <th>Trip_Duration </th>
            <th>Trip_Miles</th>
            <th>Date_Of_Service</th>
            <th>Run_Number</th>
            <th>Booking_ID</th>
            <th>Client_Name</th>
            <th>Space_On</th>
            <th>Origin_Street</th>
            <th>Origin_Comment</th>
            <th>Orig_Apt</th>
            <th>Origin_City</th>
            <th>Origin_Phone</th>
            <th>Origin_Lon</th>
            <th>Origin_Lat</th>
            <th>Space_Off</th>
            <th>Dest_Street</th>
            <th>Dest_Comment</th>
            <th>Dest_Apt</th>
            <th>Dest_City</th>
            <th>Dest_Phone</th>
            <th>Dest_Lon</th>
            <th>Dest_Lat</th>
            <th>Schedule_Time</th>
            <th>Neg_Time</th>
            <th>Appt_Time</th>
            <th>Origin_Actual_Arrive</th>
            <th>Origin_Actual_Depart</th>
            <th>Dest_Actual_Arrive</th>
            <th>Dest_Actual_Depart</th>
            <th>Trip_Distance</th>
            <th>Fare</th>
            <th>Fare_Collected</th>
            <th>Provider_Cost</th>
            <th>Adjusted_Cost</th>
            <th>Comments</th>
           
           
        </tr>
    </thead>
    <tbody>

        @foreach ($taxi_Manifests as $item)
            
        <tr>
                <td class="text-center">{{$loop->iteration}}</td>
                @if($item->distance_data)
                <td>
                   {{$item->schedule_time->format('h:i A')}}
                </td>
                <td>
                    {{($item->est_end_time)?$item->est_end_time->format('h:i A'):''}} 
                </td>
                <td>
                    @isset($item->distance_data->durationText)
                        {{$item->distance_data->durationText}}
                    @endif
                </td>
                <td>
                    @isset($item->distance_data->distance)
                        {{(int)$item->distance_data->distance * 0.000621}}
                    @endif
                </td>
                @endif
                <td>{{$item->Date_Of_Service}}</td>
                <td>{{$item->Run_Number}}</td>
                <td>{{$item->Booking_ID}}</td>
                <td>{{$item->Client_Name}}</td>
                <td>{{$item->Space_On}}</td>
                <td>{{$item->Origin_Street}}</td>
                <td>{{$item->Origin_Comment}}</td>
                <td>{{$item->Orig_Apt}}</td>
                <td>{{$item->Origin_City}}</td>
                <td>{{$item->Origin_Phone}}</td>
                <td>{{$item->Origin_Lon}}</td>
                <td>{{$item->Origin_Lat}}</td>
                <td>{{$item->Space_Off}}</td>
                <td>{{$item->Dest_Street}}</td>
                <td>{{$item->Dest_Comment}}</td>
                <td>{{$item->Dest_Apt}}</td>
                <td>{{$item->Dest_City}}</td>
                <td>{{$item->Dest_Phone}}</td>
                <td>{{$item->Dest_Lon}}</td>
                <td>{{$item->Dest_Lat}}</td>
                <td>{{$item->schedule_time->format('H:i A')}}</td>
                <td>{{$item->Neg_Time}}</td>
                <td>{{$item->Appt_Time}}</td>
                <td>{{$item->Origin_Actual_Arrive}}</td>
                <td>{{$item->Origin_Actual_Depart}}</td>
                <td>{{$item->Dest_Actual_Arrive}}</td>
                <td>{{$item->Dest_Actual_Depart}}</td>
                <td>{{$item->Trip_Distance}}</td>
                <td>{{$item->Fare}}</td>
                <td>{{$item->Fare_Collected}}</td>
                <td>{{$item->Provider_Cost}}</td>
                <td>{{$item->Adjusted_Cost}}</td>
                <td>{{$item->Comments}}</td>
        </tr>
        @endforeach
    </tbody>
</table>