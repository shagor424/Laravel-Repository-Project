<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="{{route('main.dashboard')}}">
                        <div class="brand-logo"><img class="logo" src="{{asset('backend')}}/app-assets/images/logo/logo.png" /></div>
                        <h2 class="brand-text mb-0">Frest</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="bx bx-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="bx-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="">
                <li class="{{ request()->is('main/dashboard') ? 'active' : '' }}" class=" nav-item"><a href="{{route('main.dashboard')}}"><i class="bx bx-home-alt"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
                </li>

                  <li class=" nav-item {{ request()->is(['create-user-page','all-user-list','admin/show-user','admin/show-employee']) ? 'menu-open' : '' }}"><a href="index.html"><i class="bx bx-home-alt"></i><span class="menu-title" data-i18n="Dashboard">User Management</span></a>
                    <ul class="menu-content">
                        <li class="{{ request()->is('all-user-list') ? 'active' : '' }}"><a href="{{route('admin.user.list')}}"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="eCommerce">All User List</span></a>
                        </li>
                        <li class="{{ request()->is('create-user-page') ? 'active' : '' }}"><a href="{{route('admin.user.create.page')}}"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Analytics">Crate User</span></a>
                        </li>
                    </ul>
                </li>
               
            </ul>
        </div>
    </div>