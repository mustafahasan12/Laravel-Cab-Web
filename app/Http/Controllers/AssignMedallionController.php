<?php

namespace App\Http\Controllers;
use App\Corporation;
use App\Member;
use App\Assign_Corporation_Medallion;

use Illuminate\Http\Request;

class AssignMedallionController extends Controller
{

    public function index($id){

        $corp = Corporation::find($id);
        $memberid = $corp->member_id;
        $member = Member::find($memberid);

         return view('admin.member.assign_corp_medallion',['members'=>$member,'corps'=>$corp]);

    }

    public function add(Request $request)
    {
          $assmeda = new Assign_Corporation_Medallion;
          $assmeda->member_name  = $request->member_name  ;
          $assmeda->corporation_id  = $request->corporation_id  ;
          $assmeda->medallion_number  = $request->medallion_number  ;
          $assmeda->expiry_medallion_number  = $request->expiry_medallion_number  ;
          $assmeda->save();

          return back()->with("success","Assign Corporation Medallion Inserted");

    }


}
