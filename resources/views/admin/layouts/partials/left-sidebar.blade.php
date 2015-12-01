<!-- Left Sidebar -->
<aside id="leftbar" class="pull-left">
    <div class="sidebar-container">
        <!-- Main Menu -->
        <ul class="side-menu shadowed">
            <li>
                <a href=""> <i class="icon-home"></i>
                Dashboard
                </a>
            </li>
            <li class="submenu {{Request::is('admin/incomes*')? 'open' : ''}}">
                <a href=""> <i class="icon-table-2"></i>
                Income
                </a>
                <ul>
                    <li>
                        <a class="{{setActive($route = 'admin.incomes.create')}}" href="{{route($route)}}">Add Income</a>
                    </li>
                    <li>
                        <a class="{{setActive($route = 'admin.incomes.index')}}" href="{{route($route)}}">View Income</a>
                    </li>
                </ul>
            </li>
            <li class="submenu {{Request::is('admin/expenditures*')? 'open' : ''}}">
                <a href=""> <i class="icon-table-2"></i>
                Expenditures
                </a>
                <ul>
                    <li>
                        <a class="{{setActive($route = 'admin.expenditures.create')}}" href="{{route($route)}}">Add Expenditures</a>
                    </li>
                    <li>
                        <a class="{{setActive($route = 'admin.expenditures.index')}}" href="{{route($route)}}">View Expenditures</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <span id="leftbar-toggle" class="visible-xs sidebar-toggle">
    <i class="icon-angle-right"></i>
    </span>
</aside>