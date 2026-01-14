<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charges;


class ChargesController extends Controller
{
    
    function index(){

        $charges = Charges::get();

         return view('admin.tools.charges.list',['charges'=>$charges]);
     }

     function create(){

        return view('admin.tools.charges.add');
    }

    function addcharge(Request $req){

        $charges = new Charges;
          $charges->cost = $req->cost;
          $charges->retail = $req->retail;    
          $charges->year = $req->year;    
          $charges->collision = $req->collision;    
          $charges->save();   

          return back()->with('success','Charges Inserted'); 
     }

     function edit($id){

        $charge = Charges::find($id) ;
        return view('admin.tools.charges.edit',['charges'=>$charge]) ;
   }

   function editcharge(Request $req, $id){
              
    $charge = Charges::find($id);

    $charge->cost = $req->cost;
    $charge->retail = $req->retail;
    $charge->year = $req->year;
    $charge->collision = $req->collision;
    $charge->save();

    return redirect()->back()->with('success','Charge Updated');

}


     function delete($id){
        $charge = Charges::find($id) ;
        $charge->delete();
        return back()->with('success','Charges Deleted');
    }

}
