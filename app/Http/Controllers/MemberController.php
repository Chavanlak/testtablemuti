<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\membertest;
use App\Repository\MemberRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Symfony\Component\CssSelector\Node\FunctionNode;
use Illuminate\Support\Facades\DB;
use Psy\VersionUpdater\Checker;

class MemberController extends Controller
{
    public static function getmember(){
        $memberList = MemberRepository::getAll();
        return view('/member',compact('memberList'));

    }
    public static function showAllmember(){
        $ShowList = MemberRepository::showAll();
        return view('/showmember',compact('ShowList'));
    }
    public static function showInput(){
        DB::enableQueryLog();
        $isname = DB::table('mms')
        ->select('fname','lname')
        ->where('staff_code')
        ->get();
        return $isname;

    }

    //data from table mms input to db membertest 
    public static function showdisplay(){
        return DB::connection('mysql')->table('mms')->get();

    }
    public static function addMember($room,$datetime,$fname,$lname,$staff_code){
        //  $data = new membertest();
        // $data->room = $room;
        // $data->datetime = now();
        $datetime = Carbon::now();
        $datetime->datetime = $datetime;
        $room->room = $room;
        $fname->fname = $fname;
        $lname->lname = $lname;
        $name = $fname." ".$lname;
        $staff_code->staff_code = $staff_code;

        // return $data->save();
        if($staff_code == 0){
            return redirect('/');
        }
        if($staff_code == $name){
            return redirect('/');
        }
    
        
    }
  

    
}
 







