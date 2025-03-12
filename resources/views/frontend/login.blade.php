@extends('welcome')
@section('content-home')
    <section class="pb-lg-20 pb-16">
        <div class="bg-body-secondary py-5">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-site py-0 d-flex justify-content-center">
                    <li class="breadcrumb-item"><a class="text-decoration-none text-body" href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item active pl-0 d-flex align-items-center" aria-current="page">Login
                    </li>
                </ol>
            </nav>
        </div>
        <div class="container">
            <div class=" text-center pt-13 mb-12 mb-lg-15">
                <div class="text-center">
                    <h2 class="fs-36px mb-11 mb-lg-14">Tài khoản</h2>
                </div>

            </div>
            <div class="row no-gutters">
                <div class="col-lg-10 mx-auto">
                    <div class="row no-gutters">
                        <div class="col-lg-6 mb-15 mb-lg-0 pe-xl-2">
                            <h3 class="fs-4 mb-10">Đăng nhập</h3>
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                            <form action="{{ route('login') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-6">
                                    <label for="user_login_email" class="visually-hidden">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Email Address">
                                </div>
                                <div class="form-group mb-6">
                                    <label for="user_login_password" class="visually-hidden">Mật khẩu</label>
                                    <input type="password" class="form-control" id="password"
                                        placeholder="Password" name="password">
                                </div>
                                <a href="#" class="d-inline-block fs-15 lh-12 mb-7">Quên mật khẩu</a>
                                <button type="submit" class="btn btn-primary w-100 mb-7">Đăng nhập</button>

                            </form>
                        </div>
                        <div class="col-lg-6 ps-lg-6 ps-xl-12">
                            <h3 class="fs-4 mb-8">Khách hàng mới</h3>
                            <p class="mb-8">Bằng cách tạo một tài khoản với cửa hàng của chúng tôi,
                                bạn sẽ có thể di chuyển qua quy trình thanh toán nhanh hơn,
                                lưu trữ nhiều địa chỉ vận chuyển, xem và theo dõi đơn đặt hàng của bạn
                                trong tài khoản của bạn và hơn thế nữa.</p>
                            <a href="{{ route('view_register') }}" class="btn btn-primary">Đăng ký</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
