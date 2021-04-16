<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src={{Storage::url("images/IT_logo.png")}} alt="Logo" width="80" height="24">
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="active has-sub">
                    <a class="js-arrow" href="{{url('/')}}">
                    <i class="fas fa-tachometer-alt"></i>Home</a>
                </li>
                @if(Auth::check())
                <li>
                    <a href="{{url('/teams')}}">
                        <i class="fas fa-chart-bar"></i>Teams</a>
                </li>
                <li>
                    <a href="{{url('/games')}}">
                        <i class="fas fa-table"></i>Games</a>
                </li>
                @endif
                @if(!Auth::check())
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-copy"></i>Pages</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="login">Login</a>
                        </li>
                        <li>
                            <a href="register">Register</a>
                        </li>
                        <li>
                            <a href="forgot-password">Forget Password</a>
                        </li>
                    </ul>
                </li>
                @endif
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->
