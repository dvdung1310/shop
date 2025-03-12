<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\CartItem;
use App\Models\Order_items;
use App\Models\Orders;
use App\Models\User;
use App\Models\UserAffiliate;

class ProductFrontendController extends Controller
{
    public function product_detail($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $discount = 0;
        if ($product->price > $product->sale_price) {
            $discount = round((($product->price - $product->sale_price) / $product->price) * 100);
        }
        return view('frontend.product', compact('product', 'discount'));
    }

    public function add_cart($product_id)
    {
        $user_id = auth()->id();
        $user = User::where('id',$user_id)->first();
        if (!$user_id || $user->role == 1) {
            return redirect()->route('view_login')->with('error', 'Bạn cần đăng nhập để thêm sản phẩm vào giỏ hàng.');
        }

        $product = Product::findOrFail($product_id); // Lấy sản phẩm

        // Kiểm tra xem sản phẩm đã có trong giỏ hàng chưa
        $cartItem = CartItem::where('user_id', $user_id)
            ->where('product_id', $product_id)
            ->first();

        if ($cartItem && $cartItem->status != 1) {
            // Nếu có rồi thì tăng số lượng
            $cartItem->increment('quantity');
        } else {
            // Nếu chưa có thì thêm mới
            CartItem::create([
                'user_id' => $user_id,
                'product_id' => $product_id,
                'quantity' => 1,
                'price' => $product->sale_price,
            ]);
        }
        return redirect()->route('cart')->with('success', 'Sản phẩm đã được thêm vào giỏ hàng!');
    }


    public function cart()
    {
        $user_id = auth()->id();

        if (!$user_id) {
            return redirect()->route('view_login')->with('error', 'Bạn cần đăng nhập để xem giỏ hàng.');
        }

        $cartItems = CartItem::where('user_id', $user_id)->where('status', 0)->orderBy('created_at', 'desc')->with('product')->get();

        $totalAmount = $cartItems->sum(function ($item) {
            return $item->product->price * $item->quantity;
        });
        return view('frontend.cart', compact('cartItems', 'totalAmount'));
    }

    public function delete_cart($id)
    {
        $user_id = auth()->id();

        if (!$user_id) {
            return redirect()->route('view_login')->with('error', 'Bạn cần đăng nhập để xem giỏ hàng.');
        }

        $cartItems = CartItem::where('user_id', $user_id)->where('id', $id)->first();
        $cartItems->delete();
        return redirect()->route('cart')->with('success', 'Bạn đã xóa giỏ hàng thành công');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function store_user_oder(Request $request)
    {
        $cartItems = CartItem::where('user_id', auth()->id())->where('status',0)->with('product')->get();
        if ($cartItems->isEmpty()) {
            return redirect()->back()->with('error', 'Giỏ hàng của bạn đang trống!');
        }

        if ($request->has('referral_code') && !empty($request->referral_code)) {
            $affiliate = UserAffiliate::where('referral_code', $request->referral_code)->first();
            if (!$affiliate) {
                return redirect()->back()->with('error', 'Mã giới thiệu không hợp lệ!');
            }
        }

        // Tính tổng giá trị đơn hàng
        $totalPrice = $cartItems->sum(function ($cartItem) {
            return $cartItem->quantity * $cartItem->price;
        });

        // Tạo đơn hàng
        $order = Orders::create([
            'user_id' => auth()->id(),
            'total_price' => $totalPrice,
            'status' => 'pending',
            'payment_method' => 'COD', 
            'city'=>$request->city,
            'district'=>$request->district,
            'address_detail'=>$request->address_detail,
            'phone_number'=>$request->phone_number,
            'receiver_name'=>'',
            'referral_code'=>$request->referral_code,
        ]);

        // Lưu từng sản phẩm trong đơn hàng
        foreach ($cartItems as $cartItem) {
            Order_items::create([
                'order_id' => $order->id,
                'product_id' => $cartItem->product_id,
                'quantity' => $cartItem->quantity,
                'price' => $cartItem->price,
            ]);

            $cartItem->status = 1 ;
            $cartItem->save();
        }
        return redirect()->back()->with('success', 'Đặt hàng thành công!');
    }
}
