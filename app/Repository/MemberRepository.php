<?php

namespace App\Repository;

use App\Models\Member;
use App\Models\membertest;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Repository;
use Illuminate\Database\Eloquent\Models;
use Illuminate\Support\Facades\DB;



class MemberRepository{
    public static function getAll(){
        return Member::get();        
    }
    // public static function showGet() {
    //    DB::enableQueryLog();
    //    $isname = DB::table('mms')
    //    ->select('fname','lname')
    //    ->where('memberId')
    //    ->get();
    //    return $isname;
    // }
    // public static function showAll(){
    //     return membertest::get();
    // }
    public static function getInput(){
        return DB::connection('mysql');
    }

    public static function getData($fname,$lname,$staff_code){
        // DB::enableQueryLog();
        $MemberList = DB::table('mms')
        ->select('fname','lname',DB::raw('concat(memberinput.fname," ",memberinput.lname) as name'))
        ->where('staff_code')
        ->get();
        // if($ismember['0']->result == 0){
        //     $member = new Member();

        // }
        return $MemberList;

    }
    public static function addData($IdMember,$firstName,$lastName,$datetime,$room,$memberId){
        $data = new Member();
        $data->IdMember= $IdMember;
        $data->firstName = $firstName;
        $data->lastName = $lastName;
        $data->datetime = $datetime;
        $data->room = $room;
        $data->memberId = $memberId;
        $datetime = Carbon::now();


        return $data->save();
    }
}

?>