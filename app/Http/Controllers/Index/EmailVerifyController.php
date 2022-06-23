<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class EmailVerifyController extends Controller
{
    protected $mail;

    public function sendVerifyMail(Request $request)
    {
        $code = rand(100000, 999999);//验证码
        $mail = "0451008@nkust.edu.tw";// 要寄給誰
        $this->mail = $mail; // 用class的寫法        

        Mail::raw('我是內容 驗證碼 : ' . $code ,function($message){
            $mail = $this->mail;
            $message->to($mail)->subject('我是標題');
        });
    }
}
