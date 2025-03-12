<section class="container container-xxl pt-14 pt-lg-17">
    <div class="mb-lg-13 mb-7">
        <div class="text-center">
            <h2 class="mb-6">Lựa chọn của chúng tôi dành cho bạn</h2>
            <p class="fs-18px mb-0">
                Sản phẩm của chúng tôi được thiết kế dành cho tất cả mọi người.</p>
        </div>

    </div>
    <div class="row">
        @foreach($categories as $item_cate)
        <div class="col-lg-2 col-md-4 col-sm-6 mt-lg-0 mt-10">
            <div class=" card border-0 fw-semibold ">
                <a href="#" class="rounded-circle mx-auto hover-zoom-in w-100 image-box-1">
                    <img class="lazy-image img-fluid card-img light-mode-img" src="#"
                        data-src="{{ $item_cate->image }}" width="160" height="160"
                        alt="{{ $item_cate->name }}">
                    <img class="lazy-image dark-mode-img img-fluid card-img" src="#"
                        data-src="{{ $item_cate->image }}" width="160" height="160"
                        alt="{{ $item_cate->name }}">
                </a>
                <div class="card-body pt-9 pb-0 d-flex justify-content-center px-0">
                    <h4 class="fs-5 text-center position-relative">
                        <a href="#" class="text-decoration-none">{{ $item_cate->name }}</a>
                        <span
                            class=" fw-bold fs-14px position-absolute top-0 me-n6 mt-n3 end-0 top-50 translate-middle-y ">
                            {{ $item_cate->products_count }}
                        </span>
                    </h4>
                </div>
            </div>

        </div>
        @endforeach
    </div>
</section>
