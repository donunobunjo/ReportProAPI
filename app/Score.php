<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $fillable = ['roll_num','fullname','session','term','class','subject','first_ca','second_ca','exam'];
}
