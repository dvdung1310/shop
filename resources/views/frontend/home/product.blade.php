<section id="product_tabs">

    <div class="container container-xxl pt-14 pt-lg-16 pb-15 pb-lg-20 mb-4" data-bs-toggle="tab-dropdown">
        <ul class="nav nav-tabs border-0 d-lg-flex justify-content-center mb-12 d-none" role="tablist">
            <li class="nav-item" role="presentation">
                <h2 class="mb-0 px-2 mx-1">
                    <button class="nav-link px-10 py-0 border-0 text-body-emphasis opacity-30 active" data-bs-toggle="tab"
                        data-bs-target="#best-sellers-tab-pane" type="button" role="tab"
                        aria-controls="best-sellers-tab-pane" aria-selected="true">Best
                        Sellers</button>
                </h2>
            </li>
            <li class="nav-item" role="presentation">
                <h2 class="mb-0 px-2 mx-1">
                    <button class="nav-link px-10 py-0 border-0 text-body-emphasis opacity-30" data-bs-toggle="tab"
                        data-bs-target="#new-arrivals-tab-pane" type="button" role="tab"
                        aria-controls="new-arrivals-tab-pane" aria-selected="false">New
                        Arrivals</button>
                </h2>
            </li>
            <li class="nav-item" role="presentation">
                <h2 class="mb-0 px-2 mx-1">
                    <button class="nav-link px-10 py-0 border-0 text-body-emphasis opacity-30" data-bs-toggle="tab"
                        data-bs-target="#sale-tab-pane" type="button" role="tab" aria-controls="sale-tab-pane"
                        aria-selected="false">Sale</button>
                </h2>
            </li>
        </ul>
        <ul class="nav nav-tabs border-0 justify-content-center mb-12 d-flex d-lg-none py-2" role="tablist">
            <li class="nav-item me-4">
                <h3 class="mb-0">You are in</h3>
            </li>
            <li class="nav-item dropdown"><a
                    class="dropdown-toggle text-body-emphasis text-decoration-none d-flex align-items-center h3 mb-0"
                    data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Best
                    Sellers</a>
                <ul class="dropdown-menu">
                    <li class="nav-item"><a class="dropdown-item m-0 h5 active" href="#" data-bs-toggle="tab"
                            data-bs-target="#best-sellers-tab-pane" role="tab" aria-controls="best-sellers-tab-pane"
                            aria-selected="true">Best Sellers</a></li>
                    <li class="nav-item"><a class="dropdown-item m-0 h5" href="#" data-bs-toggle="tab"
                            data-bs-target="#new-arrivals-tab-pane" role="tab" aria-controls="new-arrivals-tab-pane"
                            aria-selected="false">New Arrivals</a></li>
                    <li class="nav-item"><a class="dropdown-item m-0 h5" href="#" data-bs-toggle="tab"
                            data-bs-target="#sale-tab-pane" role="tab" aria-controls="sale-tab-pane"
                            aria-selected="false">Sale</a></li>
                </ul>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="best-sellers-tab-pane" role="tabpanel" tabindex="0">
                <div class="row gy-50px">
                    @foreach ($product_best_sellers as $key => $item)
                        <div class="col-lg-4 col-xl-3 col-sm-6">
                            <div class="card card-product grid-1 bg-transparent border-0">
                                <figure class="card-img-top position-relative mb-7 overflow-hidden">
                                    <a href="{{ route('product_detail',['slug'=>$item->slug]) }}" class="hover-zoom-in d-block" title="Shield Conditioner">
                                        <img src="#" data-src="{{ asset($item->image) }}"
                                            class="img-fluid lazy-image w-100" alt="Shield Conditioner" width="330"
                                            height="440">
                                    </a>

                                    <div class="position-absolute product-flash z-index-2 "><span
                                            class="badge badge-product-flash on-sale bg-primary">-
                                            {{ $item->discount_percent }}%</span></div>
                                    <div class="position-absolute d-flex z-index-2 product-actions  horizontal"><a
                                            class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm add_to_cart"
                                            href="{{ route('add_cart',['product_id'=>$item->id]) }}" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="Add To Cart">
                                            <svg class="icon icon-shopping-bag-open-light">
                                                <use xlink:href="#icon-shopping-bag-open-light"></use>
                                            </svg>
                                        </a><a
                                            class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm quick-view"
                                            href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="Quick View">
                                            <span data-bs-toggle="modal"
                                                data-bs-target="#quickViewModal{{ $key }}"
                                                class="d-flex align-items-center justify-content-center">
                                                <svg class="icon icon-eye-light">
                                                    <use xlink:href="#icon-eye-light"></use>
                                                </svg>
                                            </span>
                                        </a>
                                        <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm wishlist"
                                            href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="Add To Wishlist">
                                            <svg class="icon icon-star-light">
                                                <use xlink:href="#icon-star-light"></use>
                                            </svg>
                                        </a>
                                        <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm compare"
                                            href="./shop/compare.html" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-title="Compare">
                                            <svg class="icon icon-arrows-left-right-light">
                                                <use xlink:href="#icon-arrows-left-right-light"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </figure>
                                <div class="card-body text-center p-0">
                                    <span
                                        class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">
                                        <del class=" text-body fw-500 me-4 fs-13px">{{ $item->price }}VND</del>
                                        <ins class="text-decoration-none">{{ $item->sale_price }}VND</ins></span>

                                    <h4
                                        class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                        <a class="text-decoration-none text-reset"
                                            href="{{ route('product_detail',['slug'=>$item->slug]) }}">{{ $item->name }}</a>
                                    </h4>
                                    <div class="d-flex align-items-center fs-12px justify-content-center">
                                        <div class="rating">
                                            <div class="empty-stars">
                                                <span class="star">
                                                    <svg class="icon star-o">
                                                        <use xlink:href="#star-o"></use>
                                                    </svg>
                                                </span>
                                                <span class="star">
                                                    <svg class="icon star-o">
                                                        <use xlink:href="#star-o"></use>
                                                    </svg>
                                                </span>
                                                <span class="star">
                                                    <svg class="icon star-o">
                                                        <use xlink:href="#star-o"></use>
                                                    </svg>
                                                </span>
                                                <span class="star">
                                                    <svg class="icon star-o">
                                                        <use xlink:href="#star-o"></use>
                                                    </svg>
                                                </span>
                                                <span class="star">
                                                    <svg class="icon star-o">
                                                        <use xlink:href="#star-o"></use>
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="filled-stars" style="width: 80%">
                                                <span class="star">
                                                    <svg class="icon star text-primary">
                                                        <use xlink:href="#star"></use>
                                                    </svg>
                                                </span>
                                                <span class="star">
                                                    <svg class="icon star text-primary">
                                                        <use xlink:href="#star"></use>
                                                    </svg>
                                                </span>
                                                <span class="star">
                                                    <svg class="icon star text-primary">
                                                        <use xlink:href="#star"></use>
                                                    </svg>
                                                </span>
                                                <span class="star">
                                                    <svg class="icon star text-primary">
                                                        <use xlink:href="#star"></use>
                                                    </svg>
                                                </span>
                                                <span class="star">
                                                    <svg class="icon star text-primary">
                                                        <use xlink:href="#star"></use>
                                                    </svg>
                                                </span>
                                            </div>
                                        </div><span class="reviews ms-4 pt-3 fs-14px">2947 reviews</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            {{-- <div class="tab-pane fade" id="new-arrivals-tab-pane" role="tabpanel" tabindex="0">
                <div class="row gy-50px">
                    <div class="col-lg-4 col-xl-3 col-sm-6">
                        <div class="card card-product grid-1 bg-transparent border-0">
                            <figure class="card-img-top position-relative mb-7 overflow-hidden ">
                                <a href="./shop/product-details-v1.html" class="hover-zoom-in d-block"
                                    title="Supreme Moisture Mask">
                                    <img src="#" data-src="./assets/images/products/product-09-330x440.jpg"
                                        class="img-fluid lazy-image w-100" alt="Supreme Moisture Mask" width="330"
                                        height="440">
                                </a>

                                <div class="position-absolute product-flash z-index-2 "><span
                                        class="badge badge-product-flash on-sale bg-primary">-26%</span></div>
                                <div class="position-absolute d-flex z-index-2 product-actions  horizontal"><a
                                        class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm add_to_cart"
                                        href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Add To Cart">
                                        <svg class="icon icon-shopping-bag-open-light">
                                            <use xlink:href="#icon-shopping-bag-open-light"></use>
                                        </svg>
                                    </a><a
                                        class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm quick-view"
                                        href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Quick View">
                                        <span data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                            class="d-flex align-items-center justify-content-center">
                                            <svg class="icon icon-eye-light">
                                                <use xlink:href="#icon-eye-light"></use>
                                            </svg>
                                        </span>
                                    </a>
                                    <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm wishlist"
                                        href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Add To Wishlist">
                                        <svg class="icon icon-star-light">
                                            <use xlink:href="#icon-star-light"></use>
                                        </svg>
                                    </a>
                                    <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm compare"
                                        href="./shop/compare.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Compare">
                                        <svg class="icon icon-arrows-left-right-light">
                                            <use xlink:href="#icon-arrows-left-right-light"></use>
                                        </svg>
                                    </a>
                                </div>
                            </figure>
                            <div class="card-body text-center p-0">
                                <span
                                    class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">
                                    <del class=" text-body fw-500 me-4 fs-13px">$39.00</del>
                                    <ins class="text-decoration-none">$29.00</ins></span>

                                <h4
                                    class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                    <a class="text-decoration-none text-reset"
                                        href="./shop/product-details-v1.html">Supreme Moisture Mask</a>
                                </h4>
                                <div class="d-flex align-items-center fs-12px justify-content-center">
                                    <div class="rating">
                                        <div class="empty-stars">
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="filled-stars" style="width: 80%">
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                        </div>
                                    </div><span class="reviews ms-4 pt-3 fs-14px">2947 reviews</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3 col-sm-6">
                        <div class="card card-product grid-1 bg-transparent border-0">
                            <figure class="card-img-top position-relative mb-7 overflow-hidden ">
                                <a href="./shop/product-details-v1.html" class="hover-zoom-in d-block"
                                    title="Supreme Polishing Treatment">
                                    <img src="#" data-src="./assets/images/products/product-10-330x440.jpg"
                                        class="img-fluid lazy-image w-100" alt="Supreme Polishing Treatment"
                                        width="330" height="440">
                                </a>

                                <div class="position-absolute d-flex z-index-2 product-actions  horizontal"><a
                                        class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm add_to_cart"
                                        href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Add To Cart">
                                        <svg class="icon icon-shopping-bag-open-light">
                                            <use xlink:href="#icon-shopping-bag-open-light"></use>
                                        </svg>
                                    </a><a
                                        class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm quick-view"
                                        href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Quick View">
                                        <span data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                            class="d-flex align-items-center justify-content-center">
                                            <svg class="icon icon-eye-light">
                                                <use xlink:href="#icon-eye-light"></use>
                                            </svg>
                                        </span>
                                    </a>
                                    <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm wishlist"
                                        href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Add To Wishlist">
                                        <svg class="icon icon-star-light">
                                            <use xlink:href="#icon-star-light"></use>
                                        </svg>
                                    </a>
                                    <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm compare"
                                        href="./shop/compare.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Compare">
                                        <svg class="icon icon-arrows-left-right-light">
                                            <use xlink:href="#icon-arrows-left-right-light"></use>
                                        </svg>
                                    </a>
                                </div>
                            </figure>
                            <div class="card-body text-center p-0">






                                <span
                                    class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">$29.00</span>

                                <h4
                                    class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                    <a class="text-decoration-none text-reset"
                                        href="./shop/product-details-v1.html">Supreme Polishing Treatment</a>
                                </h4>
                                <div class="d-flex align-items-center fs-12px justify-content-center">
                                    <div class="rating">
                                        <div class="empty-stars">
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="filled-stars" style="width: 100%">
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                        </div>
                                    </div><span class="reviews ms-4 pt-3 fs-14px">2947 reviews</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3 col-sm-6">
                        <div class="card card-product grid-1 bg-transparent border-0">
                            <figure class="card-img-top position-relative mb-7 overflow-hidden ">
                                <a href="./shop/product-details-v1.html" class="hover-zoom-in d-block"
                                    title="Scalp Moisturizing Cream">
                                    <img src="#" data-src="./assets/images/products/product-11-330x440.jpg"
                                        class="img-fluid lazy-image w-100" alt="Scalp Moisturizing Cream"
                                        width="330" height="440">
                                </a>

                                <div class="position-absolute d-flex z-index-2 product-actions  horizontal"><a
                                        class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm add_to_cart"
                                        href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Add To Cart">
                                        <svg class="icon icon-shopping-bag-open-light">
                                            <use xlink:href="#icon-shopping-bag-open-light"></use>
                                        </svg>
                                    </a><a
                                        class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm quick-view"
                                        href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Quick View">
                                        <span data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                            class="d-flex align-items-center justify-content-center">
                                            <svg class="icon icon-eye-light">
                                                <use xlink:href="#icon-eye-light"></use>
                                            </svg>
                                        </span>
                                    </a>
                                    <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm wishlist"
                                        href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Add To Wishlist">
                                        <svg class="icon icon-star-light">
                                            <use xlink:href="#icon-star-light"></use>
                                        </svg>
                                    </a>
                                    <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm compare"
                                        href="./shop/compare.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Compare">
                                        <svg class="icon icon-arrows-left-right-light">
                                            <use xlink:href="#icon-arrows-left-right-light"></use>
                                        </svg>
                                    </a>
                                </div>
                            </figure>
                            <div class="card-body text-center p-0">






                                <span
                                    class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">$29.00</span>

                                <h4
                                    class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                    <a class="text-decoration-none text-reset"
                                        href="./shop/product-details-v1.html">Scalp Moisturizing Cream</a>
                                </h4>
                                <div class="d-flex align-items-center fs-12px justify-content-center">
                                    <div class="rating">
                                        <div class="empty-stars">
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="filled-stars" style="width: 100%">
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                        </div>
                                    </div><span class="reviews ms-4 pt-3 fs-14px">2947 reviews</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3 col-sm-6">
                        <div class="card card-product grid-1 bg-transparent border-0">
                            <figure class="card-img-top position-relative mb-7 overflow-hidden ">
                                <a href="./shop/product-details-v1.html" class="hover-zoom-in d-block"
                                    title="Natural Coconut Cleansing Oil">
                                    <img src="#" data-src="./assets/images/products/product-12-330x440.jpg"
                                        class="img-fluid lazy-image w-100" alt="Natural Coconut Cleansing Oil"
                                        width="330" height="440">
                                </a>

                                <div class="position-absolute product-flash z-index-2 "><span
                                        class="badge badge-product-flash on-sale bg-primary">-26%</span></div>
                                <div class="position-absolute d-flex z-index-2 product-actions  horizontal"><a
                                        class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm add_to_cart"
                                        href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Add To Cart">
                                        <svg class="icon icon-shopping-bag-open-light">
                                            <use xlink:href="#icon-shopping-bag-open-light"></use>
                                        </svg>
                                    </a><a
                                        class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm quick-view"
                                        href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Quick View">
                                        <span data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                            class="d-flex align-items-center justify-content-center">
                                            <svg class="icon icon-eye-light">
                                                <use xlink:href="#icon-eye-light"></use>
                                            </svg>
                                        </span>
                                    </a>
                                    <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm wishlist"
                                        href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Add To Wishlist">
                                        <svg class="icon icon-star-light">
                                            <use xlink:href="#icon-star-light"></use>
                                        </svg>
                                    </a>
                                    <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm compare"
                                        href="./shop/compare.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Compare">
                                        <svg class="icon icon-arrows-left-right-light">
                                            <use xlink:href="#icon-arrows-left-right-light"></use>
                                        </svg>
                                    </a>
                                </div>
                            </figure>
                            <div class="card-body text-center p-0">






                                <span
                                    class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">
                                    <del class=" text-body fw-500 me-4 fs-13px">$39.00</del>
                                    <ins class="text-decoration-none">$29.00</ins></span>

                                <h4
                                    class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                    <a class="text-decoration-none text-reset"
                                        href="./shop/product-details-v1.html">Natural Coconut Cleansing
                                        Oil</a>
                                </h4>
                                <div class="d-flex align-items-center fs-12px justify-content-center">
                                    <div class="rating">
                                        <div class="empty-stars">
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="filled-stars" style="width: 80%">
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                        </div>
                                    </div><span class="reviews ms-4 pt-3 fs-14px">2947 reviews</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3 col-sm-6">
                        <div class="card card-product grid-1 bg-transparent border-0">
                            <figure class="card-img-top position-relative mb-7 overflow-hidden ">
                                <a href="./shop/product-details-v1.html" class="hover-zoom-in d-block"
                                    title="Shield Conditioner">
                                    <img src="#" data-src="./assets/images/products/product-01-330x440.jpg"
                                        class="img-fluid lazy-image w-100" alt="Shield Conditioner" width="330"
                                        height="440">
                                </a>

                                <div class="position-absolute product-flash z-index-2 "><span
                                        class="badge badge-product-flash on-sale bg-primary">-25%</span></div>
                                <div class="position-absolute d-flex z-index-2 product-actions  horizontal"><a
                                        class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm add_to_cart"
                                        href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Add To Cart">
                                        <svg class="icon icon-shopping-bag-open-light">
                                            <use xlink:href="#icon-shopping-bag-open-light"></use>
                                        </svg>
                                    </a><a
                                        class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm quick-view"
                                        href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Quick View">
                                        <span data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                            class="d-flex align-items-center justify-content-center">
                                            <svg class="icon icon-eye-light">
                                                <use xlink:href="#icon-eye-light"></use>
                                            </svg>
                                        </span>
                                    </a>
                                    <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm wishlist"
                                        href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Add To Wishlist">
                                        <svg class="icon icon-star-light">
                                            <use xlink:href="#icon-star-light"></use>
                                        </svg>
                                    </a>
                                    <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm compare"
                                        href="./shop/compare.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Compare">
                                        <svg class="icon icon-arrows-left-right-light">
                                            <use xlink:href="#icon-arrows-left-right-light"></use>
                                        </svg>
                                    </a>
                                </div>
                            </figure>
                            <div class="card-body text-center p-0">






                                <span
                                    class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">
                                    <del class=" text-body fw-500 me-4 fs-13px">$40.00</del>
                                    <ins class="text-decoration-none">$30.00</ins></span>

                                <h4
                                    class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                    <a class="text-decoration-none text-reset"
                                        href="./shop/product-details-v1.html">Shield Conditioner</a>
                                </h4>
                                <div class="d-flex align-items-center fs-12px justify-content-center">
                                    <div class="rating">
                                        <div class="empty-stars">
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="filled-stars" style="width: 80%">
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                        </div>
                                    </div><span class="reviews ms-4 pt-3 fs-14px">2947 reviews</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3 col-sm-6">
                        <div class="card card-product grid-1 bg-transparent border-0">
                            <figure class="card-img-top position-relative mb-7 overflow-hidden ">
                                <a href="./shop/product-details-v1.html" class="hover-zoom-in d-block"
                                    title="Perfecting Facial Oil">
                                    <img src="#" data-src="./assets/images/products/product-02-330x440.jpg"
                                        class="img-fluid lazy-image w-100" alt="Perfecting Facial Oil" width="330"
                                        height="440">
                                </a>

                                <div class="position-absolute d-flex z-index-2 product-actions  horizontal"><a
                                        class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm add_to_cart"
                                        href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Add To Cart">
                                        <svg class="icon icon-shopping-bag-open-light">
                                            <use xlink:href="#icon-shopping-bag-open-light"></use>
                                        </svg>
                                    </a><a
                                        class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm quick-view"
                                        href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Quick View">
                                        <span data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                            class="d-flex align-items-center justify-content-center">
                                            <svg class="icon icon-eye-light">
                                                <use xlink:href="#icon-eye-light"></use>
                                            </svg>
                                        </span>
                                    </a>
                                    <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm wishlist"
                                        href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Add To Wishlist">
                                        <svg class="icon icon-star-light">
                                            <use xlink:href="#icon-star-light"></use>
                                        </svg>
                                    </a>
                                    <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm compare"
                                        href="./shop/compare.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Compare">
                                        <svg class="icon icon-arrows-left-right-light">
                                            <use xlink:href="#icon-arrows-left-right-light"></use>
                                        </svg>
                                    </a>
                                </div>
                            </figure>
                            <div class="card-body text-center p-0">






                                <span
                                    class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">$20.00</span>

                                <h4
                                    class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                    <a class="text-decoration-none text-reset"
                                        href="./shop/product-details-v1.html">Perfecting Facial Oil</a>
                                </h4>
                                <div class="d-flex align-items-center fs-12px justify-content-center">
                                    <div class="rating">
                                        <div class="empty-stars">
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="filled-stars" style="width: 100%">
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                        </div>
                                    </div><span class="reviews ms-4 pt-3 fs-14px">2947 reviews</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3 col-sm-6">
                        <div class="card card-product grid-1 bg-transparent border-0">
                            <figure class="card-img-top position-relative mb-7 overflow-hidden ">
                                <a href="./shop/product-details-v1.html" class="hover-zoom-in d-block"
                                    title="Enriched Hand &amp; Body Wash">
                                    <img src="#" data-src="./assets/images/products/product-03-330x440.jpg"
                                        class="img-fluid lazy-image w-100" alt="Enriched Hand &amp; Body Wash"
                                        width="330" height="440">
                                </a>

                                <div class="position-absolute product-flash z-index-2 "><span
                                        class="badge badge-product-flash on-new">New</span></div>
                                <div class="position-absolute d-flex z-index-2 product-actions  horizontal"><a
                                        class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm add_to_cart"
                                        href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Add To Cart">
                                        <svg class="icon icon-shopping-bag-open-light">
                                            <use xlink:href="#icon-shopping-bag-open-light"></use>
                                        </svg>
                                    </a><a
                                        class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm quick-view"
                                        href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Quick View">
                                        <span data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                            class="d-flex align-items-center justify-content-center">
                                            <svg class="icon icon-eye-light">
                                                <use xlink:href="#icon-eye-light"></use>
                                            </svg>
                                        </span>
                                    </a>
                                    <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm wishlist"
                                        href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Add To Wishlist">
                                        <svg class="icon icon-star-light">
                                            <use xlink:href="#icon-star-light"></use>
                                        </svg>
                                    </a>
                                    <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm compare"
                                        href="./shop/compare.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Compare">
                                        <svg class="icon icon-arrows-left-right-light">
                                            <use xlink:href="#icon-arrows-left-right-light"></use>
                                        </svg>
                                    </a>
                                </div>
                            </figure>
                            <div class="card-body text-center p-0">






                                <span
                                    class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">$29.00</span>

                                <h4
                                    class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                    <a class="text-decoration-none text-reset"
                                        href="./shop/product-details-v1.html">Enriched Hand &amp; Body
                                        Wash</a>
                                </h4>
                                <div class="d-flex align-items-center fs-12px justify-content-center">
                                    <div class="rating">
                                        <div class="empty-stars">
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="filled-stars" style="width: 100%">
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                        </div>
                                    </div><span class="reviews ms-4 pt-3 fs-14px">2947 reviews</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3 col-sm-6">
                        <div class="card card-product grid-1 bg-transparent border-0">
                            <figure class="card-img-top position-relative mb-7 overflow-hidden ">
                                <a href="./shop/product-details-v1.html" class="hover-zoom-in d-block"
                                    title="Shield Shampoo">
                                    <img src="#" data-src="./assets/images/products/product-04-330x440.jpg"
                                        class="img-fluid lazy-image w-100" alt="Shield Shampoo" width="330"
                                        height="440">
                                </a>

                                <div class="position-absolute product-flash z-index-2 "><span
                                        class="badge badge-product-flash on-sale bg-primary">-24%</span></div>
                                <div class="position-absolute d-flex z-index-2 product-actions  horizontal"><a
                                        class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm add_to_cart"
                                        href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Add To Cart">
                                        <svg class="icon icon-shopping-bag-open-light">
                                            <use xlink:href="#icon-shopping-bag-open-light"></use>
                                        </svg>
                                    </a><a
                                        class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm quick-view"
                                        href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Quick View">
                                        <span data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                            class="d-flex align-items-center justify-content-center">
                                            <svg class="icon icon-eye-light">
                                                <use xlink:href="#icon-eye-light"></use>
                                            </svg>
                                        </span>
                                    </a>
                                    <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm wishlist"
                                        href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Add To Wishlist">
                                        <svg class="icon icon-star-light">
                                            <use xlink:href="#icon-star-light"></use>
                                        </svg>
                                    </a>
                                    <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm compare"
                                        href="./shop/compare.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Compare">
                                        <svg class="icon icon-arrows-left-right-light">
                                            <use xlink:href="#icon-arrows-left-right-light"></use>
                                        </svg>
                                    </a>
                                </div>
                            </figure>
                            <div class="card-body text-center p-0">






                                <span
                                    class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">
                                    <del class=" text-body fw-500 me-4 fs-13px">$25.00</del>
                                    <ins class="text-decoration-none">$19.00</ins></span>

                                <h4
                                    class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                    <a class="text-decoration-none text-reset"
                                        href="./shop/product-details-v1.html">Shield Shampoo</a>
                                </h4>
                                <div class="d-flex align-items-center fs-12px justify-content-center">
                                    <div class="rating">
                                        <div class="empty-stars">
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="filled-stars" style="width: 80%">
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                        </div>
                                    </div><span class="reviews ms-4 pt-3 fs-14px">2947 reviews</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="sale-tab-pane" role="tabpanel" tabindex="0">
                <div class="row gy-50px">
                    <div class="col-lg-4 col-xl-3 col-sm-6">
                        <div class="card card-product grid-1 bg-transparent border-0">
                            <figure class="card-img-top position-relative mb-7 overflow-hidden ">
                                <a href="./shop/product-details-v1.html" class="hover-zoom-in d-block"
                                    title="Shield Conditioner">
                                    <img src="#" data-src="./assets/images/products/product-01-330x440.jpg"
                                        class="img-fluid lazy-image w-100" alt="Shield Conditioner" width="330"
                                        height="440">
                                </a>

                                <div class="position-absolute product-flash z-index-2 "><span
                                        class="badge badge-product-flash on-sale bg-primary">-25%</span></div>
                                <div class="position-absolute d-flex z-index-2 product-actions  horizontal"><a
                                        class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm add_to_cart"
                                        href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Add To Cart">
                                        <svg class="icon icon-shopping-bag-open-light">
                                            <use xlink:href="#icon-shopping-bag-open-light"></use>
                                        </svg>
                                    </a><a
                                        class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm quick-view"
                                        href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Quick View">
                                        <span data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                            class="d-flex align-items-center justify-content-center">
                                            <svg class="icon icon-eye-light">
                                                <use xlink:href="#icon-eye-light"></use>
                                            </svg>
                                        </span>
                                    </a>
                                    <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm wishlist"
                                        href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Add To Wishlist">
                                        <svg class="icon icon-star-light">
                                            <use xlink:href="#icon-star-light"></use>
                                        </svg>
                                    </a>
                                    <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm compare"
                                        href="./shop/compare.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Compare">
                                        <svg class="icon icon-arrows-left-right-light">
                                            <use xlink:href="#icon-arrows-left-right-light"></use>
                                        </svg>
                                    </a>
                                </div>
                            </figure>
                            <div class="card-body text-center p-0">






                                <span
                                    class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">
                                    <del class=" text-body fw-500 me-4 fs-13px">$40.00</del>
                                    <ins class="text-decoration-none">$30.00</ins></span>

                                <h4
                                    class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                    <a class="text-decoration-none text-reset"
                                        href="./shop/product-details-v1.html">Shield Conditioner</a>
                                </h4>
                                <div class="d-flex align-items-center fs-12px justify-content-center">
                                    <div class="rating">
                                        <div class="empty-stars">
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="filled-stars" style="width: 80%">
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                        </div>
                                    </div><span class="reviews ms-4 pt-3 fs-14px">2947 reviews</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3 col-sm-6">
                        <div class="card card-product grid-1 bg-transparent border-0">
                            <figure class="card-img-top position-relative mb-7 overflow-hidden ">
                                <a href="./shop/product-details-v1.html" class="hover-zoom-in d-block"
                                    title="Shield Shampoo">
                                    <img src="#" data-src="./assets/images/products/product-04-330x440.jpg"
                                        class="img-fluid lazy-image w-100" alt="Shield Shampoo" width="330"
                                        height="440">
                                </a>

                                <div class="position-absolute product-flash z-index-2 "><span
                                        class="badge badge-product-flash on-sale bg-primary">-24%</span></div>
                                <div class="position-absolute d-flex z-index-2 product-actions  horizontal"><a
                                        class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm add_to_cart"
                                        href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Add To Cart">
                                        <svg class="icon icon-shopping-bag-open-light">
                                            <use xlink:href="#icon-shopping-bag-open-light"></use>
                                        </svg>
                                    </a><a
                                        class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm quick-view"
                                        href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Quick View">
                                        <span data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                            class="d-flex align-items-center justify-content-center">
                                            <svg class="icon icon-eye-light">
                                                <use xlink:href="#icon-eye-light"></use>
                                            </svg>
                                        </span>
                                    </a>
                                    <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm wishlist"
                                        href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Add To Wishlist">
                                        <svg class="icon icon-star-light">
                                            <use xlink:href="#icon-star-light"></use>
                                        </svg>
                                    </a>
                                    <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm compare"
                                        href="./shop/compare.html" data-bs-toggle="tooltip"
                                        data-bs-placement="top" data-bs-title="Compare">
                                        <svg class="icon icon-arrows-left-right-light">
                                            <use xlink:href="#icon-arrows-left-right-light"></use>
                                        </svg>
                                    </a>
                                </div>
                            </figure>
                            <div class="card-body text-center p-0">






                                <span
                                    class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">
                                    <del class=" text-body fw-500 me-4 fs-13px">$25.00</del>
                                    <ins class="text-decoration-none">$19.00</ins></span>

                                <h4
                                    class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                    <a class="text-decoration-none text-reset"
                                        href="./shop/product-details-v1.html">Shield Shampoo</a>
                                </h4>
                                <div class="d-flex align-items-center fs-12px justify-content-center">
                                    <div class="rating">
                                        <div class="empty-stars">
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="filled-stars" style="width: 80%">
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                        </div>
                                    </div><span class="reviews ms-4 pt-3 fs-14px">2947 reviews</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3 col-sm-6">
                        <div class="card card-product grid-1 bg-transparent border-0">
                            <figure class="card-img-top position-relative mb-7 overflow-hidden ">
                                <a href="./shop/product-details-v1.html" class="hover-zoom-in d-block"
                                    title="Vital Eye Cream">
                                    <img src="#" data-src="./assets/images/products/product-08-330x440.jpg"
                                        class="img-fluid lazy-image w-100" alt="Vital Eye Cream" width="330"
                                        height="440">
                                </a>

                                <div class="position-absolute product-flash z-index-2 "><span
                                        class="badge badge-product-flash on-sale bg-primary">-26%</span></div>
                                <div class="position-absolute d-flex z-index-2 product-actions  horizontal"><a
                                        class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm add_to_cart"
                                        href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Add To Cart">
                                        <svg class="icon icon-shopping-bag-open-light">
                                            <use xlink:href="#icon-shopping-bag-open-light"></use>
                                        </svg>
                                    </a><a
                                        class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm quick-view"
                                        href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Quick View">
                                        <span data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                            class="d-flex align-items-center justify-content-center">
                                            <svg class="icon icon-eye-light">
                                                <use xlink:href="#icon-eye-light"></use>
                                            </svg>
                                        </span>
                                    </a>
                                    <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm wishlist"
                                        href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Add To Wishlist">
                                        <svg class="icon icon-star-light">
                                            <use xlink:href="#icon-star-light"></use>
                                        </svg>
                                    </a>
                                    <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm compare"
                                        href="./shop/compare.html" data-bs-toggle="tooltip"
                                        data-bs-placement="top" data-bs-title="Compare">
                                        <svg class="icon icon-arrows-left-right-light">
                                            <use xlink:href="#icon-arrows-left-right-light"></use>
                                        </svg>
                                    </a>
                                </div>
                            </figure>
                            <div class="card-body text-center p-0">






                                <span
                                    class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">
                                    <del class=" text-body fw-500 me-4 fs-13px">$39.00</del>
                                    <ins class="text-decoration-none">$29.00</ins></span>

                                <h4
                                    class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                    <a class="text-decoration-none text-reset"
                                        href="./shop/product-details-v1.html">Vital Eye Cream</a>
                                </h4>
                                <div class="d-flex align-items-center fs-12px justify-content-center">
                                    <div class="rating">
                                        <div class="empty-stars">
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="filled-stars" style="width: 80%">
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                        </div>
                                    </div><span class="reviews ms-4 pt-3 fs-14px">2947 reviews</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3 col-sm-6">
                        <div class="card card-product grid-1 bg-transparent border-0">
                            <figure class="card-img-top position-relative mb-7 overflow-hidden ">
                                <a href="./shop/product-details-v1.html" class="hover-zoom-in d-block"
                                    title="Supreme Moisture Mask">
                                    <img src="#" data-src="./assets/images/products/product-09-330x440.jpg"
                                        class="img-fluid lazy-image w-100" alt="Supreme Moisture Mask"
                                        width="330" height="440">
                                </a>

                                <div class="position-absolute product-flash z-index-2 "><span
                                        class="badge badge-product-flash on-sale bg-primary">-26%</span></div>
                                <div class="position-absolute d-flex z-index-2 product-actions  horizontal"><a
                                        class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm add_to_cart"
                                        href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Add To Cart">
                                        <svg class="icon icon-shopping-bag-open-light">
                                            <use xlink:href="#icon-shopping-bag-open-light"></use>
                                        </svg>
                                    </a><a
                                        class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm quick-view"
                                        href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Quick View">
                                        <span data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                            class="d-flex align-items-center justify-content-center">
                                            <svg class="icon icon-eye-light">
                                                <use xlink:href="#icon-eye-light"></use>
                                            </svg>
                                        </span>
                                    </a>
                                    <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm wishlist"
                                        href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Add To Wishlist">
                                        <svg class="icon icon-star-light">
                                            <use xlink:href="#icon-star-light"></use>
                                        </svg>
                                    </a>
                                    <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm compare"
                                        href="./shop/compare.html" data-bs-toggle="tooltip"
                                        data-bs-placement="top" data-bs-title="Compare">
                                        <svg class="icon icon-arrows-left-right-light">
                                            <use xlink:href="#icon-arrows-left-right-light"></use>
                                        </svg>
                                    </a>
                                </div>
                            </figure>
                            <div class="card-body text-center p-0">






                                <span
                                    class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">
                                    <del class=" text-body fw-500 me-4 fs-13px">$39.00</del>
                                    <ins class="text-decoration-none">$29.00</ins></span>

                                <h4
                                    class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                    <a class="text-decoration-none text-reset"
                                        href="./shop/product-details-v1.html">Supreme Moisture Mask</a>
                                </h4>
                                <div class="d-flex align-items-center fs-12px justify-content-center">
                                    <div class="rating">
                                        <div class="empty-stars">
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="filled-stars" style="width: 80%">
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                        </div>
                                    </div><span class="reviews ms-4 pt-3 fs-14px">2947 reviews</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3 col-sm-6">
                        <div class="card card-product grid-1 bg-transparent border-0">
                            <figure class="card-img-top position-relative mb-7 overflow-hidden ">
                                <a href="./shop/product-details-v1.html" class="hover-zoom-in d-block"
                                    title="Natural Coconut Cleansing Oil">
                                    <img src="#" data-src="./assets/images/products/product-12-330x440.jpg"
                                        class="img-fluid lazy-image w-100" alt="Natural Coconut Cleansing Oil"
                                        width="330" height="440">
                                </a>

                                <div class="position-absolute product-flash z-index-2 "><span
                                        class="badge badge-product-flash on-sale bg-primary">-26%</span></div>
                                <div class="position-absolute d-flex z-index-2 product-actions  horizontal"><a
                                        class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm add_to_cart"
                                        href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Add To Cart">
                                        <svg class="icon icon-shopping-bag-open-light">
                                            <use xlink:href="#icon-shopping-bag-open-light"></use>
                                        </svg>
                                    </a><a
                                        class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm quick-view"
                                        href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Quick View">
                                        <span data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                            class="d-flex align-items-center justify-content-center">
                                            <svg class="icon icon-eye-light">
                                                <use xlink:href="#icon-eye-light"></use>
                                            </svg>
                                        </span>
                                    </a>
                                    <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm wishlist"
                                        href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Add To Wishlist">
                                        <svg class="icon icon-star-light">
                                            <use xlink:href="#icon-star-light"></use>
                                        </svg>
                                    </a>
                                    <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm compare"
                                        href="./shop/compare.html" data-bs-toggle="tooltip"
                                        data-bs-placement="top" data-bs-title="Compare">
                                        <svg class="icon icon-arrows-left-right-light">
                                            <use xlink:href="#icon-arrows-left-right-light"></use>
                                        </svg>
                                    </a>
                                </div>
                            </figure>
                            <div class="card-body text-center p-0">






                                <span
                                    class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">
                                    <del class=" text-body fw-500 me-4 fs-13px">$39.00</del>
                                    <ins class="text-decoration-none">$29.00</ins></span>

                                <h4
                                    class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                    <a class="text-decoration-none text-reset"
                                        href="./shop/product-details-v1.html">Natural Coconut Cleansing
                                        Oil</a>
                                </h4>
                                <div class="d-flex align-items-center fs-12px justify-content-center">
                                    <div class="rating">
                                        <div class="empty-stars">
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star-o">
                                                    <use xlink:href="#star-o"></use>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="filled-stars" style="width: 80%">
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                            <span class="star">
                                                <svg class="icon star text-primary">
                                                    <use xlink:href="#star"></use>
                                                </svg>
                                            </span>
                                        </div>
                                    </div><span class="reviews ms-4 pt-3 fs-14px">2947 reviews</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <div class="text-center mt-11 pt-3">
            <a href="#" class="btn btn-outline-dark">Shop All Products</a>
        </div>
    </div>

    {{-- @foreach ($product_best_sellers as $key => $item)
        <div class="modal fade" id="quickViewModal{{ $key }}"
            aria-labelledby="quickViewModal{{ $key }}" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0 py-5">
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body pt-0">
                        <div class="row ">
                            <div class="col-md-6 pe-13">
                                <div class="position-relative">
                                    <div class="position-absolute z-index-2 w-100 d-flex justify-content-end">
                                        <div class="p-6">
                                            <a href="#"
                                                class="d-flex align-items-center justify-content-center product-gallery-action rounded-circle"
                                                data-bs-toggle="tooltip" data-bs-placement="left"
                                                data-bs-title="Add to wishlist">
                                                <svg class="icon fs-4">
                                                    <use xlink:href="#icon-star-light"></use>
                                                </svg>
                                            </a>
                                            <a href="./shop/compare.html"
                                                class="d-flex align-items-center justify-content-center mt-5 product-gallery-action rounded-circle"
                                                data-bs-toggle="tooltip" data-bs-placement="left"
                                                data-bs-title="Compare">
                                                <svg class="icon fs-4">
                                                    <use xlink:href="#icon-arrows-left-right-light"></use>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="slider"
                                        class="slick-slider slick-slider-arrow-inside slick-slider-dots-inside slick-slider-dots-light g-0"
                                        data-slick-options='{&#34;arrows&#34;:false,&#34;asNavFor&#34;:&#34;#slider-thumb&#34;,&#34;dots&#34;:false,&#34;slidesToShow&#34;:1}'>
                                        <a href="{{ asset($item->image) }}" data-gallery="gallery1"
                                            data-thumb-src="{{ asset($item->image) }}"><img src="{{ asset($item->image) }}"
                                                data-src="{{ asset($item->image) }}" class="h-auto lazy-image"
                                                width="540" height="720" alt=""></a>
                                        @php
                                            $album = json_decode($item->album, true) ?? [];
                                        @endphp
                                        @foreach ($album as $item_album)
                                            <a href="{{ asset($item_album) }}"
                                                data-gallery="gallery1"
                                                data-thumb-src="{{ asset($item_album) }}"><img
                                                    src="{{ asset($item->image) }}"
                                                    data-src="{{ asset($item_album) }}"
                                                    class="h-auto lazy-image" width="540" height="720"
                                                    alt=""></a>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="mt-6">
                                    <div id="slider-thumb" class="slick-slider slick-slider-thumb ps-1 ms-n3 me-n4"
                                        data-slick-options='{&#34;arrows&#34;:false,&#34;asNavFor&#34;:&#34;#slider&#34;,&#34;dots&#34;:false,&#34;focusOnSelect&#34;:true,&#34;slidesToShow&#34;:5,&#34;vertical&#34;:false}'>
                                        <img src="{{ asset($item->image) }}"
                                            data-src="{{ asset($item->image) }}"
                                            class="mx-3 px-0 h-auto cursor-pointer lazy-image" width="75"
                                            height="100" alt="">
                                            @foreach ($album as $item_album)
                                            <img src="{{ asset($item_album) }}"
                                            data-src="{{ asset($item_album) }}"
                                            class="mx-3 px-0 h-auto cursor-pointer lazy-image" width="75"
                                            height="100" alt="">
                                            @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 pt-md-0 pt-10">
                                <p class="d-flex align-items-center mb-6">
                                    <span class="text-decoration-line-through">{{ $item->price }}</span>
                                    <span
                                        class="fs-18px text-body-emphasis ps-6 fw-bold">{{ $item->sale_price }}</span>
                                    <span class="badge text-bg-primary fs-6 fw-semibold ms-7 px-6 py-3">-
                                        {{ $item->discount_percent }}%</span>
                                </p>
                                <h1 class="mb-4 pb-2 fs-4">
                                    <a href="./shop/product-details-v1.html" title="Natural Coconut Cleansing Oil">
                                        {{ $item->name }}
                                    </a>
                                </h1>
                                <div class="d-flex align-items-center fs-15px mb-6">
                                    <p class="mb-0 fw-semibold text-body-emphasis">4.86</p>
                                    <div
                                        class="d-flex align-items-center fs-12px justify-content-center mb-0 px-6 rating-result">
                                        <div class="rating">
                                            <div class="empty-stars">
                                                <span class="star">
                                                    <svg class="icon star-o">
                                                        <use xlink:href="#star-o"></use>
                                                    </svg>
                                                </span>
                                                <span class="star">
                                                    <svg class="icon star-o">
                                                        <use xlink:href="#star-o"></use>
                                                    </svg>
                                                </span>
                                                <span class="star">
                                                    <svg class="icon star-o">
                                                        <use xlink:href="#star-o"></use>
                                                    </svg>
                                                </span>
                                                <span class="star">
                                                    <svg class="icon star-o">
                                                        <use xlink:href="#star-o"></use>
                                                    </svg>
                                                </span>
                                                <span class="star">
                                                    <svg class="icon star-o">
                                                        <use xlink:href="#star-o"></use>
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="filled-stars" style="width: 100%">
                                                <span class="star">
                                                    <svg class="icon star text-primary">
                                                        <use xlink:href="#star"></use>
                                                    </svg>
                                                </span>
                                                <span class="star">
                                                    <svg class="icon star text-primary">
                                                        <use xlink:href="#star"></use>
                                                    </svg>
                                                </span>
                                                <span class="star">
                                                    <svg class="icon star text-primary">
                                                        <use xlink:href="#star"></use>
                                                    </svg>
                                                </span>
                                                <span class="star">
                                                    <svg class="icon star text-primary">
                                                        <use xlink:href="#star"></use>
                                                    </svg>
                                                </span>
                                                <span class="star">
                                                    <svg class="icon star text-primary">
                                                        <use xlink:href="#star"></use>
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#" class="border-start ps-6 text-body">Read 2947 reviews</a>
                                </div>
                                <p class="fs-15px">{{ $item->discount_percent }}</p>


                                <p class="mb-4 pb-2">
                                    <span class="text-body-emphasis">
                                        <svg class="icon fs-5 me-4 pe-2 align-text-bottom">
                                            <use xlink:href="#icon-eye-light"></use>
                                        </svg>
                                        17 people
                                    </span>
                                    are viewing this right now
                                </p>
                                <p class="mb-4 pb-2 text-body-emphasis">
                                    <svg class="icon fs-5 me-4 pe-2 align-text-bottom">
                                        <use xlink:href="#icon-Timer"></use>
                                    </svg>
                                    Only 9 left in stock
                                </p>
                                <div class="progress mb-7" style="height: 4px;">
                                    <div class="progress-bar w-25" role="progressbar" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <form class="mb-9 pb-2">
                                    <div class="row align-items-end">
                                        <div class="form-group col-sm-4">
                                            <label class=" text-body-emphasis fw-semibold fs-15px pb-6"
                                                for="QuickViewNumber{{ $key }}">Quantity: </label>
                                            <div class="input-group position-relative w-100 input-group-lg">
                                                <a href="#"
                                                    class="shop-down position-absolute translate-middle-y top-50 start-0 ps-7 product-info-2-minus"><i
                                                        class="far fa-minus"></i></a>
                                                <input name="number" type="number" id="QuickViewNumber{{ $key }}"
                                                    class="product-info-2-quantity form-control w-100 px-6 text-center"
                                                    value="1" required="">
                                                <a href="#"
                                                    class="shop-up position-absolute translate-middle-y top-50 end-0 pe-7 product-info-2-plus"><i
                                                        class="far fa-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-8 pt-9 mt-2 mt-sm-0 pt-sm-0">
                                            <button type="submit"
                                                class="btn-hover-bg-primary btn-hover-border-primary btn btn-lg btn-dark w-100">Add
                                                To Bag
                                            </button>
                                        </div>
                                    </div>

                                </form>
                                <p class="mb-4 pb-2">
                                    <span class="text-body-emphasis">
                                        <svg class="icon fs-28px me-2 pe-4">
                                            <use xlink:href="#icon-delivery-1"></use>
                                        </svg>Get it between:
                                    </span> Feb 3 - Feb 14,2021
                                </p>
                                <p class="mb-4 pb-2">
                                    <span class="text-body-emphasis">
                                        <svg class="icon fs-28px me-2 pe-4">
                                            <use xlink:href="#icon-Package"></use>
                                        </svg>Free Shipping & Returns:
                                    </span> On all orders over $200
                                </p>
                                <div class="card border-0 bg-body-tertiary rounded text-center mt-7">
                                    <div class="pt-8 px-5">
                                        <img class="img-fluid" src="./assets/images/shop/product-info-2.png"
                                            alt="pay" width="357" height="28">
                                    </div>
                                    <div class="card-body pt-6 pb-7">
                                        <p class="fs-14px fw-normal mb-0">Guarantee safe &amp; secure checkout</p>
                                    </div>
                                </div>
                                <ul class="single-product-meta list-unstyled border-top pt-7 mt-7">
                                    <li class="d-flex mb-4 pb-2 align-items-center">
                                        <span class="text-body-emphasis fw-semibold fs-14px">Sku:</span>
                                        <span class="ps-4">SF09281</span>
                                    </li>
                                    <li class="d-flex mb-4 pb-2 align-items-center">
                                        <span class="text-body-emphasis fw-semibold fs-14px">Categories:</span>
                                        <span class="ps-4">Makeup, Skincare</span>
                                    </li>
                                </ul>

                                <ul class="list-inline d-flex justify-content-start mb-0 fs-6">
                                    <li class="list-inline-item">
                                        <a class="text-body text-decoration-none product-info-share product-info-share"
                                            href="#"><i class="fab fa-facebook-f me-4"></i> Facebook</a>
                                    </li>
                                    <li class="list-inline-item ms-7">
                                        <a class="text-body text-decoration-none product-info-share product-info-share"
                                            href="#"><i class="fab fa-instagram me-4"></i> Instagram</a>
                                    </li>
                                    <li class="list-inline-item ms-7">
                                        <a class="text-body text-decoration-none product-info-share product-info-share"
                                            href="#"><i class="fab fa-youtube me-4"></i> Youtube</a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach --}}
</section>
