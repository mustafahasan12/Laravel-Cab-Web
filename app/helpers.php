<?php
use Illuminate\Support\Facades\DB;

function time_to_decimal($time) {
    $timeArr = explode(':', $time);
    $decTime = ($timeArr[0]*3600) + ($timeArr[1]) + ($timeArr[2]/3600);
 
    return $decTime;
}

function fetch_a_rate($miles){

  

    $users = DB::table('rates')
                    ->where('a_rates', '=', $miles);

  

    echo $users;

}


?>