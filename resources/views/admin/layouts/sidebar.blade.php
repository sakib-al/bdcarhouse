@php
$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();
@endphp

<style>
    .nav-icon {
        margin-right: 10px;
    }

</style>


<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">

            <li class="@yield('dasboard')"><a href="{{ route('home') }}"><i class="nav-icon fas fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            @if (\Auth::user()->id==1)
            <li class="treeview @yield('product')">

                <a href="#"><i class="nav-icon fas fa-th"></i><span>Product</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>


                <ul class="treeview-menu">
                    <li class="@yield('product_list')"><a class="nav-link" href="{{route('product.list')}}"><i
                                class="far fa-circle nav-icon"></i><span>Product List</span></a></li>
                    <li class="@yield('category')"><a class="nav-link" href="{{route('admin.category.list')}}"><i
                                class="far fa-circle nav-icon"></i><span>Category</span></a></li>
                    <li class="@yield('brand')"><a class="nav-link" href="{{route('admin.brand.list')}}"><i
                                class="far fa-circle nav-icon"></i><span>Brand</span></a></li>
                    <li class="@yield('model')"><a class="nav-link" href="{{route('admin.carmodel.list')}}"><i
                                class="far fa-circle nav-icon"></i><span>Model</span></a></li>
                            {{-- <li><a class="nav-link" href="{{route('product_image.list')}}">Product Image</a>
                    </li> --}}
                    <li class="@yield('blog')"><a class="nav-link" href="{{route('admin.blog.list')}}"><i
                                class="far fa-circle nav-icon"></i><span>Blog Post</span></a></li>
                    <li class="@yield('country')"><a class="nav-link" href="{{route('admin.country.list')}}"><i
                                class="far fa-circle nav-icon"></i><span>Country</span></a></li>
                    <li class="@yield('city')"><a class="nav-link {{($route=='admin.city.index')?'active':''}}"
                            href="{{route('admin.city.index')}}"><i class="far fa-circle nav-icon"></i><span>City</span></a>
                    </li>
                    <li class="@yield('chat_bot')"><a class="nav-link" href="{{ route('chat.bot') }}"><i
                                class="far fa-circle nav-icon"></i><span>Chat Bot</span></a></li>


                </ul>
            </li>
            @endif

            <li class="treeview @yield('spare_parts')">
                @if (\Auth::user()->id==1)
                <a href="#"><i class="fas fa-tools"></i><span style="margin-left: 10px;">Spare Parts</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                @else
                <a href="#"><i class="fas fa-tools"></i> <span style="margin-left: 10px;">Your Products</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                @endif
                <ul class="treeview-menu">
                    <li class="@yield('parts')"><a class="nav-link {{($route=='parts.index')?'active':''}}"
                            href="{{route('parts.index')}}"><i class="far fa-circle nav-icon"></i><span>Spare
                                Parts</span></a>
                    </li>
                    <li class="@yield('parts_category')"><a
                            class="nav-link {{($route=='parts.category.index')?'active':''}}"
                            href="{{route('parts.category.index')}}"><i class="far fa-circle nav-icon"></i><span>Parts
                                Category</span></a>
                    </li>
                </ul>
            </li>

            <li class="treeview @yield('user_info')">
                <a href="#"><i class="fas fa-users"></i> <span style="margin-left: 5px;">User Information</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="@yield('contact_info')"><a class="nav-link {{($route=='user_contact.index')?'active':''}}"
                            href="{{ route('user_contact.index') }}"><i class="far fa-circle nav-icon"></i><span>Contact Information</span></a>
                    </li>

                </ul>
            </li>

            @if (\Auth::user()->id==1)
            <li class="treeview @yield('settings')">
                <a href="#"><i class="fas fa-cogs"></i> <span style="margin-left: 5px;">Settings</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="@yield('user')"><a class="nav-link {{($route=='users.list')?'active':''}}"
                            href="{{route('users.list')}}"><i class="far fa-circle nav-icon"></i><span>Users</span></a>
                    </li>

                </ul>
            </li>
            @endif

        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
