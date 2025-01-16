<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $connection = 'mysql';
    protected $table = 'database2';
    protected $primaryKey = 'Idstaff';
    protected $fillable = ['fname', 'lname'];
    public $timestamps = false;
    use HasFactory;
}

// class membertest extends Model{
//     protected $connection = 'mysql2';
//     protected $table = 'memberinput';
//     protected $primaryKey = 'IdMember';

//     public $timestamps = false;
//     public static function setConnectiont(){
//         $memberTest = new membertest();
//         $memberTest->setConnection('mysql');
//         $memberTest = $memberTest->find(1);
//         return $memberTest;
//     }
// }



