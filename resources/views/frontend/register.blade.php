@extends('welcome')
@section('content-home')
    <section class="pb-lg-20 pb-16">
        <div class="bg-body-secondary py-5">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-site py-0 d-flex justify-content-center">
                    <li class="breadcrumb-item"><a class="text-decoration-none text-body" href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item active pl-0 d-flex align-items-center" aria-current="page">Register
                    </li>
                </ol>
            </nav>
        </div>
        <div class="container">
            <div class=" text-center pt-13 mb-12 mb-lg-15">
                <div class="text-center">
                    <h2 class="fs-36px mb-11 mb-lg-14">Đăng ký</h2>
                </div>
            </div>
            <div class="col-lg-5 col-md-8 mx-auto">
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-6">
                        <label for="name" class="visually-hidden">Email address</label>
                        <input name="name" id="name" type="text" class="form-control" placeholder="Họ và tên"
                            required>
                    </div>
                    <div class="mb-6">
                        <label for="email" class="visually-hidden">Email address</label>
                        <input name="email" id="email" type="email" class="form-control" placeholder="Your email"
                            required>
                    </div>
                    <div class="mb-7">
                        <label for="password" class="visually-hidden">Email address</label>
                        <input name="password" id="password" type="password" class="form-control" placeholder="Password"
                            required>
                    </div>
                    <div class="form-check mb-7">
                        <input name="agree" type="checkbox" class="form-check-input rounded-0" id="agree_terms">
                        <label class="form-check-label text-secondary" for="agree_terms">
                            Yes, I agree with Grace <a href="#" class="text-decoration-underline">Privacy Policy</a>
                            and <a href="#" class="text-decoration-underline">Terms of Use</a>
                        </label>
                    </div>
                    <button type="submit" value="Login" class="btn btn-primary w-100">Đăng ký</button>
                    <div class="border-bottom mt-10"></div>
                </form>
            </div>
        </div>
    </section>
@endsection
