<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable =['roll_num','fullname','dob','class','gender','active'];
}
