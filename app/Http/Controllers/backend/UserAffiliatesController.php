<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserAffiliate;
use Illuminate\Support\Facades\Hash;

class UserAffiliatesController extends Controller
{
    public function index()
    {
        $affiliates = UserAffiliate::orderBy('id', 'desc')->paginate(10);
        return view('backend.user_affiliates.index', compact('affiliates'));
    }

    /**
     * Hiển thị form tạo UserAffiliate
     */
    public function create()
    {
        $affiliates = UserAffiliate::all(); // Lấy danh sách user để chọn người giới thiệu
        return view('backend.user_affiliates.create', compact('affiliates'));
    }

    /**
     * Lưu UserAffiliate mới vào database
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'           => 'required|string|max:255',
            'email'          => 'required|email|unique:user_affiliates,email',
            'password'       => 'required|string',
            'phone'          => 'nullable|string|max:20',
            'referral_code'  => 'required|string|unique:user_affiliates,referral_code',
            // 'referrer_id'    => 'nullable|exists:user_affiliates,id',
        ]);

        $level = 0;
        if(isset($request->referrer_id)){
            $user = UserAffiliate::findOrFail($request->referrer_id);
            $level =  $user->level;
        }

        UserAffiliate::create([
            'name'          => $request->name,
            'email'         => $request->email,
            'password'      => Hash::make($request->password),
            'phone'         => $request->phone,
            'referral_code' => $request->referral_code,
            'referrer_id'   => $request->referrer_id,
            'level'         => $level + 1,
        ]);

        return redirect()->route('admin.affiliates.index')->with('success', 'User Affiliate đã được thêm thành công!');
    }

    /**
     * Hiển thị form chỉnh sửa UserAffiliate
     */
    public function edit($id)
    {
        $affiliate = UserAffiliate::findOrFail($id);
        $users = UserAffiliate::where('id', '!=', $id)->get(); // Không lấy chính nó
        return view('backend.user_affiliates.edit', compact('affiliate', 'users'));
    }

    /**
     * Cập nhật UserAffiliate
     */
    public function update(Request $request, $id)
    {
        $affiliate = UserAffiliate::findOrFail($id);

        $request->validate([
            'name'           => 'required|string|max:255',
            'email'          => 'required|email|unique:user_affiliates,email,' . $id,
            'phone'          => 'nullable|string|max:20',
            'referral_code'  => 'required|string|unique:user_affiliates,referral_code,' . $id,
            'referrer_id'    => 'nullable|exists:user_affiliates,id',
        ]);

        $level = 0;
        if(isset($request->referrer_id)){
            $user = UserAffiliate::findOrFail($request->referrer_id);
            $level =  $user->level;
        }

        $affiliate->update([
            'name'          => $request->name,
            'email'         => $request->email,
            'phone'         => $request->phone,
            'referral_code' => $request->referral_code,
            'referrer_id'   => $request->referrer_id,
            'level'         => $level + 1,
        ]);

        return redirect()->route('admin.affiliates.index')->with('success', 'Thông tin đã được cập nhật!');
    }

    /**
     * Xóa UserAffiliate
     */
    public function destroy($id)
    {
        $affiliate = UserAffiliate::findOrFail($id);
        $affiliate->delete();

        return redirect()->route('admin.affiliates.index')->with('success', 'User Affiliate đã được xóa!');
    }
}
