<?php

namespace App\Repository;

use App\Models\Member;
use App\Models\membertest;
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
    public static function showAll(){
        return membertest::get();
    }
    public static function getInput(){
        return DB::connection('mysql');
    }
}

?>