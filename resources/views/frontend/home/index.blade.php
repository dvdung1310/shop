@extends('welcome')

@section('content-home')
<section>
    <div class="row align-items-center hero hero-header-03 mx-0 bg-section-2">
        <div class="col-lg-6 order-1 order-lg-0 text-center py-lg-0 py-16 px-sm-0 px-6">
            <div data-animate="fadeInUp" class="fs-4 fw-semibold text-primary mb-8">The Perfect Skincare</div>
            <h2 data-animate="fadeInUp" class="mx-auto hero-540 fs-1 mb-4 px-4">Care for Your Skin, Care for
                Your Beauty</h2>
            <p data-animate="fadeInUp" class="mx-auto hero-desc fs-18px text-body-calculate">Made using clean,
                non-toxic ingredients, our products are designed for everyone.</p>
            <a data-animate="fadeInUp" href="shop-page-04.html"
                class="btn btn-lg btn-dark mt-6 btn-hover-bg-primary btn-hover-border-primary">Shop Now</a>
        </div>
        <div class="col-lg-6 order-0 order-lg-1 px-0">
            <div class="d-block hover-zoom-in hover-shine">
                <img src="#" data-src="./assets/images/hero-slider/hero-slider-07.jpg"
                    class="lazy-image img-fluid w-100 vh-100 object-fit-cover" alt="slider" width="952"
                    height="770">
            </div>
        </div>
    </div>

</section>

@include('frontend.home.cate_product')

<section class="pt-lg-16 pt-14">

    <div class="container container-xxl">
        <div class="row gy-30px gx-30px">
            <div class="col-12 col-md-4">
                <div class="card border-0 rounded-0 hover-zoom-in hover-shine">

                    <img class="lazy-image card-img object-fit-cover lazy-image light-mode-img" src="#"
                        data-src="./assets/images/banner/banner-05.jpg" width="450" height="600"
                        alt="Autumn Skincare">
                    <img class="lazy-image dark-mode-img card-img object-fit-cover lazy-image" src="#"
                        data-src="./assets/images/banner/banner-white-05.jpg" width="450" height="600"
                        alt="Autumn Skincare">
                    <div
                        class="card-img-overlay d-inline-flex flex-column p-8 justify-content-end text-center">
                        <h3 class="card-title text-white lh-45px">Autumn Skincare</h3>
                        <div><a href="#"
                                class="btn btn-link p-0 fw-semibold text-white text-decoration-none">Disvover
                                Now <svg class="icon">
                                    <use xlink:href="#icon-arrow-right"></use>
                                </svg></a></div>
                    </div>
                </div>

            </div>
            <div class="col-12 col-md-4">
                <div class="card border-0 rounded-0 hover-zoom-in hover-shine">

                    <img class="lazy-image card-img object-fit-cover lazy-image" src="#"
                        data-src="./assets/images/banner/banner-03.jpg" width="450" height="600"
                        alt="Anti-aging Cream">
                    <div
                        class="card-img-overlay d-inline-flex flex-column p-8 justify-content-end text-center">
                        <h3 class="card-title text-white lh-45px">Anti-aging Cream</h3>
                        <div><a href="#"
                                class="btn btn-link p-0 fw-semibold text-white text-decoration-none">Buy 1 get
                                1 <svg class="icon">
                                    <use xlink:href="#icon-arrow-right"></use>
                                </svg></a></div>
                    </div>
                </div>

            </div>
            <div class="col-12 col-md-4">
                <div class="card border-0 rounded-0 hover-zoom-in hover-shine">

                    <img class="lazy-image card-img object-fit-cover lazy-image light-mode-img" src="#"
                        data-src="./assets/images/banner/banner-04.jpg" width="450" height="600"
                        alt="Sale Up To 40% Off">
                    <img class="lazy-image dark-mode-img card-img object-fit-cover lazy-image" src="#"
                        data-src="./assets/images/banner/banner-white-04.jpg" width="450" height="600"
                        alt="Sale Up To 40% Off">
                    <div
                        class="card-img-overlay d-inline-flex flex-column p-8 justify-content-end text-center">
                        <h3 class="card-title text-white lh-45px">Sale Up To 40% Off</h3>
                        <div><a href="#"
                                class="btn btn-link p-0 fw-semibold text-white text-decoration-none">Shop Sale
                                <svg class="icon">
                                    <use xlink:href="#icon-arrow-right"></use>
                                </svg></a></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@include('frontend.home.product')
<section id="specia_offer_save_on_sets_1">

    <div class="container container-xxl">
        <div class="row g-0 align-items-center">
            <div class="col-lg-6 mb-12 mb-lg-0">
                <img data-src="./assets/images/banner/banner-55.jpg" alt="banner"
                    class="img-fluid lazy-image w-100" width="705" height="620" src="#">
            </div>
            <div class="col-xl-5 col-lg-6 offset-xl-1 ps-lg-10 pe-xl-18">
                <p class="text-uppercase text-body-emphasis fw-semibold ls-1 d-flex align-items-center pb-2">
                    Special offer <span
                        class="badge bg-primary fs-15px py-3 px-5 ms-5 ls-0 fw-bold lh-12">-20%</span></p>
                <h2 class="mb-5">Save on Sets</h2>
                <p class="fs-18px mb-5">Made using clean, non-toxic ingredients, our products are designed for
                    everyone.</p>
                <div class="d-flex countdown ms-n4 ms-md-n7" data-countdown="true"
                    data-countdown-end="Jan 22, 2024 00:00:00">
                    <div class="countdown-item text-center px-md-7 px-4 fs-1">
                        <span class="day fw-semibold text-primary font-primary"></span>
                    </div>

                    <div class="separate fw-semibold fs-1 text-primary">:</div>

                    <div class="countdown-item text-center px-md-7 px-4 fs-1">
                        <span class="hour fw-semibold text-primary font-primary"></span>
                    </div>

                    <div class="separate fw-semibold fs-1 text-primary">:</div>

                    <div class="countdown-item text-center px-md-7 px-4 fs-1">
                        <span class="minute fw-semibold text-primary font-primary"></span>
                    </div>

                    <div class="separate fw-semibold fs-1 text-primary">:</div>

                    <div class="countdown-item text-center px-md-7 px-4 fs-1">
                        <span class="second fw-semibold text-primary font-primary"></span>
                    </div>
                </div>

                <a href="#"
                    class="btn btn-dark btn-hover-bg-primary btn-hover-border-primary mt-9">Get Only
                    $39,00</a>
            </div>
        </div>
    </div>
</section>

<section id="with_client_logo_1">

    <div class="container pt-14 pb-16 py-lg-20">
        <div class="row mt-5 mb-15">
            <div class="col-lg-9 offset-lg-1 col-xl-8 offset-xl-2">
                <div class="slick-slider main"
                    data-slick-options='{"slidesToShow": 1,"dots":false,"arrows":false, "asNavFor": "#with_client_logo_1 .thumb"}'>

                    <div class="text-center" data-animate="fadeInUp">
                        <h4 class="mb-0">"Millions of combinations, meaning you get a totally unique piece
                            of furniture exactly the way you want it."</h4>
                    </div>
                    <div class="text-center" data-animate="fadeInUp">
                        <h4 class="mb-0">"Great tags, Millie has got used to it, nothing like the old tin
                            tags of years gone by. Light weight and great colours available."</h4>
                    </div>
                    <div class="text-center" data-animate="fadeInUp">
                        <h4 class="mb-0">"Amazing product. The results are so transformative in texture and
                            my face feels plump and healthy. Highly recommend!"</h4>
                    </div>
                    <div class="text-center" data-animate="fadeInUp">
                        <h4 class="mb-0">"Millions of combinations, meaning you get a totally unique piece
                            of furniture exactly the way you want it."</h4>
                    </div>
                    <div class="text-center" data-animate="fadeInUp">
                        <h4 class="mb-0">"Great tags, Millie has got used to it, nothing like the old tin
                            tags of years gone by. Light weight and great colours available."</h4>
                    </div>
                    <div class="text-center" data-animate="fadeInUp">
                        <h4 class="mb-0">"Millions of combinations, meaning you get a totally unique piece
                            of furniture exactly the way you want it."</h4>
                    </div>
                    <div class="text-center" data-animate="fadeInUp">
                        <h4 class="mb-0">"Millions of combinations, meaning you get a totally unique piece
                            of furniture exactly the way you want it."</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="slick-slider thumb"
            data-slick-options='{"slidesToShow": 6,"focusOnSelect": true,"arrows": false, "dots": false, "asNavFor": "#with_client_logo_1 .main", "responsive":[{"breakpoint":992,"settings":{"dots":true,"slidesToShow":4}},{"breakpoint":768,"settings":{"dots":true,"slidesToShow":3}},{"breakpoint":576,"settings":{"dots":true,"slidesToShow":2}}] }'>

            <div class="client-logo-item" data-animate="fadeInUp">


                <img class="lazy-image w-auto mx-auto opacity-30 light-mode-img" src="#"
                    data-src="./assets/images/client-logo/client-logo-01.png" width="150"
                    height="82" alt="goodness">
                <img class="lazy-image dark-mode-img w-auto mx-auto opacity-30" src="#"
                    data-src="./assets/images/client-logo/client-logo-white-01.png" width="150"
                    height="82" alt="goodness">
            </div>
            <div class="client-logo-item" data-animate="fadeInUp">


                <img class="lazy-image w-auto mx-auto opacity-30 light-mode-img" src="#"
                    data-src="./assets/images/client-logo/client-logo-02.png" width="150"
                    height="82" alt="grandgolden">
                <img class="lazy-image dark-mode-img w-auto mx-auto opacity-30" src="#"
                    data-src="./assets/images/client-logo/client-logo-white-02.png" width="150"
                    height="82" alt="grandgolden">
            </div>
            <div class="client-logo-item" data-animate="fadeInUp">


                <img class="lazy-image w-auto mx-auto opacity-30 light-mode-img" src="#"
                    data-src="./assets/images/client-logo/client-logo-03.png" width="150"
                    height="82" alt="parker">
                <img class="lazy-image dark-mode-img w-auto mx-auto opacity-30" src="#"
                    data-src="./assets/images/client-logo/client-logo-white-03.png" width="150"
                    height="82" alt="parker">
            </div>
            <div class="client-logo-item" data-animate="fadeInUp">


                <img class="lazy-image w-auto mx-auto opacity-30 light-mode-img" src="#"
                    data-src="./assets/images/client-logo/client-logo-04.png" width="150"
                    height="82" alt="thebeast">
                <img class="lazy-image dark-mode-img w-auto mx-auto opacity-30" src="#"
                    data-src="./assets/images/client-logo/client-logo-white-04.png" width="150"
                    height="82" alt="thebeast">
            </div>
            <div class="client-logo-item" data-animate="fadeInUp">


                <img class="lazy-image w-auto mx-auto opacity-30 light-mode-img" src="#"
                    data-src="./assets/images/client-logo/client-logo-05.png" width="150"
                    height="82" alt="hayden">
                <img class="lazy-image dark-mode-img w-auto mx-auto opacity-30" src="#"
                    data-src="./assets/images/client-logo/client-logo-white-05.png" width="150"
                    height="82" alt="hayden">
            </div>
            <div class="client-logo-item" data-animate="fadeInUp">


                <img class="lazy-image w-auto mx-auto opacity-30 light-mode-img" src="#"
                    data-src="./assets/images/client-logo/client-logo-06.png" width="150"
                    height="82" alt="goodmood">
                <img class="lazy-image dark-mode-img w-auto mx-auto opacity-30" src="#"
                    data-src="./assets/images/client-logo/client-logo-white-06.png" width="150"
                    height="82" alt="goodmood">
            </div>
            <div class="client-logo-item" data-animate="fadeInUp">


                <img class="lazy-image w-auto mx-auto opacity-30 light-mode-img" src="#"
                    data-src="./assets/images/client-logo/client-logo-01.png" width="150"
                    height="82" alt="goodness">
                <img class="lazy-image dark-mode-img w-auto mx-auto opacity-30" src="#"
                    data-src="./assets/images/client-logo/client-logo-white-01.png" width="150"
                    height="82" alt="goodness">
            </div>
        </div>

    </div>
</section>


<section class="bg-section-2 overflow-hidden" id="specia_offer_beauty_inspired_by_real_life_1">

    <div class="container container-xxl">
        <div class="row">
            <div class="col-lg-6 ps-6">
                <div class="py-lg-23 py-16 mt-lg-3 mb-lg-5 ms-lg-auto content-wrap">
                    <div class="text-left">
                        <p class="fs-15px mb-7 ls-1 text-body-emphasis fw-semibold text-uppercase">Special
                            offer</p>
                        <h2 class="mb-6 mw-xl-50 mw-lg-60 pt-1">Beauty Inspired by Real Life</h2>
                        <p class="fs-18px mb-0 mw-xl-60 mw-lg-75">Made using clean, non-toxic ingredients, our
                            products are designed for everyone.</p>
                    </div>

                    <a href="#" class="btn btn-white mt-10 mb-2">Discover Now</a>
                </div>
            </div>
            <div class="col-lg-6 py-25 py-lg-0 position-relative">
                <div
                    class="card-img-overlay d-flex align-items-center justify-content-center w-lg-half-screen">

                    <div class="lazy-bg bg-overlay position-absolute z-index-0 w-100 h-100 bg-col-lg-half-screen-right   light-mode-img"
                        data-bg-src="./assets/images/others/video-01.jpg">
                    </div>
                    <div class="lazy-bg bg-overlay dark-mode-img position-absolute z-index-0 w-100 h-100 bg-col-lg-half-screen-right"
                        data-bg-src="./assets/images/others/video-white-01.jpg">
                    </div>
                    <a href="https://www.youtube.com/watch?v=6v2L2UGZJAM"
                        class="square view-video rounded-circle z-index-1 bg-body text-body-emphasis fs-2 bg-dark-hover text-light-hover"
                        style="--square-size:115px;"><svg class="icon">
                            <use xlink:href="#icon-play-fill"></use>
                        </svg></a>


                </div>
            </div>
        </div>
    </div>
</section>
@endsection