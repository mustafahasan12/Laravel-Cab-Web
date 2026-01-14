<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;
use App\Vehicle;
use App\Corporation;
use App\Assign_Corporation_Medallion;
use App\Medallion_Number;
use Illuminate\Support\Facades\DB;


use App\Http\Requests\Member\StoreMemberRequest;
class MemberController extends Controller
{
 
    public function index()
    {
        $members = Member::where('type','Sole Proprietor')->get();
        $membercorp = Member::where('type','Corporation')->get();

        return view('admin.member.list',[
            'members'=>$members,
            'membercorps'=>$membercorp
        ]);
    }


    public function create()
    {
        $vehicles = Vehicle::get();
        return view('admin.member.add',[
            'vehicles'=>$vehicles
        ]);
    }

 
    public function store(Request $request)
    {
          $member = new Member;
          $member->type  = $request->type  ;
          $member->first_name  = $request->first_name  ;
          $member->middle_name  = $request->middle_name  ;
          $member->last_name  = $request->last_name  ;
          $member->city  = $request->city  ;
          $member->apt_no  = $request->apt_no  ;
          $member->zip_code = $request->zip_code  ;
          $member->home_num  = $request->home_num  ;
          $member->cell_num  = $request->cell_num  ;
          $member->emergency_contact  = $request->emergency_contact  ;
          $member->phone_num  = $request->phone_num  ;
          $member->dob  = $request->dob  ;
          $member->email_address  = $request->email_address  ;
          $member->driver_license_num  = $request->driver_license_num  ;
          $member->driver_issue_date  = $request->driver_issue_date  ;
          $member->driver_expiration_date  = $request->driver_expiration_date  ;
          $member->chauffeur_license_num  = $request->chauffeur_license_num  ;
          $member->chauffeur_issue_date  = $request->chauffeur_issue_date  ;
          $member->chauffeur_expiration_date  = $request->chauffeur_expiration_date  ;
          $member->ssn  = $request->ssn  ;
          $member->us_citizen  = $request->us_citizen  ;
          $member->name  = $request->name  ;
          $member->designation  = $request->designation  ;
          $member->hours_phone_number  = $request->hours_phone_number  ;
          $member->md_id  = $request->md_id  ;
          $member->save();

          return back()->with("success","Member Inserted");

    }


    public function editsole($id)
    {
        $vehicles = Vehicle::get();
        $sole = Member::find($id);
        return view('admin.member.edit_sole',[
            'membersoles'=>$sole,
            'vehicles'=>$vehicles
        ]);
    }

  
    public function soleupdate(Request $request,$id)
    {
        $member = Member::find($id) ;
        
        $member->first_name  = $request->first_name  ;
        $member->middle_name  = $request->middle_name  ;
        $member->last_name  = $request->last_name  ;
        $member->city  = $request->city  ;
        $member->apt_no  = $request->apt_no  ;
        $member->zip_code = $request->zip_code  ;
        $member->home_num  = $request->home_num  ;
        $member->cell_num  = $request->cell_num  ;
        $member->emergency_contact  = $request->emergency_contact  ;
        $member->phone_num  = $request->phone_num  ;
        $member->dob  = $request->dob  ;
        $member->email_address  = $request->email_address  ;
        $member->driver_license_num  = $request->driver_license_num  ;
        $member->driver_issue_date  = $request->driver_issue_date  ;
        $member->driver_expiration_date  = $request->driver_expiration_date  ;
        $member->chauffeur_license_num  = $request->chauffeur_license_num  ;
        $member->chauffeur_issue_date  = $request->chauffeur_issue_date  ;
        $member->chauffeur_expiration_date  = $request->chauffeur_expiration_date  ;
        $member->ssn  = $request->ssn  ;
        $member->us_citizen  = $request->us_citizen  ;
        $member->name  = $request->name  ;
        $member->designation  = $request->designation  ;
        $member->hours_phone_number  = $request->hours_phone_number  ;
        $member->md_id  = $request->md_id  ;
        $member->save();

        return back()->with("success","Member Updated");
    }


    public function editcorporation($id)
    {
        $vehicles = Vehicle::get();
        $corporation = Member::find($id);
        $c = Corporation::where('member_id', $id)->get();
        return view('admin.member.edit_corporation',[
            'membercorps'=>$corporation,
            'vehicles'=>$vehicles,
            'corps'=>$c
        ]);
    }


    public function corporationupdate(Request $request,$id)
    {
        $member = Member::find($id) ;
        
        $member->first_name  = $request->first_name  ;
        $member->middle_name  = $request->middle_name  ;
        $member->last_name  = $request->last_name  ;
        $member->city  = $request->city  ;
        $member->apt_no  = $request->apt_no  ;
        $member->zip_code = $request->zip_code  ;
        $member->home_num  = $request->home_num  ;
        $member->cell_num  = $request->cell_num  ;
        $member->emergency_contact  = $request->emergency_contact  ;
        $member->phone_num  = $request->phone_num  ;
        $member->dob  = $request->dob  ;
        $member->email_address  = $request->email_address  ;
        $member->driver_license_num  = $request->driver_license_num  ;
        $member->driver_issue_date  = $request->driver_issue_date  ;
        $member->driver_expiration_date  = $request->driver_expiration_date  ;
        $member->chauffeur_license_num  = $request->chauffeur_license_num  ;
        $member->chauffeur_issue_date  = $request->chauffeur_issue_date  ;
        $member->chauffeur_expiration_date  = $request->chauffeur_expiration_date  ;
        $member->ssn  = $request->ssn  ;
        $member->us_citizen  = $request->us_citizen  ;
        $member->name  = $request->name  ;
        $member->designation  = $request->designation  ;
        $member->hours_phone_number  = $request->hours_phone_number  ;
        $member->md_id  = $request->md_id  ;
        $member->save();

        return back()->with("success","Member Updated");
    }

  
    public function delete($id)
    {
            $member = Member::find($id);
            $member->delete();
            return back()->with("success","Member Deleted");

    }

       

        public function corpajax($id){
                  
            return $id;
        
        }

}
