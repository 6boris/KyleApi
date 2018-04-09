<?php

namespace App\Http\Middleware;

use App\Extend\Ms_Result;
use Closure;
use DB;

class VerifyAccessKey
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $ms = new Ms_Result();
        $ms->status = 1;
        $ms->message = '秘钥验证失败！';

        // 获取传入的秘钥
        $ACCESS_KEY_ID = $request->input('id');
        $ACCESS_KEY_SECRET = $request->input('secret');
        
        // 检测ID是否存在
        if(!DB::table('access_key')->where('access_key_id','=', $ACCESS_KEY_ID)->exists()){
            $ms->message = "秘钥不存在！";
            return response($ms->toJson()); 
        }

        // 检测SECRET是否匹配
        $key = DB::table('access_key')->where('access_key_id','=', $ACCESS_KEY_ID)->get()[0];
        if($key->access_key_secret != $ACCESS_KEY_SECRET){
            $ms->message = "SRCRET验证失败！";
            return response($ms->toJson());
        }

        return $next($request);
    }
}
