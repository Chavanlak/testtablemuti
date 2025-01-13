<?php

namespace App\Repository;

use App\Models\Member;
use Illuminate\Database\Eloquent\Repository;
use Illuminate\Database\Eloquent\Models;
use Illuminate\Support\Facades\DB;



class MemberRepository{
    // public static function getAll($idstaff){
    //     return Member::where('idstaff')->first();
    // }
    public static function getNames($fname,$lname){
        $name = new Member();
        $name->fname = $fname;
        $name->lname = $lname;
        $name->save();
        return $name;
    }
}
    
    // public static function getNames($Idstaff,$fname,$lname){
    //     return DB::table('mms')
    //         ->where('Idstaff', $Idstaff)
    //         ->where('fname', $fname)
    //         ->where('lname', $lname)
    //         ->select('fname', 'lname') // Fetch only the columns you need
    //         ->first(); // Return a single record
    // }
    // }


?>