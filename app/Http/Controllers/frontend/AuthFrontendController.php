<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthFrontendController extends Controller
{

    public function view_login(){
        return view('frontend.login');
    }
    public function login(Request $request) {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
    
        if (Auth::attempt($credentials)) {
            if (Auth::user()->role == 2) {
                return redirect()->route('index')->with('success', 'Đăng nhập thành công!');
            } else {
                return redirect()->route('view_login')->with('error', 'Tài khoản không đúng!');
            }
        }
    
        return redirect()->route('view_login')->with('error', 'Tài khoản không đúng!');
    }

    public function view_register(){
        return view('frontend.register');
    }
    
    public function register(Request $request) {
        if (User::where('email', $request->email)->exists()) {
            return redirect()->route('view_register')->with('error', 'Email đã được đăng ký');
        }
        if (strlen($request->password) < 6) {
            return redirect()->route('view_register')->with('error', 'Mật khẩu phải có ít nhất 6 ký tự.');
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
       
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 2, 
        ]);
        return redirect()->route('view_login')->with('success', 'Đăng ký thành công!');
    }
    
}
