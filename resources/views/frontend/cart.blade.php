@extends('welcome')

@section('content-home')
    <section class="z-index-2 position-relative pb-2 mb-12">
        <div class="bg-body-secondary mb-3">
            <div class="container">
                <nav class="py-4 lh-30px" aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center py-1 mb-0">
                        <li class="breadcrumb-item"><a title="Home" href="{{ route('index') }}">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a title="Shop" href="../shop/shop-layout-v2.html">Sản phẩm</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Giỏ hàng</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="shopping-cart">
            <h2 class="text-center fs-2 mt-12 mb-13">Giỏ hàng</h2>
            <form class="table-responsive-md pb-8 pb-lg-10">
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
                <table class="table border">
                    <thead class="bg-body-secondary">
                        <tr class="fs-15px letter-spacing-01 fw-semibold text-uppercase text-body-emphasis">
                            <th scope="col" class="fw-semibold border-1 ps-11">Sản phẩm</th>
                            <th scope="col" class="fw-semibold border-1">Số lượng</th>
                            <th colspan="2" class="fw-semibold border-1">Giá</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cartItems as $item)
                            <tr class="position-relative">
                                <th scope="row" class="pe-5 ps-8 py-7 shop-product">
                                    <div class="d-flex align-items-center">
                                        <div class="form-check">
                                            <input class="form-check-input rounded-0" type="checkbox" name="check-product"
                                                value="checkbox">
                                        </div>
                                        <div class="ms-6 me-7">
                                            <img src="#" data-src="{{ asset($item->product->image) }}"
                                                class="lazy-image" width="75" height="100"
                                                alt="Natural Coconut Cleansing Oil">
                                        </div>
                                        <div class="">
                                            <p class="fw-500 mb-1 text-body-emphasis">{{ $item->product->name }}</p>
                                            <p class="card-text">
                                                <span
                                                    class="fs-13px fw-500 text-decoration-line-through pe-3">{{ number_format($item->product->price) }}</span>
                                                <span
                                                    class="fs-15px fw-bold text-body-emphasis">{{ number_format($item->price) }}</span>
                                            </p>
                                        </div>
                                    </div>

                                </th>
                                <td class="align-middle">
                                    <div class="input-group position-relative shop-quantity">
                                        <a href="#" class="shop-down position-absolute z-index-2"><i
                                                class="far fa-minus"></i></a>
                                        <input name="number[]" type="number"
                                            class="form-control form-control-sm px-10 py-4 fs-6 text-center border-0"
                                            value="{{ $item->quantity }}" required="">
                                        <a href="#" class="shop-up position-absolute z-index-2"><i
                                                class="far fa-plus"></i>
                                        </a>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <p class="mb-0 text-body-emphasis fw-bold mr-xl-11">
                                        {{ number_format($item->quantity * $item->price, 0, ',', '.') }}</p>
                                </td>
                                <td class="align-middle text-end pe-8">
                                    <a href="{{ route('delete_cart', ['id' => $item->id]) }}" class="d-block text-secondary">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </td>

                            </tr>
                        @endforeach
                        <tr>
                            <td class="pt-5 pb-10 position-relative bg-body ps-0 left">
                                <a href="{{ route('index') }}" title="Countinue Shopping"
                                    class="btn btn-outline-dark me-8 text-nowrap my-5">
                                    Tiếp tục mua sắm
                                </a>
                                <button type="submit" value="Clear Shopping Cart"
                                    class="btn btn-link p-0 border-0 border-bottom border-secondary text-decoration-none rounded-0 my-5 fw-semibold ">
                                    <i class="fa fa-times me-3"></i>
                                    Xóa giỏ hàng
                                </button>
                            </td>
                            <td colspan="3" class="text-end pt-5 pb-10 position-relative bg-body right pe-0">
                                <button type="submit" value="Update Cart" class="btn btn-outline-dark my-5">Sửa giỏ hàng
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
            <form action="{{ route('store_user_oder') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row pt-8 pt-lg-11 pb-16 pb-lg-18">
                    <div class="col-lg-4 pt-2">
                        <h4 class="fs-24 mb-6">Mã người giới thiệu</h4>
                        <p class="mb-7">Nhập mã người giới thiệu nếu bạn có.</p>
                        <input type="text" name="referral_code" class="form-control mb-7"
                            placeholder="Nhập mã giới thiệu">
                    </div>
                    <div class="col-lg-4 pt-lg-2 pt-10">
                        <h4 class="fs-24 mb-6">Địa chỉ vận chuyển</h4>

                        <div class="d-flex mb-5">
                            <div class="form-check me-6 me-lg-9">
                                <input class="form-check-input form-check-input-body-emphasis" type="radio"
                                    name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Miễn phí vận chuyển
                                </label>
                                <input type="text" class="form-control mb-7 mt-7" name="city"
                                    placeholder="Tên thành phố" required>
                                <input type="text" class="form-control mb-7" name="district" placeholder="Tên huyện"
                                    required>
                                <input type="text" class="form-control mb-7" name="address_detail"
                                    placeholder="Địa chỉ cụ thể" required>
                                <input type="text" class="form-control mb-7" name="phone_number"
                                    placeholder="Số điện thoại" required>
                            </div>
                        </div>


                    </div>
                    <div class="col-lg-4 pt-lg-0 pt-11">
                        <div class="card border-0" style="box-shadow: 0 0 10px 0 rgba(0,0,0,0.1)">
                            <div class="card-body px-9 pt-6">
                                <div class="d-flex align-items-center justify-content-between mb-5">
                                    <span>Số tiền:</span>
                                    <span
                                        class="d-block ml-auto text-body-emphasis fw-bold">{{ number_format($totalAmount, 0, ',', '.') }}VND</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <span>Shipping:</span>
                                    <span class="d-block ml-auto text-body-emphasis fw-bold">$0</span>
                                </div>
                            </div>
                            <div class="card-footer bg-transparent px-0 pt-5 pb-7 mx-9">
                                <div class="d-flex align-items-center justify-content-between fw-bold mb-7">
                                    <span class="text-secondary text-body-emphasis">Tổng tiền:</span>
                                    <span
                                        class="d-block ml-auto text-body-emphasis fs-4 fw-bold">{{ number_format($totalAmount, 0, ',', '.') }}VND</span>
                                </div>
                                <button type="submit"
                                    class="btn w-100 btn-dark btn-hover-bg-primary btn-hover-border-primary"
                                    title="Check Out">Đặt hàng</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
