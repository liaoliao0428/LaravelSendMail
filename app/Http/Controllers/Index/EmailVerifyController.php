<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;


use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Redis;

class EmailVerifyController extends Controller
{
    public function sendVerifyMail(Request $request)
    {
        $code = rand(100000, 999999);//验证码
        $mail = "0451008@nkust.edu.tw";
        

        Mail::raw('我是內容 驗證碼 : ' . $code ,function($message){
            $mails =  $this->teswest();
            $message->to($mails)->subject('我是標題');
        });
    }

    public function teswest()
    {
        return "0451008@nkust.edu.tw";
    }
}
