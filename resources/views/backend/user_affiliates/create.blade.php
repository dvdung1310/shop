@extends('dashboard')

@section('content')
    <div class="container">
        <h2 class="mb-4">Thêm User Affiliate</h2>
        <form id="form-submit" action="{{ route('admin.affiliates.store') }}" method="POST">
            @csrf

            <div class="row">
                <div class="col-md-8">
                    <div class="card p-3">
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="name" class="form-label">Tên</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ old('name') }}" required>
                            </div>
    
                            <div class="mb-3 col-md-6">
                                <label for="phone" class="form-label">Số điện thoại</label>
                                <input type="text" class="form-control" id="phone" name="phone"
                                    value="{{ old('phone') }}">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                value="{{ old('email') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Mật khẩu</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>

                        

                        <div class="mb-3">
                            <label for="referral_code" class="form-label">Mã giới thiệu</label>
                            <input type="text" class="form-control" id="referral_code" name="referral_code"
                                value="{{ old('referral_code') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="referrer_id" class="form-label">Người giới thiệu</label>
                            <select class="form-control" id="referrer_id" name="referrer_id">
                                <option value="">-- Chọn người giới thiệu --</option>
                                @foreach ($affiliates as $affiliate)
                                    <option value="{{ $affiliate->id }}" 
                                        @if (old('referrer_id') == $affiliate->id) selected @endif>
                                        {{ $affiliate->name }} ({{ $affiliate->referral_code }})
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Lưu User Affiliate</button>
                    </div>
                </div>

                <div class="col-md-4">
                    <img class="w-100" src="https://cdnv2.tgdd.vn/mwg-static/common/News/1572878/Best-Niches-For-Affiliate-Marketing-Based-On-Current-Data.jpg" alt="">
                </div>
            </div>
        </form>
    </div>
@endsection
