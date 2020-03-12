<?php

namespace App\Http\Controllers;

use  App\Model\User;

class LoginController extends Controller
{
    //
    public function Test()
    {
        $User = new User();
        $User->name = 'zly';
        $User->age = '26';
        $User->email = '342709615@qq.com';
        $User->save();
    }
}
