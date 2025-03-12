@extends('dashboard')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Chi Tiết Đơn Hàng #{{ $order->id }}</h2>
        <a href="{{ route('admin.orders.index') }}" class="btn btn-secondary">Quay lại</a>
    </div>

    <div class="card p-3">
        <h5 class="mb-3">Thông Tin Khách Hàng</h5>
        <table class="table table-bordered">
            <tr>
                <th>Họ Tên</th>
                <td>{{ $order->user->name ?? 'Khách vãng lai' }}</td>
            </tr>
            <tr>
                <th>Số điện thoại</th>
                <td>{{ $order->phone_number }}</td>
            </tr>
            <tr>
                <th>Địa chỉ</th>
                <td>{{ $order->address_detail }}, {{ $order->district }}, {{ $order->city }}</td>
            </tr>
            <tr>
                <th>Phương thức thanh toán</th>
                <td>{{ $order->payment_method }}</td>
            </tr>
            <tr>
                <th>Mã giới thiệu</th>
                <td>{{ $order->referral_code ?? 'Không có' }}</td>
            </tr>
            <tr>
                <th>Trạng thái</th>
                <td>
                    <span class="badge bg-{{ $order->status == 'pending' ? 'warning' : 'success' }}">
                        {{ ucfirst($order->status) }}
                    </span>
                </td>
            </tr>
            <tr>
                <th>Ngày đặt</th>
                <td>{{ $order->created_at->format('d/m/Y H:i') }}</td>
            </tr>
        </table>
    </div>

    <div class="card p-3 mt-4">
        <h5 class="mb-3">Danh Sách Sản Phẩm</h5>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Ảnh</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Số Lượng</th>
                    <th>Đơn Giá</th>
                    <th>Thành Tiền</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order->orderItems as $item)
                    <tr>
                        <td>
                            <img src="{{ asset($item->product->image) }}" alt="{{ $item->product->name }}" width="50">
                        </td>
                        <td>{{ $item->product->name }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>{{ number_format($item->price, 0, ',', '.') }} đ</td>
                        <td>{{ number_format($item->quantity * $item->price, 0, ',', '.') }} đ</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <h4 class="text-end mt-3">Tổng cộng: {{ number_format($order->total_price, 0, ',', '.') }} đ</h4>
    </div>
</div>
@endsection
