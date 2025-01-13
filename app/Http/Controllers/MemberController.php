<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Repository\MemberRepository;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public static function teststaff(){
        // $memberList = MemberRepository::getAll($idstaff);
        // return view('/',compact('memberList'));
        $data = Member::all();
        return view('member',['u'=>$data]);
    }
    public static function getStaff(){
        
    }
    // public static function testNames($Idstaff,$fname,$lname){
    //     $memberName = MemberRepository::getNames($Idstaff,$fname,$lname);
    //         return view('member',compact('member'));
           
    //     }
    
}
 







