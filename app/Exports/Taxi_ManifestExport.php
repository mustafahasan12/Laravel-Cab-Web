<?php

namespace App\Exports;

use App\Taxi_Manifest;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Support\Facades\View as BaseView;

class Taxi_ManifestExport implements FromView
{

    protected $request;

    function __construct($request) {
            $this->request = $request;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {

    //     return Taxi_Manifest::all();
    // }

    public function view(): View
    {

        $taxi_manifest = new Taxi_Manifest ;


        if($this->request->search && !$this->request->client_name && !$this->request->date_of_service){
            $request = $this->request;

            $taxi_manifest = $taxi_manifest->where(function($f) use ($request){
                $f->orwhere('Booking_ID','like','%'. $request->search.'%');
            });
        }

        if(!$this->request->search && $this->request->client_name && !$this->request->date_of_service){
            $request = $this->request;
            $taxi_manifest = $taxi_manifest->where(function($f) use ($request){
                $f->orwhere('Client_Name','like','%'. $request->client_name.'%');
            });
        }
        if($this->request->search && $this->request->client_name && $this->request->date_of_service){
            $request = $this->request;

            $taxi_manifest = $taxi_manifest->where(function($f) use ($request){
                $f->orwhere('Client_Name','like','%'. $request->client_name.'%')->orwhere('Booking_ID','like','%'. $this->request->search.'%')->orwhere('Date_Of_Service','like','%'. $this->request->date_of_service.'%');;
            });
        }


        if($this->request->date_of_service && !$this->request->client_name && !$this->request->search ){
            $request = $this->request;
            $taxi_manifest = $taxi_manifest->where(function($f) use ($request){
                $f->orwhere('Date_Of_Service','like','%'. $request->date_of_service.'%');
            });
        }



        if (BaseView::exists('admin.partials.export')) {
            return view('admin.partials.export', [
                'taxi_Manifests' => $taxi_manifest->get()
            ]);
        }
    }
}
