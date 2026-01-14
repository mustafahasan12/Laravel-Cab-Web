<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prices;


class PricesController extends Controller
{
    
    function index(){

        $prices = Prices::get();

         return view('admin.tools.price.list',['prices'=>$prices]);
     }


     function create(){

        return view('admin.tools.price.add');
    }

    function addprice(Request $req){

        $price = new prices;
          $price->payment_type = $req->payment_type;
          $price->company_name = $req->company_name;    
          $price->cost_price = $req->cost_price;    
          $price->retail_price = $req->retail_price;    
          $price->save();   

          return back()->with('success','Price Inserted'); 
     }

     function delete($id){
        $price = prices::find($id) ;
        $price->delete();
        return back()->with('success','Price Deleted');
    }

    
    function edit($id){

        $price = prices::find($id) ;
        return view('admin.tools.price.edit',['prices'=>$price]) ;
   }

   
   function editprice(Request $req, $id){
              
    $price = prices::find($id);

          $price->payment_type = $req->payment_type;
          $price->company_name = $req->company_name;    
          $price->cost_price = $req->cost_price;    
          $price->retail_price = $req->retail_price;    
          $price->save();   

    return redirect()->back()->with('success','Price Updated');

}

}
