
<table class="table table-bordered">
    <thead>

        <tr>
            <th class="text-center">#</th>
            <th> Start_Time</th>
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
        <tr class="spinner-border">
            <td class="text-center" colspan="12">
                <i class="fa fa-spinner fa-spin-fast fa-5x "></i>
                <p>Uploading...</p>
            </td>
        </tr>

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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

jQuery('.spinner-border').hide();
            jQuery('#upload-csv').click(function(){

              jQuery('.spinner-border').show();

            });


            $.ajax({
                        url: '{{route("taxi_manifest_import")}}',
                        type:"POST",
                        data:FormData,
                        processData: false,
                        contentType: false,
                        cache:false,
                        beforeSend: function() {

                        },
                        error : function(xhr, ajaxOptions, thrownError){

                        }
                        ,
                        success: function(response){


                            jQuery('.spinner-border').hide();


                        }
                    });



</script>

