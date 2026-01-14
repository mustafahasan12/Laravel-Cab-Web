<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Corporation;
use App\Member;

class CorporationController extends Controller
{
        function index(){
              $corp = Corporation::all();
              return view("admin.member.corporation.showcorp",['corps'=>$corp]);
        }

        function create($id){
            $membercorp = Member::where(['type'=>'Corporation','id'=>$id])->get();
               
            return view("admin.member.corporation.addcorp",['membercorps'=>$membercorp]);
        }

        function addcorp(Request $req){

            $corp = new Corporation;
            $corp->member_id = $req->member_id;
            $corp->status = $req->status;
            $corp->corporation_name = $req->corporation_name;
            $corp->incorporation_date = $req->incorporation_date; 
            $corp->state = $req->state;
            $corp->corporation_type = $req->corporation_type;
            $corp->corporation_sub_type = $req->corporation_sub_type;
            $corp->irisno = $req->irisno;
            $corp->pin = $req->pin;
            $corp->corporate_registered_address = $req->corporate_registered_address;
            $corp->state1 = $req->state1;
            $corp->feinno = $req->feinno;
            $corp->corporate_owner_chauffeurno = $req->corporate_owner_chauffeurno;
            $corp->file_number = $req->file_number;
            $corp->annual_report_filling_date = $req->annual_report_filling_date;
            $corp->corporation_address = $req->corporation_address;
            $corp->city = $req->city; 
            $corp->zip_code = $req->zip_code;
            $corp->agent_name = $req->agent_name;
            $corp->email = $req->email;
            $corp->phone_number = $req->phone_number;
            $corp->agent_address1 = $req->agent_address1;
            $corp->agent_address2 = $req->agent_address2;
            $corp->state2 = $req->state2;
            $corp->city1 = $req->city1;
            $corp->zip_code1 = $req->zip_code1;
            $corp->agent_change_date = $req->agent_change_date; 
            $corp->president_name = $req->president_name;
            $corp->email1 = $req->email1;
            $corp->phone_number1 = $req->phone_number1;
            $corp->president_address1 = $req->president_address1;
            $corp->president_address2 = $req->president_address2;
            $corp->state3 = $req->state3;
            $corp->city2 = $req->city2;
            $corp->zip_code2 = $req->zip_code2;
            $corp->secretary_name = $req->secretary_name;
            $corp->email2 = $req->email2; 
            $corp->phone_number2 = $req->phone_number2;
            $corp->secretary_address1 = $req->secretary_address1;
            $corp->secretary_address2 = $req->secretary_address2;
            $corp->state4 = $req->state4;
            $corp->city3 = $req->city3;
            $corp->zip_code3 = $req->zip_code3;
            $corp->save();

            return back()->with("success","Corporation Inserted");

        }


        function editcorp($id){
                 
            $corporation = Member::where('type','Corporation')->get();
            $c = Corporation::find($id);
            return view('admin.member.corporation.editcorp',[
                'membercorps'=>$corporation,
                'corps'=>$c
            ]);
        }

        function updatecorp(Request $req,$id){
       
            $corp = Corporation::find($id);
            $corp->status = $req->status;
            $corp->corporation_name = $req->corporation_name;
            $corp->incorporation_date = $req->incorporation_date; 
            $corp->state = $req->state;
            $corp->corporation_type = $req->corporation_type;
            $corp->corporation_sub_type = $req->corporation_sub_type;
            $corp->irisno = $req->irisno;
            $corp->pin = $req->pin;
            $corp->corporate_registered_address = $req->corporate_registered_address;
            $corp->state1 = $req->state1;
            $corp->feinno = $req->feinno;
            $corp->corporate_owner_chauffeurno = $req->corporate_owner_chauffeurno;
            $corp->file_number = $req->file_number;
            $corp->annual_report_filling_date = $req->annual_report_filling_date;
            $corp->corporation_address = $req->corporation_address;
            $corp->city = $req->city; 
            $corp->zip_code = $req->zip_code;
            $corp->agent_name = $req->agent_name;
            $corp->email = $req->email;
            $corp->phone_number = $req->phone_number;
            $corp->agent_address1 = $req->agent_address1;
            $corp->agent_address2 = $req->agent_address2;
            $corp->state2 = $req->state2;
            $corp->city1 = $req->city1;
            $corp->zip_code1 = $req->zip_code1;
            $corp->agent_change_date = $req->agent_change_date; 
            $corp->president_name = $req->president_name;
            $corp->email1 = $req->email1;
            $corp->phone_number1 = $req->phone_number1;
            $corp->president_address1 = $req->president_address1;
            $corp->president_address2 = $req->president_address2;
            $corp->state3 = $req->state3;
            $corp->city2 = $req->city2;
            $corp->zip_code2 = $req->zip_code2;
            $corp->secretary_name = $req->secretary_name;
            $corp->email2 = $req->email2; 
            $corp->phone_number2 = $req->phone_number2;
            $corp->secretary_address1 = $req->secretary_address1;
            $corp->secretary_address2 = $req->secretary_address2;
            $corp->state4 = $req->state4;
            $corp->city3 = $req->city3;
            $corp->zip_code3 = $req->zip_code3;
            $corp->save();

            return back()->with("success","Corporation Updated");
        }

          function delete($id){

          $corp = Corporation::find($id);
          $corp->delete();
          return back()->with("success","Corporation Deleted");

          }    
}
