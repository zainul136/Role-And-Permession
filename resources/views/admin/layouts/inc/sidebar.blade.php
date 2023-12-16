<!-- begin app-nabar -->
<aside class="app-navbar">
    <!-- begin sidebar-nav -->
    <div class="sidebar-nav scrollbar scroll_light">
        <ul class="metismenu " id="sidebarNav">
            <li class="nav-static-title">Personal</li>
            <li class="active">
                <a class="has-arrow" href="{{url('dashboard')}}" aria-expanded="false">
                    <i class="nav-icon ti ti-rocket"></i>
                    <span class="nav-title">Dashboards</span>
                    <span class="nav-label label label-danger">9</span>
                </a>
                <ul aria-expanded="false">
                    <li class="active"> <a href='{{url('dashboard')}}'>Default</a> </li>
                </ul>
            </li>
            <li><a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-calendar"></i><span class="nav-title">Role</span></a>
                <ul aria-expanded="false">
                    <li> <a href="{{route('roles.index')}}">All Role</a> </li>
                    <li> <a href="{{route('roles.create')}}">Create New Role</a> </li>
                </ul>
            </li>
            <li><a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-calendar"></i><span class="nav-title">Permissions</span></a>
                <ul aria-expanded="false">
                    <li> <a href="{{route('permissions.index')}}">All Permissions</a> </li>
                    <li> <a href="{{route('permissions.create')}}">Create New Permissions</a> </li>
                </ul>
            </li>

        </ul>
    </div>
    <!-- end sidebar-nav -->
</aside>
<!-- end app-navbar -->
