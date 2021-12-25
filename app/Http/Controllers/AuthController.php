<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

    public function showFormLogin() {
        return view("auth.login");
    }

    public function login(Request $request) {
        $data = $request->only("email","password");
        if(Auth::attempt($data)) {
            return redirect()->route("posts.list");
        }else{
            echo "1";
        }
    }

    public function logout() {
        Session::flush();
        Auth::logout();
        return redirect()->route("showFormLogin");
    }

     public function showFormSignUp() {
        return view("auth.signup");
     }

    public function register(Request $request) {
      $data = $request->only("name","email","password");
      $data["password"] = Hash::make($request->password);
         User::query()->create($data);
      return redirect()->route("showFormLogin");
    }

    public function showFormResetPassword() {
        return view("auth.formResetPassword");
    }

    public function resetPassword(Request $request) {
        $currentPassword = Auth::user()->password;
        $newPassword = $request->newPassword;
        if(Hash::check($request->currentPassword,$currentPassword)) {
            Auth::user()->password = Hash::make($newPassword);
            Auth::user()->save();
            return redirect()->route("showFormLogin");
        }else {
            dd("nhap lai mat khau hien tai");
        }
    }
}
