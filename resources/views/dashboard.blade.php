<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Codescandy">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-M8S4MT3EYG"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-M8S4MT3EYG');
    </script>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets_backend/images/favicon/favicon.ico') }}">
    <link href="{{ asset('assets_backend/libs/bootstrap-icons/font/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_backend/libs/%40mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_backend/libs/simplebar/dist/simplebar.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets_backend/css/theme.min.css') }}">
    <title>Shop Admin</title>
    {{-- <script src="https://novateen.vn/backend/scripts/dist/xlsx.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script> --}}

</head>
<style>
    #alert-message {
        opacity: 0;
        transition: opacity 1s ease-in-out;
        /* 1 giây để hiện ra và ẩn đi */
        visibility: hidden;
    }

    #alert-message.show {
        opacity: 1;
        visibility: visible;
    }
</style>

<body>
<main id="main-wrapper" class="main-wrapper">
    <!-- header -->
    @include('backend.common.header')
    <!-- navbar vertical -->

    <!-- Sidebar -->

    @include('backend.common.sidebar')
    <!-- page content -->
    <div id="app-content">
        <div class="app-content-area">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade alert_message">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-dark alert-dismissible fade alert_message">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    {{ session('error') }}
                </div>
            @endif
            @yield('content')
        </div>
    </div>
</main>

<!-- Libs JS -->
<script src="{{ asset('assets_backend/libs/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('assets_backend/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets_backend/libs/feather-icons/dist/feather.min.js') }}"></script>
<script src="{{ asset('assets_backend/libs/simplebar/dist/simplebar.min.js') }}"></script>

<!-- Theme JS -->
<script src="{{ asset('assets_backend/js/theme.min.js') }}"></script>
<script src="{{ asset('assets_backend/js/slug.js') }}"></script>
<!-- popper js -->
<script src="{{ asset('assets_backend/libs/%40popperjs/core/dist/umd/popper.min.js') }}"></script>
<!-- tippy js -->
<script src="{{ asset('assets_backend/libs/tippy.js/dist/tippy-bundle.umd.min.js') }}"></script>
<script src="{{ asset('assets_backend/js/vendors/tooltip.js') }}"></script>
<script src="{{ asset('assets_backend/js/slug.js') }}"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const successAlert = document.querySelector('.alert-success');
        const errorAlert = document.querySelector('.alert-dark');
        if (successAlert) {
            successAlert.classList.add('show');
            setTimeout(() => {
                successAlert.classList.add('fade-out');
                setTimeout(() => successAlert.remove(),
                    1000);
            }, 5000);
        }
        if (errorAlert) {
            errorAlert.classList.add('show');
            setTimeout(() => {
                errorAlert.classList.add('fade-out');
                setTimeout(() => errorAlert.remove(),
                    1000);
            }, 5000);
        }

        // Ẩn thông báo khi click nút đóng
        const closeButtons = document.querySelectorAll('.btn-close');
        closeButtons.forEach(button => {
            button.addEventListener('click', function () {
                const alert = this.closest('.alert');
                alert.classList.remove('show');
                setTimeout(() => alert.remove(),
                    500);
            });
        });
    });
</script>
</body>

</html>
