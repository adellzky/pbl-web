<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('home') }}">MEDIPET</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">Mp</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard Admin</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class=''>
                        <a class="nav-link" href="#">Manage Order</a>
                    </li>
                    <li class=" ">
                        <a class="nav-link" href="{{ route('Item.index') }}">Manage Item</a>
                    </li>

                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Service</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('layout-default-layout') ? 'active' : '' }}">
                        <a class="nav-link" href="{{route('grooming.index')}}">Grooming</a>
                    </li>
                    <li class="{{ Request::is('transparent-sidebar') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('transparent-sidebar') }}">Vaccine</a>
                    </li>
                </ul>
            </li>
            <li class="{{ Request::is('blank-page') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('blank-page') }}"><i class="far fa-square"></i>
                    <span>Consultation</span></a>
            </li>


            <div class="hide-sidebar-mini mt-4 mb-4 p-3">
                <a href="#" class="btn btn-primary btn-lg btn-block btn-icon-split">
                    <i class="fas fa-rocket"></i> Catalog
                </a>
            </div>
    </aside>
</div>
