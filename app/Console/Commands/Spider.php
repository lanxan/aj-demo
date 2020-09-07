<?php
 
namespace App\Console\Commands;
 
use Illuminate\Console\Command;
 
class Spider extends Command
{
    // 命令名稱
    protected $signature = 'test:spider';
 
    public function __construct()
    {
        parent::__construct();
    }
 
    // Console 執行的程式
    public function handle()
    {
        $curl = app()->make('App\Http\Controllers\Curl\CurlController');
        $curl->run();
    }
}
