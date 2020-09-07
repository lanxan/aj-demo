<?php

namespace App\Http\Controllers\Curl;

use App\Http\Controllers\Controller;
use App\Services\CurlService;

class CurlController extends Controller
{
    protected $curlService = null;

    public function __construct(CurlService $curlService)
    {
        $this->curlService = $curlService;
    }

    //執行爬蟲的動作
    public function run() {
        $day = date('Y-m-d');
        for ($i = 0; $i < 12; $i++) {
            $url = 'https://astro.click108.com.tw/daily_1.php?iAcDay=' . $day . '&iAstro=' . $i;
            $data = $this->curlService->getData($url);

            $newData = $this->curlService->dealData($data);

            $this->curlService->storeData($day, $newData);
        }
    }
}
