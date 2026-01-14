<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Rate;


class RatesController extends Controller
{

         function index(){

            $rates = Rate::get();

             return view('admin.tools.rates.list',['rates'=>$rates]);
         }


         function create(){

             return view('admin.tools.rates.add');
         }


         function addrate(Request $req){

            $rates = new Rate;
              $rates->miles = $req->miles;
              $rates->end_miles = $req->end_miles;    
              $rates->a_rates = $req->rates;    
              $rates->wc_rates = $req->wc_rates;    
              $rates->save();   

              return back()->with('success','Rates Inserted'); 
         }

         function edit($id){

             $rate = Rate::find($id) ;
             return view('admin.tools.rates.edit',['rates'=>$rate]) ;
        }

        function delete($id){
            $rate = Rate::find($id) ;
            $rate->delete();
            return back()->with('success','Rate Deleted');
        }

        function editrate(Request $req, $id){
              
            $rate = Rate::find($id);

            $rate->miles = $req->miles;
            $rate->end_miles = $req->end_miles;
            $rate->a_rates = $req->rates;
            $rate->wc_rates = $req->wc_rates;
            $rate->save();

            return redirect()->back()->with('success','Rate Updated');

        }


}
