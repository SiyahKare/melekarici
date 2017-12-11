@if (Auth::check())
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="{{ backpack_avatar_url(Auth::user()) }}" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>{{ Auth::user()->name }}</p>
              <small><small><a href="{{ route('backpack.account.info') }}"><span><i class="fa fa-user-circle-o"></i> {{ trans('backpack::base.my_account') }}</span></a> &nbsp;  &nbsp; <a href="{{ backpack_url('logout') }}"><i class="fa fa-sign-out"></i> <span>{{ trans('backpack::base.logout') }}</span></a></small></small>
          </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Ara...">
            <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
          </div>
        </form>
        <!-- /.search form -->

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('backpack::base.administration') }}</li>
         {{-- <li class="header">{{ trans('backpack::base.administration') }}</li> --}}
          <!-- ================================================ -->
          <!-- ==== Recommended place for admin menu items ==== -->
          <!-- ================================================ -->
            <li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>



          <li class="treeview">
            <a href="#"><i class="fa fa-cog"></i> <span>İçerikler</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/elfinder') }}"><i class="fa fa-files-o"></i> <span>Dosya Yöneticisi</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/page') }}"><i class="fa fa-file-o"></i> <span>Sayfalar</span></a></li>
              <li><a href="{{ url('admin/menu-item') }}"><i class="fa fa-list"></i> <span>Menü Yönetimi</span></a></li>
            </ul>
          </li>

          <li class="treeview">
            <a href="#"><i class="fa fa-newspaper-o"></i> <span>Makaleler</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="{{ url('admin/article') }}"><i class="fa fa-newspaper-o"></i> <span>Makaleler</span></a></li>
              <li><a href="{{ url('admin/category') }}"><i class="fa fa-list"></i> <span>Kategoriler</span></a></li>
              <li><a href="{{ url('admin/tag') }}"><i class="fa fa-tag"></i> <span>Tag - Etiketler</span></a></li>
            </ul>
          </li>

          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/mailing') }}"><i class="fa fa-envelope"></i> <span>Toplu Mail</span></a></li>

          <li class="treeview">
            <a href="#"><i class="fa fa-cog"></i> <span>Ayarlar</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/language') }}"><i class="fa fa-flag-o"></i> <span>Diller</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/language/texts') }}"><i class="fa fa-language"></i> <span>Dil Dosyaları</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/backup') }}"><i class="fa fa-hdd-o"></i> <span>Yedekleme</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/log') }}"><i class="fa fa-terminal"></i> <span>Loglar</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/setting') }}"><i class="fa fa-cog"></i> <span>Ayarlar</span></a></li>
            </ul>
          </li>

          <!-- ======================================= -->
          <li class="header">KULLANICI</li>
          <!-- Users, Roles Permissions -->
          <li class="treeview">
            <a href="#"><i class="fa fa-group"></i> <span>Kullanıcı Rol Yetkiler</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/user') }}"><i class="fa fa-user"></i> <span>Kullanıcılar</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/role') }}"><i class="fa fa-group"></i> <span>Roller</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/permission') }}"><i class="fa fa-key"></i> <span>Yetkiler</span></a></li>
            </ul>
          </li>

          <!-- ================== SiyahKare ===================== -->
          <li class="header">SiyahKare</li>
          <li class="treeview">
            <a href="#"><i class="fa fa-cube"></i> <span>SiyahKare</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="/vendor/adminlte/index.html" target="_blank"><i class="fa fa-globe"></i> <span>AdminLTE Template</span></a></li>
            </ul>
          </li>

          <!-- ================== BugReport ===================== -->
          <li class="treeview">
            <a href="#"><i class="fa fa-bug"></i> <span>BUG Raporlama</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/issue') }}"><i class="fa fa-globe"></i> <span>BUG Raporla</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/issuetype') }}"><i class="fa fa-language"></i> <span>BUG Türü</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/component') }}"><i class="fa fa-hdd-o"></i> <span>Komponent</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/version') }}"><i class="fa fa-terminal"></i> <span>Versiyon</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/issuestat') }}"><i class="fa fa-cog"></i> <span>BUG Durumu</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/epic') }}"><i class="fa fa-cog"></i> <span>Destan</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/sprint') }}"><i class="fa fa-cog"></i> <span>Sprint</span></a></li>
            </ul>
          </li>

          <!-- =================== The Other Menus ==================== -->
            {{-- <li class="header">Other menus</li> --}}



        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
@endif
