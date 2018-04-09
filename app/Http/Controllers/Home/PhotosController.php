<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class PhotosController extends Controller
{
    public function index(){
        $user = User::all();
        dd($user);
    }
}
