<header class="main-header">



    <!-- Logo -->
    <a href="{{ route('index') }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>C</b>HT</span>

        <span class="logo-lg">BdCar House</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

                <!-- User Account Menu -->
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- The user image in the navbar-->
                        <img src="{{asset('/')}}image/{{ Auth::user()->image ??'' }}" class="user-image"
                             alt="User Image">
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                            <img src="{{asset('/')}}image/{{ Auth::user()->image ??'' }}" class="img-circle"
                                 alt="User Image">

                            <p>
                                {{ Auth::user()->name }}
                                <small>{{ Auth::user()->email }}</small>
                                <small>{{ Auth::user()->address }}</small>

                            </p>
                        </li>
                        <!-- Menu Body -->
                        {{-- <li class="user-body">
                            <div class="row">
                                <div class="col-xs-4 text-center">
                                    <a href="#">Followers</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">Sales</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">Friends</a>
                                </div>
                            </div>
                            <!-- /.row -->
                        </li> --}}
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="{{ route('user.profile',Auth::user()->id) }}" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">

                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();"
                                   class="btn btn-default btn-flat">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>

                            </div>
                        </li>
                    </ul>
                </li>


            </ul>
        </div>
    </nav>
</header>
