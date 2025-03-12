<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Order_items;
use App\Models\Orders;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Orders::with('user')->orderBy('created_at', 'desc')->paginate(10);
        return view('backend.orders.index', compact('orders'));
    }

    // Hiển thị chi tiết đơn hàng
    public function show($id)
    {
        $order = Orders::with(['user', 'orderItems.product'])->findOrFail($id);
        return view('backend.orders.show', compact('order'));
    }

    // Xóa đơn hàng
    public function destroy($id)
    {
        $order = Orders::findOrFail($id);
        $order->delete();
        return redirect()->route('admin.orders.index')->with('success', 'Đơn hàng đã được xóa.');
    }

    public function create()
    {
        $users = User::where('role',2)->get(); // Lấy danh sách user để chọn khách hàng
        $products = Product::all(); // Lấy danh sách sản phẩm để chọn trong đơn hàng
        return view('backend.orders.create', compact('users', 'products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'products' => 'required|array',
            'products.*.id' => 'required|exists:products,id',
            'products.*.quantity' => 'required|integer|min:1',
            'city' => 'required|string',
            'district' => 'required|string',
            'address_detail' => 'required|string',
            'phone_number' => 'required|string',
            'payment_method' => 'required|string',
        ]);

        // Tính tổng tiền đơn hàng
        $totalPrice = 0;
        foreach ($request->products as $productData) {
            $product = Product::find($productData['id']);
            $totalPrice += $product->price * $productData['quantity'];
        }

        // Tạo đơn hàng
        $order = Orders::create([
            'user_id' => $request->user_id,
            'total_price' => $totalPrice,
            'status' => 'pending',
            'payment_method' => $request->payment_method,
            'city' => $request->city,
            'district' => $request->district,
            'address_detail' => $request->address_detail,
            'phone_number' => $request->phone_number,
            'receiver_name' => $request->receiver_name ?? '',
            'referral_code' => $request->referral_code ?? null,
        ]);

        // Thêm sản phẩm vào đơn hàng
        foreach ($request->products as $productData) {
            Order_items::create([
                'order_id' => $order->id,
                'product_id' => $productData['id'],
                'quantity' => $productData['quantity'],
                'price' => Product::find($productData['id'])->price,
            ]);
        }

        return redirect()->route('admin.orders.index')->with('success', 'Đơn hàng đã được tạo thành công.');
    }
}
