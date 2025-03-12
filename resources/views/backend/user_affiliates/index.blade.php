@extends('dashboard')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Danh Sách Người Dùng Affiliate</h2>
        <a href="{{ route('admin.affiliates.create') }}" class="btn btn-success">Thêm User Affiliate</a>
    </div>
    <div class="card p-3">
        <div class="table-responsive">
            <table class="table mb-0 text-nowrap table-centered">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Họ và Tên</th>
                        <th>Email</th>
                        <th>Điện thoại</th>
                        <th>Mã Giới Thiệu</th>
                        <th>Người Giới Thiệu</th>
                        <th>Cấp Bậc</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($affiliates as $key => $affiliate)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $affiliate->name }}</td>
                            <td>{{ $affiliate->email }}</td>
                            <td>{{ $affiliate->phone ?? '-' }}</td>
                            <td>{{ $affiliate->referral_code }}</td>
                            <td>
                                @if($affiliate->referrer)
                                    {{ $affiliate->referrer->name }}
                                @else
                                    -
                                @endif
                            </td>
                            <th>F{{ $affiliate->level }}</th>
                            <td>
                                <a href="{{ route('admin.affiliates.edit', $affiliate->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                                <form action="{{ route('admin.affiliates.destroy', $affiliate->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Bạn có chắc chắn muốn xóa?');">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-center">
            {{ $affiliates->links() }}
        </div>
    </div>
</div>
@endsection
