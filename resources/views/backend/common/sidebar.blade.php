<!-- Sidebar -->
@php
    use Illuminate\Support\Facades\Auth;
    $user = Auth::user();

@endphp

<div class="navbar-vertical navbar nav-dashboard">
    <div class="h-100" data-simplebar>
        <!-- Brand logo -->
        <a class="navbar-brand" href="">
            <img src="{{ asset('assets/images/brand/logo/logo-2.svg') }}"
                alt="dash ui - bootstrap 5 admin dashboard template">
        </a>
        <!-- Navbar nav -->
        <ul class="navbar-nav flex-column" id="sideNavbar">
            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link has-arrow " href="#!" data-bs-toggle="collapse" data-bs-target="#navDashboard"
                    aria-expanded="false" aria-controls="navDashboard">
                    <i data-feather="home" class="nav-icon me-2 icon-xxs"></i>
                    THỐNG KÊ
                </a>

                <div id="navDashboard" class="collapse" data-bs-parent="#sideNavbar">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link " href="dashboard-analytics.html">
                                Analytics </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="../index.html">
                                Project </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link has-arrow   " href="dashboard-ecommerce.html">
                                Ecommerce
                            </a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link has-arrow " href="dashboard-crm.html">
                                CRM
                            </a>


                        </li>
                        <li class="nav-item">
                            <a class="nav-link has-arrow   " href="dashboard-finance.html">
                                Finance
                            </a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link has-arrow   " href="dashboard-blog.html">
                                Blog
                            </a>

                        </li>


                    </ul>
                </div>

            </li>

            <!-- Nav item -->
            <li class="nav-item">
                <div class="navbar-heading">QUẢN LÝ</div>
            </li>

            <li class="nav-item">
                <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse"
                    data-bs-target="#on-luyen" aria-expanded="false" aria-controls="navecommerce">
                    <i data-feather="help-circle" class="nav-icon me-2 icon-xxs">
                    </i> Sản phẩm

                </a>

                <div id="on-luyen"
                    class="collapse {{ Route::currentRouteName() === 'admin.products.create' ? 'show' : '' }} {{ Route::currentRouteName() === 'admin.products.index' ? 'show' : '' }} {{ Route::currentRouteName() === 'admin.categories.index' ? 'show' : '' }}"
                    data-bs-parent="#sideNavbar">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link nav-link  nav-item {{ Route::currentRouteName() === 'admin.products.index' ? 'active' : '' }}"
                                href="{{ route('admin.products.index') }}">
                                Tất cả sản phẩm
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link  nav-item {{ Route::currentRouteName() === 'admin.products.create' ? 'active' : '' }}"
                                
                                href="{{ route('admin.products.create') }}">
                                Thêm sản phẩm mới
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link nav-link  nav-item {{ Route::currentRouteName() === 'admin.categories.index' ? 'active' : '' }}"
                                href="{{ route('admin.categories.index') }}">
                                Danh mục
                            </a>
                        </li>

                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <div class="navbar-heading">CÀI ĐẶT</div>
            </li>
            <style>
                .navbar-vertical .navbar-nav .nav .nav-item .nav-link.active {
                    font-weight: bold;
                }
            </style>
        </ul>
    </div>
</div>
