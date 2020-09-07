<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Star extends Model
{
    //把星座資料存進star資料表
    protected $table = 'star';

    //沒有要限制的
    protected $guarded = [];
}
