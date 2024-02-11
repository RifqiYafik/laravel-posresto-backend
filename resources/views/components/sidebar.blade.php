<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ url('/home') }}">Resto Rifqi</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ url('/home') }}">RR</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown ">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Resto Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('/home') ? 'active' : '' }}'>
                        <a class="nav-link"
                            href="{{ url('/home') }}">General Dashboard</a>
                    </li>
                </ul>
                {{-- <ul class="dropdown-menu">
                    <li class=''>
                        <a class="nav-link"
                            href="{{ route('users.index') }}">Users</a>
                    </li>
                </ul> --}}
            </li>
            <li class="menu-header">Resto Control</li>
            <li class="nav-item dropdown ">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-columns"></i><span>Category</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('dashboard-general-dashboard') ? 'active' : '' }}'>
                        <a class="nav-link"
                            href="{{ route('categories.index') }}">All Categories</a>
                    </li>
                </ul>
                <ul class="dropdown-menu">
                    <li class=''>
                        <a class="nav-link"
                            href="{{ route('categories.index') }}">Top Categories</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown ">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fab fa-product-hunt"></i><span>Product</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('dashboard-general-dashboard') ? 'active' : '' }}'>
                        <a class="nav-link"
                            href="{{ route('products.index') }}">All Products</a>
                    </li>
                </ul>
                <ul class="dropdown-menu">
                    <li class=''>
                        <a class="nav-link"
                            href="{{ route('products.index') }}">Top Products</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown ">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-user"></i><span>User</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('dashboard-general-dashboard') ? 'active' : '' }}'>
                        <a class="nav-link"
                            href="{{ route('users.index') }}">All Users</a>
                    </li>
                </ul>
                <ul class="dropdown-menu">
                    <li class=''>
                        <a class="nav-link"
                            href="{{ route('users.index') }}">Top Users</a>
                    </li>
                </ul>
            </li>
</div>
