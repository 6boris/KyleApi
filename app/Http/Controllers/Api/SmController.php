<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Extend\Ms_Result;
use Crypt;

class SmController extends Controller
{
    public function demo(){
        return view("admin.common.demo");
    }
    public function sm4_decrypt(Request $request){
        $ms = new Ms_Result();
        $ms->status = 1;
        $ms->message = '系统错误！';

        $ms->data = Crypt::decrypt($request->input('data')); 

        return $ms->toJson();
    }
    public function sm4_encrypt(Request $request){
        $ms = new Ms_Result();
        $ms->status = 1;
        $ms->message ="系统错误";

        
        $ms->data = encrypt($request->input('data'));

        return $ms->toJson();
    }
}
