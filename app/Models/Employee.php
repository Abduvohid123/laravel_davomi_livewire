<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Employee extends Model
{
    use HasFactory;

    protected $fillable=['name','email','phone','salary','department'];
    public static function getEmployeee()
    {
        $records=DB::table('employees')->select(['*'])->get()->toArray();
        return $records;
    }


}
