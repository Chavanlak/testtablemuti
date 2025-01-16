<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\membertest;
use App\Repository\MemberRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Symfony\Component\CssSelector\Node\FunctionNode;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\FuncCall;
use Psy\VersionUpdater\Checker;

class MemberController extends Controller
{
    public static function getmember(){
        $memberList = MemberRepository::getAll();
        return view('/member',compact('memberList'));

    }
    // public static function showAllmember(){
    //     $ShowList = MemberRepository::showAll();
    //     return view('/showmember',compact('ShowList'));
    // }
  

    //data from table mms input to db membertest 
    public static function showdisplay(){
        return DB::connection('mysql')->table('mms')->get();

    }
    // public static function addMember($room,$datetime,$fname,$lname,$staff_code){
    //     //  $data = new membertest();
    //     // $data->room = $room;
    //     // $data->datetime = now();
    //     $datetime = Carbon::now();
    //     $datetime->datetime = $datetime;
    //     $room->room = $room;
    //     $fname->fname = $fname;
    //     $lname->lname = $lname;
    //     $name = $fname." ".$lname;
    //     $staff_code->staff_code = $staff_code;

    //     // return $data->save();
    //     if($staff_code == 0){
    //         return redirect('/');
    //     }
    //     if($staff_code == $name){
    //         return redirect('/');
    //     }
    
        
    // }
//   public static function addData($IdMember,$firstName,$lastName,$datetime,$room,$memberId){
//         $data = new Member();
//         $data->IdMember = $IdMember;
//         $data->firstName = $firstName;
//         $data->lastName = $lastName;
//         $data->datetime = $datetime;
//         $data->room = $room;
//         $data->memberId = $memberId;
//         $datetime = Carbon::now();

        
//         return $data->save();
//         $MemberList = MemberRepository::getData($fname,$lname,$staff_code);
//         if($name == $staff_code){
//             return redirect('/')->with('message','submit suceess');
//             }
//         else 
//         return redirect('/')->with('message','รหัสสมาชิกไม่ตรงกัน');

//   }
  public static function addData(Request $req){
    $IdMember = $req->IdMember;
    $firstName = $req->firstName;
    $lastName = $req->lastName;
    $datetime = $req->datetime;
    $room = $req->room;
    $memberId = $req->memberId;
    $fname = $req->fname;
    $lname = $req->lname;
    $staff_code = $req->staff_code;
    $name = $fname." ".$lname;


    
    $data = MemberRepository::addData($IdMember,$firstName,$lastName,$datetime,$room,$memberId);
    $MemberList = MemberRepository::getData($fname,$lname,$staff_code);
    if($name == $staff_code){
        return redirect('/')->with('message','submit suceess');
        }
    else 
    return redirect('/')->with('message','รหัสสมาชิกไม่ตรงกัน');

}
//   public static function getData($fname,$lname,$staff_code){
//     $data = new Member();
//     $data->fname = $fname;
//     $data->lname = $lname;
//     $data->staff_code = $staff_code;

//     return 



//   }
// public static function getDatatoAdd($fname,$lname,$staff_code){
//     $MemberList = MemberRepository::getData($fname,$lname,$staff_code);

// }

    
}
 







