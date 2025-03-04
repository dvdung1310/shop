<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function view(){
        return view('backend.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:1',
        ]);

        // Đăng nhập người dùng
        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.products.index');
        }

        // Đăng nhập không thành công, quay lại với thông báo lỗi
        return back()->with('error', 'Thông tin đăng nhập không chính xác');
    }

    public function logout(Request $request)
    {
        Auth::logout(); 
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }

    public function checkLoginAndRedirect()
    {
        if (Auth::check()) {
            return redirect()->route('admin.products.index');
        }

        return redirect()->route('admin.login')->with('error', 'Bạn cần đăng nhập trước.');
    }
}
