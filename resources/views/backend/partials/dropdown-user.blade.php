<li class="dropdown user user-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <img src="{{ Gravatar::fallback('https://placehold.it/160x160/00a65a/ffffff/&text='.Auth::user()->name[0])->get(Auth::user()->email) }}" class="user-image" alt="User Image">
        <span class="hidden-xs">{{ Auth::user()->name }}</span>
    </a>
    <ul class="dropdown-menu">
        <!-- User image -->
        <li class="user-header">
            <img src="{{ Gravatar::fallback('https://placehold.it/160x160/00a65a/ffffff/&text='.Auth::user()->name[0])->get(Auth::user()->email) }}" class="img-circle" alt="User Image">
            <p>
                {{ Auth::user()->name }}
                <small> --o-- </small>
            </p>
        </li>
        <!-- Menu Body -->
        <li class="user-body">
            <div class="row">
                <div class="col-xs-4 text-center">
                    <a href="#">Müşteriler</a>
                </div>
                <div class="col-xs-4 text-center">
                    <a href="#">Satışlar</a>
                </div>
                <div class="col-xs-4 text-center">
                    <a href="#">Görevler</a>
                </div>
            </div>
            <!-- /.row -->
        </li>
        <!-- Menu Footer-->
        <li class="user-footer">
            <div class="pull-left">
                <a href="#" class="btn btn-default btn-flat">Profil</a>
            </div>
            <div class="pull-right">
                <a href="{{ url(config('backpack.base.route_prefix', 'admin').'/logout') }}" class="btn btn-default btn-flat"><i class="fa fa-btn fa-sign-out"></i> {{ trans('backpack::base.logout') }}</a>
            </div>
        </li>
    </ul>
</li>