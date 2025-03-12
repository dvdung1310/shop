@extends('dashboard')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Thêm Đơn Hàng Thủ Công</h2>
        <a href="{{ route('admin.orders.index') }}" class="btn btn-secondary">Quay lại</a>
    </div>

    <div class="card p-3">
        <form action="{{ route('admin.orders.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="user_id" class="form-label">Khách hàng</label>
                <select name="user_id" id="user_id" class="form-control" required>
                    <option value="">-- Chọn khách hàng --</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }} ({{ $user->email }})</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Chọn sản phẩm</label>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Chọn</th>
                            <th>Sản phẩm</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>
                                    <input type="checkbox" name="products[{{ $product->id }}][id]" value="{{ $product->id }}">
                                </td>
                                <td>{{ $product->name }}</td>
                                <td>{{ number_format($product->price, 0, ',', '.') }} đ</td>
                                <td>
                                    <input type="number" name="products[{{ $product->id }}][quantity]" min="1" class="form-control" value="1">
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mb-3">
                <label for="city" class="form-label">Tỉnh/Thành phố</label>
                <input type="text" name="city" id="city" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="district" class="form-label">Quận/Huyện</label>
                <input type="text" name="district" id="district" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="address_detail" class="form-label">Địa chỉ chi tiết</label>
                <input type="text" name="address_detail" id="address_detail" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="phone_number" class="form-label">Số điện thoại</label>
                <input type="text" name="phone_number" id="phone_number" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="payment_method" class="form-label">Phương thức thanh toán</label>
                <select name="payment_method" id="payment_method" class="form-control" required>
                    <option value="COD">Thanh toán khi nhận hàng</option>
                    <option value="Bank">Chuyển khoản ngân hàng</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="referral_code" class="form-label">Mã giới thiệu (nếu có)</label>
                <input type="text" name="referral_code" id="referral_code" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Tạo Đơn Hàng</button>
        </form>
    </div>
</div>
@endsection
