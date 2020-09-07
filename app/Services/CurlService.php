<?php

namespace App\Services;

use App\Repositories\CurlRepository;
use Ixudra\Curl\Facades\Curl;
use PHPHtmlParser\Dom;

class CurlService
{
    protected $curlRepository = null;

    public function __construct(CurlRepository $curlRepository) {
        $this->curlRepository = $curlRepository;
    }

    //處理抓下來的資料
    public function dealData($html) {
        $dom = new Dom;
        $dom->loadStr($html);

        $tag = $dom->find('.TODAY_CONTENT')[0];

        $class = $tag->getAttribute('class');
        $html2 = $tag->innerHtml;

        $data = array();

        $dom->loadStr($html2);
        $data[0] = substr($dom->find('h3')->text, 6, 9);

        $tag2 = $dom->find('p');
        for ($i = 0; $i < 8; $i = $i+2) {
            $count = substr_count($tag2[$i]->firstChild()->text, '★');
            $data[$i+1] = $count;
            $data[$i+2] = $tag2[$i+1]->text;
        }

        return $data;
    }

    //從網站取得原始資料
    public function getData($url) {
        $response = Curl::to($url)->get();

        return $response;
    }

    //儲存資料
    public function storeData($day, $data) {
        $this->curlRepository->storeData($day, $data);
    }

    //取得當天資料
    public function showTodayData() {
        $day = date('Y-m-d');

        return $this->curlRepository->getData($day);
    }
}
