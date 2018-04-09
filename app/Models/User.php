<?php

namespace App\Models;

class User extends Model
{
    protected $fillable = ['id', 'user_id'];

    // 后台登录用户表
    protected $table = 'user';
    protected $primaryKey = 'u_id';

    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}