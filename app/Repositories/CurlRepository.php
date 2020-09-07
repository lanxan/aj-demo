<?php

namespace App\Repositories;

use App\Models\Star;

class CurlRepository
{

    //存進資料庫
    public function storeData($day, $data) {
        Star::updateOrCreate([
            'day' => $day,
            'name' => $data[0]
        ], [
            'name' => $data[0],
            'all' => $data[1],
            'all_desc' => $data[2],
            'love' => $data[3],
            'love_desc' => $data[4],
            'business' => $data[5],
            'business_desc' => $data[6],
            'money' => $data[7],
            'money_desc' => $data[8],
            'day' => $day
        ]);
    }

    //從資料庫取得資料
    public function getData($day) {
        return Star::where('day', $day)->get();
    }
}
