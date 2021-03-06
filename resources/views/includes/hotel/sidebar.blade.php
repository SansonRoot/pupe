<div class="col-md-3 left_col">
    <div class="left_col scroll-view">

        <div class="navbar nav_title" style="border: 0;">
            <a href="{{url('hotel/dashboard')}}" class="site_title"><i class="fa fa-paw"></i> <span>W3MSys Hotel Portal</span></a>
        </div>
        <div class="clearfix"></div>


        <!-- menu prile quick info -->
        <div class="profile">

            <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{Auth::guard('hotel')->user()->name}}</h2>
            </div>
        </div>
        <!-- /menu prile quick info -->
        <span class="clearfix"></span>


        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">

                <ul class="nav side-menu">

                    <li>
                        <a href="{{url('hotel/dashboard')}}">
                            <i class="fa fa-dashboard"></i> Dashboard
                        </a>
                    </li>

                    <li>
                        <a href="{{url('hotel/rooms')}}">
                            <i class="fa fa-bed"></i> Rooms
                        </a>
                    </li>
                    <li>
                        <a href="{{url('hotel/facilities')}}">
                            <i class="fa fa-users"></i> Facilities
                        </a>
                    </li>
                    <li>
                        <a href="{{url('hotel/bookings')}}">
                            <i class="fa fa-book"></i> Bookings
                        </a>
                    </li>

                    <li>
                        <a href="{{url('hotel/settings')}}">
                            <i class="fa fa-cog"></i> Settings
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out"></i>
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>

                    </li>
                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>