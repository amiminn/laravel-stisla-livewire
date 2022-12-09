<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a>Example</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a>Example</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown active">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('/') ? 'active' : '' }}'>
                        <a class="nav-link" href="/">Dashboard</a>
                    </li>
                </ul>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('tes') ? 'active' : '' }}'>
                        <a class="nav-link" href="/tes">Tes</a>
                    </li>
                </ul>
            </li>
        </ul>

        <div class="hide-sidebar-mini mt-4 mb-4 p-3">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
            </a>
        </div>
    </aside>
</div>