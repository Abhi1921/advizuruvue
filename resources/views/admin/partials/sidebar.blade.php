<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu" id="side-menu">
                <li class="menu-title"></li>
                <li class="{{ areActiveRoutes(['admin.dashboard'],'mm-active') }}">
                    <a href="{{route('admin.dashboard')}}"
                        class="waves-effect {{ areActiveRoutes(['admin.dashboard'],'mm-active') }}">
                        <i class="fa fa-home"></i><span> Dashboard </span>
                    </a>
                </li>

                <li class="{{ areActiveRoutes(['users.index', 'users.edit', 'users.create'],'mm-active') }}">
                    <a href="{{route('users.index')}}"
                        class="waves-effect {{ areActiveRoutes(['users.index', 'users.edit', 'users.create'],'mm-active') }}"><i
                            class="fa fa-user"></i><span> Users </span></a>
                </li> 
                <li class="{{ areActiveRoutes(['masters.index', 'masters.edit', 'masters.create'],'mm-active') }}">
                    <a href="{{route('masters.index')}}"
                        class="waves-effect {{ areActiveRoutes(['masters.index', 'masters.edit', 'masters.create'],'mm-active') }}"><i
                            class="fa fa-user"></i><span> Masters </span></a>
                </li> 
                <li class="{{ areActiveRoutes(['city.index', 'city.edit', 'city.create'],'mm-active') }}">
                    <a href="{{route('city.index')}}"
                        class="waves-effect {{ areActiveRoutes(['city.index', 'city.edit', 'city.create'],'mm-active') }}"><i
                            class="fa fa-user"></i><span> Cities </span></a>
                </li> 
                <li class="{{ areActiveRoutes(['states.index', 'states.edit', 'states.create'],'mm-active') }}">
                    <a href="{{route('states.index')}}"
                        class="waves-effect {{ areActiveRoutes(['states.index', 'states.edit', 'states.create'],'mm-active') }}"><i
                            class="fa fa-user"></i><span> States </span></a>
                </li> 
                <li class="{{ areActiveRoutes(['countries.index', 'countries.edit', 'countries.create'],'mm-active') }}">
                    <a href="{{route('countries.index')}}"
                        class="waves-effect {{ areActiveRoutes(['countries.index', 'countries.edit', 'countries.create'],'mm-active') }}"><i
                            class="fa fa-user"></i><span> countries </span></a>
                </li> 
                </li> 
            </ul>

        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->