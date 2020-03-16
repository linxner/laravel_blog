<?php

namespace App\Http\Controllers;

use App\Model\User;
// use Illuminate\Support\Facades\Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;

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

    public function Test1(Request $request)
    {
        // $User = new User();
        // $User->name = 'zly';
        // $User->age = '26';
        // $User->email = '342709615@qq.com';
        // $User->save();
        if (FacadesRequest::method() == 'POST') {
            if ($request->hasFile('avatar') && $request->file('avatar')->isValid()) {
                // dd($request->file('avatar')->getClientOriginalName());
                $path = md5(time() . rand(100000, 999999)) . '.' . $request->file('avatar')->getClientOriginalExtension();
                $request->file('avatar')->move('./uploads', $path);
                $data = $request->all();
                // echo $path;
                $data['avatar'] = './uploads/' . $path;
                $result = User::create($data);
                dd($result);
            }
        } else {
            return view('welcome');
        }
    }
    public function Test2()
    {
        header('Access-Control-Allow-Origin:*'); //信任所有域名
        $User = new User();
        $result = $User->all();
        // dd($result);
        return $result;
    }
}
