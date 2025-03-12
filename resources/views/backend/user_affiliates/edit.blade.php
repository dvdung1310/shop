@extends('dashboard')

@section('content')
<div class="container">
    <h2 class="mb-4">Chỉnh Sửa User Affiliate</h2>
    <form id="form-submit" action="{{ route('admin.affiliates.update', $affiliate->id) }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-8">
                <div class="card p-3">
                    <div class="mb-3">
                        <label for="name" class="form-label">Họ và Tên</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ old('name', $affiliate->name) }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                            value="{{ old('email', $affiliate->email) }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Số Điện Thoại</label>
                        <input type="text" class="form-control" id="phone" name="phone"
                            value="{{ old('phone', $affiliate->phone) }}">
                    </div>

                    <div class="mb-3">
                        <label for="referral_code" class="form-label">Mã Giới Thiệu</label>
                        <input type="text" class="form-control" id="referral_code" name="referral_code"
                            value="{{ old('referral_code', $affiliate->referral_code) }}" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="referrer_id" class="form-label">Người Giới Thiệu</label>
                        <select class="form-control" id="referrer_id" name="referrer_id">
                            <option value="">-- Chọn Người Giới Thiệu --</option>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}" {{ $affiliate->referrer_id == $user->id ? 'selected' : '' }}>
                                    {{ $user->name }} ({{ $user->email }})
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Cập Nhật</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
