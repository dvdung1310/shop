(function ($) {
    "use strict";

    var initPreloader = function () {
        $(document).ready(function () {
            var Body = $("body");
            Body.addClass("preloader-site");
        });
        $(window).on("load", function () {
            $(".preloader").fadeOut();
            $("body").removeClass("preloader-site");
        });
    };

    // init Chocolat light box
    var initChocolat = function () {
        Chocolat(document.querySelectorAll(".image-link"), {
            imageSize: "contain",
            loop: true,
        });
    };

    $(document).ready(function () {
        // Isotope Initialization
        var $container = $(".isotope-container").isotope({
            itemSelector: ".item",
            layoutMode: "masonry",
        });

        // Filter items on button click
        $(".filter-button").click(function () {
            var filterValue = $(this).attr("data-filter");
            if (filterValue === "*") {
                $container.isotope({ filter: "*" });
            } else {
                $container.isotope({ filter: filterValue });
            }
            $(".filter-button").removeClass("active");
            $(this).addClass("active");
        });

        // Gọi API để lấy danh sách các tỉnh/thành phố
        $.get("https://provinces.open-api.vn/api/?depth=2", function (data) {
            var citySelect = $("#city");
            var districtSelect = $("#district");

            // Thêm các tùy chọn tỉnh/thành phố vào dropdown
            data.forEach(function (city) {
                var cityOptionValue = city.code + "-" + city.name; // Tạo giá trị cho thành phố theo định dạng id-name
                citySelect.append(new Option(city.name, cityOptionValue)); // Sử dụng định dạng id-name
            });

            // Khi người dùng chọn một tỉnh/thành phố
            citySelect.on("change", function () {
                var cityCodeName = $(this).val(); // Lấy giá trị id-name
                var cityCode = cityCodeName.split("-")[0]; // Lấy id của thành phố

                districtSelect
                    .empty()
                    .append('<option value="">Chọn Huyện/Quận</option>');

                // Tìm tỉnh/thành phố đã chọn và thêm các huyện/quận tương ứng vào dropdown
                var selectedCity = data.find(function (city) {
                    return city.code == cityCode;
                });

                if (selectedCity) {
                    selectedCity.districts.forEach(function (district) {
                        var districtOptionValue = district.code + "-" + district.name; // Tạo giá trị cho quận/huyện theo định dạng id-name
                        districtSelect.append(
                            new Option(district.name, districtOptionValue) // Sử dụng định dạng id-name
                        );
                    });
                }
            });
        });

        // Video Modal
        var $videoSrc;
        $(".play-btn").click(function () {
            $videoSrc = $(this).data("src");
        });

        $("#myModal").on("shown.bs.modal", function (e) {
            $("#video").attr(
                "src",
                $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0"
            );
        });

        $("#myModal").on("hide.bs.modal", function (e) {
            $("#video").attr("src", $videoSrc);
        });

        // Swiper Initialization
        var sliderSwiper = new Swiper(".slider", {
            effect: "fade",
        });

        var roomSwiper = new Swiper(".room-swiper", {
            slidesPerView: 3,
            spaceBetween: 20,
            pagination: {
                el: ".room-pagination",
                clickable: true,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                1024: {
                    slidesPerView: 2,
                },
                1280: {
                    slidesPerView: 3,
                },
            },
        });

        var gallerySwiper = new Swiper(".gallery-swiper", {
            effect: "fade",
            navigation: {
                nextEl: ".main-slider-button-next",
                prevEl: ".main-slider-button-prev",
            },
        });

        var thumbSlider = new Swiper(".product-thumbnail-slider", {
            autoplay: true,
            loop: true,
            spaceBetween: 8,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesProgress: true,
        });

        var largeSlider = new Swiper(".product-large-slider", {
            autoplay: true,
            loop: true,
            spaceBetween: 10,
            effect: "fade",
            thumbs: {
                swiper: thumbSlider,
            },
        });

        // Preloader
        initPreloader();

        // Chocolat
        initChocolat();

        // Animate on Scroll
        AOS.init({
            duration: 1000,
            once: true,
        });

        // DateTimePicker
        new DateTimePickerComponent.DatePicker("select-arrival-date");
        new DateTimePickerComponent.DatePicker("select-departure-date");
    });
})(jQuery);
