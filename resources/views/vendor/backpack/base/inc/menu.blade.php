<div class="navbar-custom-menu pull-left">
    <ul class="nav navbar-nav">
        <!-- =================================================== -->
        <!-- ========== Top menu items (ordered left) ========== -->
        <!-- =================================================== -->

        <li><a href="{{ url('/admin/dashboard/') }}"><i class="fa fa-home"></i></a></li>
        <!-- ========== End of top menu left items ========== -->
    </ul>
</div>


@if (Auth::guest())

    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <!-- ========================================================= -->
            <!-- ========== Top menu right items (ordered left) ========== -->
            <!-- ========================================================= -->

        <!-- <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> <span>Home</span></a></li> -->

            @if (Auth::guest())
                <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/login') }}">{{ trans('backpack::base.login') }}</a></li>
                @if (config('backpack.base.registration_open'))
                    <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/register') }}">{{ trans('backpack::base.register') }}</a></li>
                @endif
            @else
                <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/logout') }}"><i class="fa fa-btn fa-sign-out"></i> {{ trans('backpack::base.logout') }}</a></li>
        @endif

        <!-- ========== End of top menu right items ========== -->
        </ul>
    </div>

@else

    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

         <!-- Messages: style can be found in dropdown.less-->
        @include('backend.partials.dropdown-messages')

        <!-- Notifications: style can be found in dropdown.less -->
        @include('backend.partials.dropdown-notifications')

        <!-- Tasks: style can be found in dropdown.less -->
        @include('backend.partials.dropdown-tasks')

        <!-- User Account: style can be found in dropdown.less -->
        @include('backend.partials.dropdown-user')

        <!-- Control Sidebar Toggle Button -->
            <!-- <li><a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a></li> -->
        </ul>
    </div>
@endif