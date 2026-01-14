<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Pnlinh\GoogleDistance\Facades\GoogleDistance;

use App\Imports\Taxi_ManifestImport;
use App\Exports\Taxi_ManifestExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Taxi_Manifest;
use Carbon\Carbon;

class Taxi_ManifestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     *
     */

/*


    public function importForm()
    {
        //
        return view('admin.pace-rides');
    }
 */

    public function import(Request $request)
    {


        // $file = fopen($request->file,'r');
        // while(! feof($file))
        //     {
        //     print_r(fgetcsv($file));
        //     }

        //     fclose($file);
        // die;
        Excel::import(new Taxi_ManifestImport, $request->file);


        return redirect()->route('pace_rides');

    }

    public function index(Request $request , Taxi_Manifest $taxi_manifest)
    {


        if($request->search && !$request->client_name && !$request->date_of_service){
            $taxi_manifest = $taxi_manifest->where(function($f) use ($request){
                $f->orwhere('Booking_ID','like','%'. $request->search.'%');
            });
        }

        if(!$request->search && $request->client_name && !$request->date_of_service){
            $taxi_manifest = $taxi_manifest->where(function($f) use ($request){
                $f->orwhere('Client_Name','like','%'. $request->client_name.'%');
            });
        }
        if($request->search && $request->client_name && $request->date_of_service){
            $taxi_manifest = $taxi_manifest->where(function($f) use ($request){
                $f->orwhere('Client_Name','like','%'. $request->client_name.'%')->orwhere('Booking_ID','like','%'. $request->search.'%')->orwhere('Date_Of_Service','like','%'. $request->date_of_service.'%');;
            });
        }


        if($request->date_of_service && !$request->client_name && !$request->search ){

            $taxi_manifest = $taxi_manifest->where(function($f) use ($request){
                $f->orwhere('Date_Of_Service','like','%'. $request->date_of_service.'%');
            });
        }


        //
        $taxi_Manifests = $taxi_manifest->paginate(1000);

        return view('admin.pace-rides',[
            'taxi_Manifests' => $taxi_Manifests
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function export(Request $request)
    {
        return Excel::download(new Taxi_ManifestExport($request), 'Taxi_ManifestExport.csv', \Maatwebsite\Excel\Excel::CSV);
    }

    public function driverCount(Request $request){


       $taxi_manifest = new Taxi_Manifest;

       if($request->date)
       $taxi_manifest =  $taxi_manifest->where('Date_Of_Service',$request->date);

       if($request->Space_On && $request->Space_On != 'all'){
        $taxi_manifest =  $taxi_manifest->where('Space_On','LIKE','%'.$request->Space_On.'%');
       }

       $taxi_manifest = $taxi_manifest->get();

     $taxi_manifest_counts = $taxi_manifest->map(function($item){

            $sch = Carbon::parse($item->schedule_time)->format('G');
            $est = Carbon::parse($item->est_end_time)->format('G');
            if($sch == $est){
                $est = null;
            }
            return array_values(array_filter([$sch,$est]));

       })->flatten()->map(function($item){
            return ['hours'=>$item];
    })->sortBy('hours')->groupBy('hours');

        return view('admin.driver.driverCount',[
            'taxi_manifest_counts'=>$taxi_manifest_counts,
            'taxi_Manifests_date'=>$taxi_manifest->unique('Date_Of_Service')
        ]);
    }
}
