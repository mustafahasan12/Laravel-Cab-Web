<?php

namespace App\Imports;

use App\Taxi_Manifest;
use Maatwebsite\Excel\Concerns\ToModel;

use Illuminate\Support\Str;
use Pnlinh\GoogleDistance\Facades\GoogleDistance;
use TeamPickr\DistanceMatrix\Licenses\StandardLicense;
use TeamPickr\DistanceMatrix\DistanceMatrix;
use App\Rate;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class Taxi_ManifestImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        /*
        $tex = new Taxi_Manifest;
        $tex->Date_Of_Service =  $row["date_of_service"];
        $tex->Booking_ID = $row["booking_id"] ;

        $tex->Save();
        */

       // $addressFrom = '9016 Lamon Ave, Skokie, IL, USA';
       // $addressTo   = '6052 S Throop St, Chicago, IL, USA';

        // Get distance in km

        $license = new StandardLicense(env('GOOGLE_MAPS_KEY'));



        $rate = Rate::whereRaw('? between miles and end_miles', $row[60])->first();

        $Provider_Cost = null;

        if(Str::contains($row[37], 'WH'))
        {
            if($rate)
            $Provider_Cost = $rate->wc_rates;
        }
        elseif(Str::contains($row[37], 'AM'))
        {
            if($rate)
            $Provider_Cost = $rate->a_rates;
            // goto rates table and fetch wc_rates coloum value
        }
        else{
            dd('no');
        }




        // msla hai k kbhe kbhe $row[37] mai AM1 or WH1 dono ajaty hen to rate k table sy wc_rates coloum value chaheye



        $replacement = '.';
        $or_longitude = substr_replace($row[43], $replacement, 3, 0);
        $or_latitude = substr_replace($row[44], $replacement, 2, 0);
        $de_longitude = substr_replace($row[51], $replacement, 3, 0);
        $de_latitude = substr_replace($row[52], $replacement, 2, 0);



        //dd($row["origin_lat"].','.$row["origin_lon"]);

     //   dd($row["origin_lat"],$row["origin_lon"],$row["dest_lat"],$row["dest_lon"]);


        $response = DistanceMatrix::license($license)

                ->addOrigin($or_latitude.','.$or_longitude)
                ->addDestination($de_latitude.','.$de_longitude)
                ->request();
/*
                ->addOrigin($or_latitude.','.$or_longitude)
                ->addDestination($de_longitude.','.$de_latitude)
                ->request();
*/

                $rows = $response->rows();
                $elements = $rows[0]->elements();
                $element = $elements[0];

                $distance = $element->distance();
                $distanceText = $element->distanceText();
                $duration = $element->duration();
                $durationText = $element->durationText();
                $durationInTraffic = $element->durationInTraffic();
                $durationInTrafficText = $element->durationInTrafficText();


                $data =  [
                    'distance'=>$distance,
                    'distanceText'=>$distanceText,
                    'duration'=>$duration,
                    'durationText'=>$durationText,
                    'durationInTraffic'=>$durationInTraffic,
                    'durationInTrafficText'=>$durationInTrafficText,
                ];


        return new Taxi_Manifest([
            //

           "Date_Of_Service" => substr($row[2],17) ,
           "Run_Number" => substr($row[3],5) ,
           "Booking_ID" => $row[35] ,
           "Client_Name" => $row[36] ,
           "Space_On" => $row[37] ,
           "Origin_Street" => $row[38] ,
           "Origin_Comment" => $row[39] ,
           "Orig_Apt" => $row[40] ,
           "Origin_City" => $row[41] ,
           "Origin_Phone" => $row[42] ,
           "Origin_Lon" =>    $or_longitude ,
           "Origin_Lat" =>  $or_latitude ,
           "Space_Off" => $row[45] ,
           "Dest_Street" => $row[46] ,
           "Dest_Comment" => $row[47] ,
           "Dest_Apt" => $row[48] ,
           "Dest_City" => $row[49] ,
           "Dest_Phone" => $row[50] ,
           "Dest_Lon" => $de_longitude ,
           "Dest_Lat" => $de_latitude ,
           "schedule_time" => $row[53] ,
           "Neg_Time" => $row[54] ,
           "Appt_Time" => $row[55] ,
           "Origin_Actual_Arrive" => $row[56] ,
           "Origin_Actual_Depart" => $row[57] ,
           "Dest_Actual_Arrive" => $row[58] ,
           "Dest_Actual_Depart" => $row[59] ,
           "Trip_Distance" => $row[60] ,
           "Fare" => $row[61] ,
           "Fare_Collected" => $row[63] ,
           "Provider_Cost" => $Provider_Cost ,
           "Adjusted_Cost" => $row[64] ,
           "Comments" => $row[65] ,
           'distance_data'=>$data,
           'est_end_time'=>Carbon::parse($row[53])->addSeconds($duration)

        ]);
    }
}

function getDistance($addressFrom, $addressTo, $unit = ''){
    // Google API key
    $apiKey = 'AIzaSyD79aW6rB132yhuZRDBHS96Q5TJOstjCzo';

    // Change address format
    $formattedAddrFrom    = str_replace(' ', '+', $addressFrom);
    $formattedAddrTo     = str_replace(' ', '+', $addressTo);

    // Geocoding API request with start address
    $geocodeFrom = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address='.$formattedAddrFrom.'&sensor=false&key='.$apiKey);
    $outputFrom = json_decode($geocodeFrom);
    if(!empty($outputFrom->error_message)){
        return $outputFrom->error_message;
    }

    // Geocoding API request with end address
    $geocodeTo = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address='.$formattedAddrTo.'&sensor=false&key='.$apiKey);
    $outputTo = json_decode($geocodeTo);
    if(!empty($outputTo->error_message)){
        return $outputTo->error_message;
    }

    // Get latitude and longitude from the geodata
    $latitudeFrom    = $outputFrom->results[0]->geometry->location->lat;
    $longitudeFrom    = $outputFrom->results[0]->geometry->location->lng;
    $latitudeTo        = $outputTo->results[0]->geometry->location->lat;
    $longitudeTo    = $outputTo->results[0]->geometry->location->lng;

    // Calculate distance between latitude and longitude
    $theta    = $longitudeFrom - $longitudeTo;
    $dist    = sin(deg2rad($latitudeFrom)) * sin(deg2rad($latitudeTo)) +  cos(deg2rad($latitudeFrom)) * cos(deg2rad($latitudeTo)) * cos(deg2rad($theta));
    $dist    = acos($dist);
    $dist    = rad2deg($dist);
    $miles    = $dist * 60 * 1.1515;

    // Convert unit and return distance
    $unit = strtoupper($unit);
    if($unit == "K"){
        return round($miles * 1.609344, 2).' km';
    }elseif($unit == "M"){
        return round($miles * 1609.344, 2).' meters';
    }else{
        return round($miles, 2).' miles';
    }
}
