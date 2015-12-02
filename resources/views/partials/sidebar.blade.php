<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('/img/avatar04.png')}}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header"><strong>MENU</strong></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>URLs Menu</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/urls/create') }}">Shorten an URL</a></li>
                    <li><a href="{{ url('/urls/all') }}">List of shortened URLs</a></li>
                </ul>
            </li>
        </ul>
    </section>
</aside>
