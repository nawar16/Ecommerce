

<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>
      

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>


    
    <!-- Control Sidebar Toggle Button -->
    <!-- Right navbar links -->
    
    <!-- User Account: style can be found in dropdown.less -->
    <ul class="navbar-nav ml-auto">


      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ url('/adminlte/dist/img/user1-128x128.jpg')}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ url('/adminlte/dist/img/user8-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ url('/adminlte/dist/img/user3-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
       <a href="#" class="dropdown-toggle" data-toggle="dropdown">
         <i class="fa fa-globe"></i>
         <span class="hidden-xs"></span>
       </a>
        <!-- Menu Body -->
        <ul class="dropdown-menu">
        <li><a href="{{ aurl('lang/ar') }}"><i class="fa fa-flag"></i> عربي</a></li>
        <li><a href="{{ aurl('lang/en') }}"><i class="fa fa-flag"></i>English</a></li>
        </ul>
      </li>
  </nav>
  <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
    <p>
    {{ helAdmin()->user()->name }}
    </p>  
     
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <!--<img src="adminlte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">-->
        </div>
        <div class="info">
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" style="{{ active_menu('')[0] }}">

               <li class="treeview {{ active_menu('')[0] }}">
               <a href="#">
                 <i class="fa fa-list"></i> <span>{{ trans('admin.dashboard') }}</span>
                 <span class="pull-right-container">
                   <i class="fa fa-angle-left pull-right"></i>
                 </span>
               </a>
               <ul class="treeview-menu" style="{{ active_menu('admin')[1] }}">
                 <li class=""><a href="{{ aurl() }}">
                   <i class="fa fa-cog"></i> <span>{{ trans('admin.dashboard') }}</span>
                   <span class="pull-right-container">
                   </span>
                 </a>
               </li>
               <li class=""><a href="{{ aurl('settings') }}">
                 <i class="fa fa-cog"></i> <span>{{ trans('admin.settings') }}</span>
                 <span class="pull-right-container">
                 </span>
               </a>
             </li>
           </ul>
         </li>

          <p>
          <li class="treeview {{ active_menu('admin')[0] }}">
          <a href="#">
          <i class="fa fa-users"></i> <span>{{ trans('admin.admin') }}</span>
          <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
          </span>
          </a>
          <ul class="treeview-menu" style="{{ active_menu('admin')[1] }}">
          <li class=""><a href="{{ aurl('admin') }}"><i class="fa fa-users"></i> {{ trans('admin.admin') }}</a></li>
          </ul>
          </li>
        
          </p>

          <p>
          <li class="treeview {{ active_menu('users')[0] }}">
          <a href="{{ aurl('users') }}">
          <i class="fa fa-users"></i> <span>{{ trans('admin.user') }}</span>
          <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
          </span>
          </a>
          <ul class="treeview-menu" style="{{ active_menu('users')[1] }}">
          <li class=""><a href="{{ aurl('users') }}?level=user"><i class="fa fa-users"></i> {{ trans('admin.user1') }}</a></li>
          <li class=""><a href="{{ aurl('users') }}?level=vendor"><i class="fa fa-users"></i> {{ trans('admin.vendor') }}</a></li>
          <li class=""><a href="{{ aurl('users') }}?level=company"><i class="fa fa-users"></i> {{ trans('admin.company') }}</a></li>
          </ul>
          </li>
          </p>

          <p>
          <li class="treeview {{ active_menu('countries')[0] }}">
          <a href="#">
            <i class="fa fa-flag"></i> <span>{{ trans('admin.countries') }}</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="{{ active_menu('countries')[1] }}">
            <li class=""><a href="{{ aurl('countries') }}"><i class="fa fa-flag"></i> {{ trans('admin.countries') }}</a></li>
            <li class=""><a href="{{ aurl('countries/create') }}"><i class="fa fa-plus"></i> {{ trans('admin.add') }}</a></li>
          </ul>
          </li>
          </p>
          
          <p>
          <li class="treeview {{ active_menu('cities')[0] }}">
          <a href="#">
          <i class="fa fa-flag"></i> <span>{{ trans('admin.cities') }}</span>
          <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
          </span>
          </a>
          <ul class="treeview-menu" style="{{ active_menu('cities')[1] }}">
          <li class=""><a href="{{ aurl('cities') }}"><i class="fa fa-flag"></i> {{ trans('admin.cities') }}</a></li>
          <li class=""><a href="{{ aurl('cities/create') }}"><i class="fa fa-plus"></i> {{ trans('admin.add') }}</a></li>
          </ul>
          </li>
          </p>

    <p>
    <li class="treeview {{ active_menu('states')[0] }}">
    <a href="#">
      <i class="fa fa-flag"></i> <span>{{ trans('admin.states') }}</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu" style="{{ active_menu('states')[1] }}">
      <li class=""><a href="{{ aurl('states') }}"><i class="fa fa-flag"></i> {{ trans('admin.states') }}</a></li>
      <li class=""><a href="{{ aurl('states/create') }}"><i class="fa fa-plus"></i> {{ trans('admin.add') }}</a></li>
    </ul>
  </li>
  </p>

  <p>
  <li class="treeview {{ active_menu('departments')[0] }}">
    <a href="#">
      <i class="fa fa-list"></i> <span>{{ trans('admin.departments') }}</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu" style="{{ active_menu('departments')[1] }}">
      <li class=""><a href="{{ aurl('departments') }}"><i class="fa fa-list"></i> {{ trans('admin.departments') }}</a></li>
      <li class=""><a href="{{ aurl('departments/create') }}"><i class="fa fa-plus"></i> {{ trans('admin.add') }}</a></li>
    </ul>
  </li>
  </p>

  <p>
   <li class="treeview {{ active_menu('trademarks')[0] }}">
    <a href="#">
      <i class="fa fa-cube"></i> <span>{{ trans('admin.trademarks') }}</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu" style="{{ active_menu('trademarks')[1] }}">
      <li class=""><a href="{{ aurl('trademarks') }}"><i class="fa fa-cube"></i> {{ trans('admin.trademarks') }}</a></li>
      <li class=""><a href="{{ aurl('trademarks/create') }}"><i class="fa fa-plus"></i> {{ trans('admin.add') }}</a></li>
    </ul>
  </li>
  </p>

          <li class="nav-item has-treeview ">
            <a href="{{ aurl('logout') }}">
              <p>
              {{trans('admin.signout')}}
              </p>
            </a>
          </li>
          
      </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>