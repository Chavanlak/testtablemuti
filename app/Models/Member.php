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
