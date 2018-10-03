
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard" class="brand-link">
      <img src="{{ url('/').'/dist/img/AdminLTELogo.png'}}" alt="Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">{{config('app.name', 'STɅDI')}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ url('/').'/dist/img/user2-160x160.jpg'}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ url('/').'/student/index'}}" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <?php if (Auth::user()->role_id == 5 || Auth::user()->role_id == 6){ $is_admin = '0'; }else{ $is_admin = '1'; } ?>
        @foreach (Modules::getModule($is_admin) as $module)
          @if (!in_array(Session::get('cid'), explode(',', $module->disabled_cid_array)))
            @if ($module->tree_view == 1)
          <li class="nav-item has-treeview">
            <a href="{{ $module->short_code }}" class="nav-link">
              <i class="nav-icon {{ $module->img }}"></i>
              <p>{{ $module->name }}
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @foreach (Modules::getModuleList($module->id) as $moduleList)
              <li class="nav-item">
                <a href="{{ url('/').'/'.$moduleList->short_code }}" class="nav-link">
                  <i class="fa fa-angle-right nav-icon"></i>
                  <p>{{ $moduleList->name }}</p>
                </a>
              </li>
              @endforeach
            </ul>
          </li>
            @else
          <li class="nav-item <?php if ($module->tree_view == 1){ echo 'has-treeview'; } ?>">
            <a href="{{ url('/').'/'.$module->short_code }}" class="nav-link">
              <i class="nav-icon {{ $module->img }}"></i>
              <p>{{ $module->name }}</p>
            </a>
          </li>                        
            @endif
          @endif
        @endforeach
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>