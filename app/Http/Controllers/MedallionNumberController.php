<?php

namespace App\Http\Controllers;
use App\Medallion_Number;

use Illuminate\Http\Request;

class MedallionNumberController extends Controller
{
        public function index(){
            $meddnum = Medallion_Number::all();
            return view('admin.medallion_number.list',['meddnums'=>$meddnum]);
        }

        public function create()
    {
        return view('admin.medallion_number.add');
    }

    public function addmedallion(Request $request)
    {
          $mednum = new Medallion_Number;
          $mednum->medallion_number = $request->medallion_number;
          $mednum->medallion_number_exp  = $request->medallion_number_exp  ;
          $mednum->save();

          return back()->with("success","Medallion Number Inserted");
         
    }

    public function edit($id)
    {
        $mednum = Medallion_Number::find($id);
        return view('admin.medallion_number.edit',[
            'mednums'=>$mednum
        ]);
    }

    public function delete($id)
    {
            $mednum = Medallion_Number::find($id);
            $mednum->delete();
            return back()->with("success","Medallion Number Deleted");

    }

    public function update(Request $request,$id)
    {
          $mednum = Medallion_Number::find($id);
          $mednum->medallion_number = $request->medallion_number;
          $mednum->medallion_number_exp  = $request->medallion_number_exp  ;
          $mednum->save();

          return back()->with("success","Medallion Number Updated");
         
    }

}
