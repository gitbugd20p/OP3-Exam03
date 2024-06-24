<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id){
        $name = "Donald Trump";
        $age = "75";

        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age,
        ];

        $c_name = 'access_token';
        $c_value = '123-XYZ';
        $c_minutes = 1;
        $c_path = '/';
        $c_domain = $_SERVER['SERVER_NAME'];
        $c_secure = false;
        $c_httpOnly = true;

        $cookie = cookie(
            $c_name,
            $c_value,
            $c_minutes,
            $c_path,
            $c_domain,
            $c_secure,
            $c_httpOnly,
        );

        return response()->json($data, 200)->cookie($cookie);
    }
}
