<header id="header" class="header header-sticky header-sticky-smart disable-transition-all z-index-5">
    <div class="topbar">
        <div class="bg-primary overflow-hidden">
            <div class="pt-4 pb-3 text-white move-text-animate fw-semibold text-nowrap">
                <span class="text-uppercase me-16">Free shipping on all u.s</span>
                <span class="text-uppercase me-16">We also make emails.</span>
                <span class="text-uppercase me-16">The complete extra sale 20% off look</span>
                <span class="text-uppercase me-16">Free shipping on all u.s</span>
                <span class="text-uppercase me-16">We also make emails.</span>
                <span class="text-uppercase me-16">The complete extra sale 20% off look</span>
                <span class="text-uppercase me-16">Free shipping on all u.s</span>
                <span class="text-uppercase me-16">We also make emails.</span>
                <span class="text-uppercase me-16">The complete extra sale 20% off look</span>
            </div>
        </div>
        <div class="border-bottom d-none d-lg-block">
            <div class="container-wide container py-2">
                <div class="row py-4">
                    <div class="w-70 d-flex align-items-center">
                        <span class="font-weight-normal pe-8">
                            <img src="./assets/images/others/flag-02.jpg" alt="flag-02" class="me-4">
                            Ship to: <strong class="font-weight-500 text-secondary ps-3">USA</strong>
                        </span>
                        <span class="d-flex align-items-center pe-8"><svg class="icon me-4">
                                <use xlink:href="#mobile"></use>
                            </svg> Call: +32 9006868</span>
                        <span class="d-flex align-items-center"><svg class="icon me-4">
                                <use xlink:href="#envelope"></use>
                            </svg>hi@gracecosmetic.com</span>
                    </div>
                    <div class="icons-actions d-flex justify-content-end w-30 fs-28px text-body-emphasis">
                        <div class="px-6 d-inline-block">
                            @if (Auth::check() && Auth::user()->role == 2)
                                {{ Auth::user()->name }}
                            @else
                            <a class="lh-1 color-inherit text-decoration-none" href="{{ route('view_login') }}">
                                <svg class="icon icon-user-light">
                                    <use xlink:href="#icon-user-light"></use>
                                </svg>
                            </a>
                            @endif
                        </div>
                        
                        <div class="px-6 me-n4 d-inline-block">
                            <a class="position-relative lh-1 color-inherit text-decoration-none" href="#"
                                data-bs-toggle="offcanvas" data-bs-target="#shoppingCart" aria-controls="shoppingCart"
                                aria-expanded="false">
                                <svg class="icon icon-star-light">
                                    <use xlink:href="#icon-shopping-bag-open-light"></use>
                                </svg>
                                <span
                                    class="badge bg-dark text-white position-absolute top-0 start-100 translate-middle mt-4 rounded-circle fs-13px p-0 square"
                                    style="--square-size: 18px">3</span>
                            </a>
                        </div>

                        <div class="color-modes position-relative ps-5">
                            <a class="bd-theme btn btn-link nav-link dropdown-toggle d-inline-flex align-items-center justify-content-center text-primary p-0 position-relative rounded-circle"
                                href="#" aria-expanded="true" data-bs-toggle="dropdown" data-bs-display="static"
                                aria-label="Toggle theme (light)">
                                <svg class="bi my-1 theme-icon-active">
                                    <use href="#sun-fill"></use>
                                </svg>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end fs-14px" data-bs-popper="static">
                                <li>
                                    <button type="button" class="dropdown-item d-flex align-items-center active"
                                        data-bs-theme-value="light" aria-pressed="true">
                                        <svg class="bi me-4 opacity-50 theme-icon">
                                            <use href="#sun-fill"></use>
                                        </svg>
                                        Light
                                        <svg class="bi ms-auto d-none">
                                            <use href="#check2"></use>
                                        </svg>
                                    </button>
                                </li>
                                <li>
                                    <button type="button" class="dropdown-item d-flex align-items-center"
                                        data-bs-theme-value="dark" aria-pressed="false">
                                        <svg class="bi me-4 opacity-50 theme-icon">
                                            <use href="#moon-stars-fill"></use>
                                        </svg>
                                        Dark
                                        <svg class="bi ms-auto d-none">
                                            <use href="#check2"></use>
                                        </svg>
                                    </button>
                                </li>
                                <li>
                                    <button type="button" class="dropdown-item d-flex align-items-center"
                                        data-bs-theme-value="auto" aria-pressed="false">
                                        <svg class="bi me-4 opacity-50 theme-icon">
                                            <use href="#circle-half"></use>
                                        </svg>
                                        Auto
                                        <svg class="bi ms-auto d-none">
                                            <use href="#check2"></use>
                                        </svg>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-area">
        <div class="main-header nav navbar bg-body navbar-light navbar-expand-xl py-6 py-xl-0">
            <div class="container-wide container flex-nowrap">
                <div class="w-72px d-flex d-xl-none">
                    <button class="navbar-toggler align-self-center  border-0 shadow-none px-0 canvas-toggle p-4"
                        type="button" data-bs-toggle="offcanvas" data-bs-target="#offCanvasNavBar"
                        aria-controls="offCanvasNavBar" aria-expanded="false" aria-label="Toggle Navigation">
                        <span class="fs-24 toggle-icon"></span>
                    </button>
                </div>
                <div class="d-none d-xl-flex w-xl-50">
                    <ul class="navbar-nav">
                        <li
                            class="nav-item transition-all-xl-1 py-xl-11 py-0 me-xxl-12 me-xl-10 dropdown dropdown-hover dropdown-fullwidth position-static">
                            <a class="nav-link d-flex justify-content-between position-relative py-xl-0 px-xl-0 text-uppercase fw-semibold ls-1 fs-15px fs-xl-14px dropdown-toggle"
                                href="./store.html" data-bs-toggle="dropdown" id="menu-item-shop"
                                aria-haspopup="true" aria-expanded="false">Sản Phẩm</a>
                            <div class="dropdown-menu mega-menu start-0 py-6  w-100" aria-labelledby="menu-item-shop">
                                <div class="megamenu-shop container-wide py-8 px-12">
                                    <div class="row">
                                        <div class="col">
                                            <h6 class="fs-18px">Shop Pages</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li>
                                                    <a href="./shop/shop-layout-v1.html"
                                                        class="border-hover text-decoration-none py-3 d-block"><span
                                                            class="border-hover-target">Shop Layout
                                                            <sup>v1</sup></span></a>
                                                </li>
                                                <li>
                                                    <a href="./shop/shop-layout-v2.html"
                                                        class="border-hover text-decoration-none py-3 d-block"><span
                                                            class="border-hover-target">Shop Layout
                                                            <sup>v2</sup></span></a>
                                                </li>
                                                <li>
                                                    <a href="./shop/shop-layout-v3.html"
                                                        class="border-hover text-decoration-none py-3 d-block"><span
                                                            class="border-hover-target">Shop Layout
                                                            <sup>v3</sup></span></a>
                                                </li>
                                                <li>
                                                    <a href="./shop/shop-layout-v4.html"
                                                        class="border-hover text-decoration-none py-3 d-block"><span
                                                            class="border-hover-target">Shop Layout
                                                            <sup>v4</sup></span></a>
                                                </li>
                                                <li>
                                                    <a href="./shop/shop-layout-v5.html"
                                                        class="border-hover text-decoration-none py-3 d-block"><span
                                                            class="border-hover-target">Shop Layout
                                                            <sup>v5</sup></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col">
                                            <h6 class="fs-18px">Product Pages</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li>
                                                    <a href="./shop/product-details-v1.html"
                                                        class="border-hover text-decoration-none py-3 d-block"><span
                                                            class="border-hover-target">Product Detail
                                                            <sup>v1</sup></span></a>
                                                </li>
                                                <li>
                                                    <a href="./shop/product-details-v2.html"
                                                        class="border-hover text-decoration-none py-3 d-block"><span
                                                            class="border-hover-target">Product Detail
                                                            <sup>v2</sup></span></a>
                                                </li>
                                                <li>
                                                    <a href="./shop/product-details-v3.html"
                                                        class="border-hover text-decoration-none py-3 d-block"><span
                                                            class="border-hover-target">Product Detail
                                                            <sup>v3</sup></span></a>
                                                </li>
                                                <li>
                                                    <a href="./shop/product-details-v4.html"
                                                        class="border-hover text-decoration-none py-3 d-block"><span
                                                            class="border-hover-target">Product Detail
                                                            <sup>v4</sup></span></a>
                                                </li>
                                                <li>
                                                    <a href="./shop/product-details-v5.html"
                                                        class="border-hover text-decoration-none py-3 d-block"><span
                                                            class="border-hover-target">Product Detail
                                                            <sup>v5</sup></span></a>
                                                </li>
                                                <li>
                                                    <a href="./shop/product-details-v6.html"
                                                        class="border-hover text-decoration-none py-3 d-block"><span
                                                            class="border-hover-target">Product Detail
                                                            <sup>v6</sup></span></a>
                                                </li>
                                                <li>
                                                    <a href="./shop/product-details-v7.html"
                                                        class="border-hover text-decoration-none py-3 d-block"><span
                                                            class="border-hover-target">Product Detail
                                                            <sup>v7</sup></span></a>
                                                </li>
                                                <li>
                                                    <a href="./shop/product-details-v8.html"
                                                        class="border-hover text-decoration-none py-3 d-block"><span
                                                            class="border-hover-target">Product Detail
                                                            <sup>v8</sup></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col">
                                            <h6 class="fs-18px">Product Types</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li>
                                                    <a href="./shop/product-simple.html"
                                                        class="border-hover text-decoration-none py-3 d-block"><span
                                                            class="border-hover-target">Product Simple</span></a>
                                                </li>
                                                <li>
                                                    <a href="./shop/product-variable.html"
                                                        class="border-hover text-decoration-none py-3 d-block"><span
                                                            class="border-hover-target">Product Variable</span></a>
                                                </li>
                                                <li>
                                                    <a href="./shop/product-time-limit.html"
                                                        class="border-hover text-decoration-none py-3 d-block"><span
                                                            class="border-hover-target">Product Time
                                                            Limit</span></a>
                                                </li>
                                                <li>
                                                    <a href="./shop/product-grouped.html"
                                                        class="border-hover text-decoration-none py-3 d-block"><span
                                                            class="border-hover-target">Product Grouped</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col">
                                            <h6 class="fs-18px">Other Pages</h6>
                                            <ul class="list-unstyled mb-0">
                                                <li>
                                                    <a href="./shop/shopping-cart.html"
                                                        class="border-hover text-decoration-none py-3 d-block"><span
                                                            class="border-hover-target">Shopping Cart</span></a>
                                                </li>
                                                <li>
                                                    <a href="./shop/compare.html"
                                                        class="border-hover text-decoration-none py-3 d-block"><span
                                                            class="border-hover-target">Compare</span></a>
                                                </li>
                                                <li>
                                                    <a href="./shop/wishlist.html"
                                                        class="border-hover text-decoration-none py-3 d-block"><span
                                                            class="border-hover-target">Wishlist</span></a>
                                                </li>
                                                <li>
                                                    <a href="./shop/checkout.html"
                                                        class="border-hover text-decoration-none py-3 d-block"><span
                                                            class="border-hover-target">Checkout</span></a>
                                                </li>
                                                <li>
                                                    <a href="./user-registration.html"
                                                        class="border-hover text-decoration-none py-3 d-block"><span
                                                            class="border-hover-target">Register</span></a>
                                                </li>
                                                <li>
                                                    <a href="./user-login.html"
                                                        class="border-hover text-decoration-none py-3 d-block"><span
                                                            class="border-hover-target">Login</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col d-xxl-block d-none megamenu-shop-banner"
                                            data-bs-theme="light">
                                            <div class="card border-0 mt-4">
                                                <img src="./assets/images/background/bg-mega-menu-shop.jpg"
                                                    alt="bg mega menu" class="card-img">
                                                <div class="card-img-overlay d-flex flex-column mx-2 px-9 py-6">
                                                    <p
                                                        class="text-body-emphasis ls-1 fw-semibold mb-4 mt-6 text-uppercase">
                                                        new collection
                                                    </p>
                                                    <h3 class="fs-3">
                                                        Special <br>
                                                        Offer
                                                    </h3>
                                                    <div class="mt-auto">
                                                        <a href="#" class="btn btn-white">Shop Sale</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </li>
                        <li
                            class="nav-item transition-all-xl-1 py-xl-11 py-0 me-xxl-12 me-xl-10 dropdown dropdown-hover">
                            <a class="nav-link d-flex justify-content-between position-relative py-xl-0 px-xl-0 text-uppercase fw-semibold ls-1 fs-15px fs-xl-14px dropdown-toggle"
                                href="{{ route('about') }}"
                                aria-expanded="false">Về chúng tôi</a>
                           
                        </li>
                       
                        
                    </ul>
                </div>

                <a href="./" class="navbar-brand px-8 py-4 mx-auto">
                    <img class="light-mode-img" src="./assets/images/others/logo.png" width="179" height="26"
                        alt="Glowing - Bootstrap 5 HTML Templates">
                    <img class="dark-mode-img" src="./assets/images/others/logo-white.png" width="179"
                        height="26" alt="Glowing - Bootstrap 5 HTML Templates"></a>

                <div class="w-xl-50 d-flex align-items-center fs-28px">
                    <div class="d-none d-xl-block w-60 ms-auto">
                        <form action="#" method="get" class="search-box-1 form-border-transparent">
                            <div class="position-relative">
                                <input type="text" name="s" class="form-control bg-body-secondary ps-12"
                                    placeholder="What are you looking for?">
                                <button
                                    class="position-absolute bg-transparent border-0 px-0 fs-4 ps-6 top-0 bottom-0 my-auto z-index-3 text-body-emphasis"
                                    type="submit">
                                    <svg class="icon fs-18px mt-n3">
                                        <use xlink:href="#search"></use>
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="fs-28px text-body-emphasis d-block d-xl-none">
                        <a class="lh-1 color-inherit text-decoration-none" href="#" data-bs-toggle="offcanvas"
                            data-bs-target="#searchModal" aria-controls="searchModal" aria-expanded="false">
                            <svg class="icon icon-magnifying-glass-light">
                                <use xlink:href="#icon-magnifying-glass-light"></use>
                            </svg>
                        </a>
                    </div>

                    <div class="color-modes position-relative ps-5 d-block d-xl-none">
                        <a class="bd-theme btn btn-link nav-link dropdown-toggle d-inline-flex align-items-center justify-content-center text-primary p-0 position-relative rounded-circle"
                            href="#" aria-expanded="true" data-bs-toggle="dropdown" data-bs-display="static"
                            aria-label="Toggle theme (light)">
                            <svg class="bi my-1 theme-icon-active">
                                <use href="#sun-fill"></use>
                            </svg>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end fs-14px" data-bs-popper="static">
                            <li>
                                <button type="button" class="dropdown-item d-flex align-items-center active"
                                    data-bs-theme-value="light" aria-pressed="true">
                                    <svg class="bi me-4 opacity-50 theme-icon">
                                        <use href="#sun-fill"></use>
                                    </svg>
                                    Light
                                    <svg class="bi ms-auto d-none">
                                        <use href="#check2"></use>
                                    </svg>
                                </button>
                            </li>
                            <li>
                                <button type="button" class="dropdown-item d-flex align-items-center"
                                    data-bs-theme-value="dark" aria-pressed="false">
                                    <svg class="bi me-4 opacity-50 theme-icon">
                                        <use href="#moon-stars-fill"></use>
                                    </svg>
                                    Dark
                                    <svg class="bi ms-auto d-none">
                                        <use href="#check2"></use>
                                    </svg>
                                </button>
                            </li>
                            <li>
                                <button type="button" class="dropdown-item d-flex align-items-center"
                                    data-bs-theme-value="auto" aria-pressed="false">
                                    <svg class="bi me-4 opacity-50 theme-icon">
                                        <use href="#circle-half"></use>
                                    </svg>
                                    Auto
                                    <svg class="bi ms-auto d-none">
                                        <use href="#check2"></use>
                                    </svg>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
