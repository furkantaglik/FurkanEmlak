<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $username = $request->input("username");
        $email = $request->input("email");
        $password = $request->input("password");

        //aynı eposta varsa kaydetme
        $existingUser = UserModel::whereEmail($email)->first();
        if($existingUser){
            return view("register", ["error" =>"$email Bu E-posta zaten kullanılıyor"]);
        }
        //veritabanına ekleme
        $user = UserModel::create([
            "email" => $email,
            "username" => $username,
            "password" => $password
        ]);

        //başarılıysa sessiona kaydet ve yönlendir
        if ($user) {
            $data = [
                'user_id' => $user->id,
                'username' => $user->username,
                'email' => $user->email,
                'password' => $user->password,
            ];

            $request->session()->put($data);
            return redirect()->route("home");
        } else {
            return view("register", ["error" => "Hesap oluşturma başarısız"]);
        }

    }

    public function login(Request $request)
    {
        $username = $request->input("username");
        $password = $request->input("password");

        $user = UserModel::where("username",$username)->where("password",$password)->first();

        if ($user) {
            $data = [
                'user_id' => $user->user_id,
                'username' => $user->username,
                'email' => $user->email,
                'password' => $user->password,
            ];

            $request->session()->put($data);
            return redirect()->route("home");
        } else {
            return view("login", ["error" => "Kullanıcı adı veya şifre hatalı"]);
        }
    }
    public function logout(Request $request)
    {
        session()->flush();
        return redirect()->route("home");
    }
}