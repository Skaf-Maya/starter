<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class UserController extends Controller
{
    public function showUserName() {
        return 'Maya Skaf';
    }

    public function getIndex() {
//        $data = [];
//        $data['name'] = 'Maya Skaf';
//        $data['age'] = 22;
//        return view('welcome',$data);
        $obj = new \stdClass();
        $obj -> name = 'Maya Skaf';
        $obj -> age = 22;
        $obj -> gender = 'Female';

        $data=['MM' , 'ww'];
        //$data=[];
        return view('welcome',compact('data'));
        //return view('welcome',compact('obj'));



    }
}
