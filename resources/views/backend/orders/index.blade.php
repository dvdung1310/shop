@extends('dashboard')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Danh Sách Đơn Hàng</h2>
    </div>
    
    <div class="card p-3">
        <div class="table-responsive">
            <table class="table mb-0 text-nowrap table-centered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Người đặt</th>
                        <th>Tổng tiền</th>
                        <th>Phương thức thanh toán</th>
                        <th>Mã giới thiệu</th>
                        <th>Trạng thái</th>
                        <th>Ngày tạo</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->user->name ?? 'Khách' }}</td>
                            <td>{{ number_format($order->total_price, 0, ',', '.') }} đ</td>
                            <td>{{ $order->payment_method }}</td>
                            <td>{{ $order->referral_code ?? 'Không có' }}</td>
                            <td>
                                <span class="badge bg-{{ $order->status == 'pending' ? 'warning' : 'success' }}">
                                    {{ ucfirst($order->status) }}
                                </span>
                            </td>
                            <td>{{ $order->created_at->format('d/m/Y H:i') }}</td>
                            <td>
                                <a href="{{ route('admin.orders.show', $order->id) }}" class="btn btn-info btn-sm">Chi tiết</a>
                                <form action="{{ route('admin.orders.destroy', $order->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Bạn có chắc chắn muốn xóa?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        <div class="d-flex justify-content-center">
            {{ $orders->links() }}
        </div>
    </div>
</div>
@endsection
