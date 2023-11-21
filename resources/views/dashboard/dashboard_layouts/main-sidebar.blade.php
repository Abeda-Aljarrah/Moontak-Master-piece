<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{url('/')}}" class="brand-link" style="margin-top: 8px" height="200px" width="">
    {{-- <img src="{{ asset('assets/img/logo.png') }}" href="{{url('/')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity:.8"  > --}}
    <span class="brand-text font-weight-bolder font-size-300px">Moontak</span>
    <div class="info">
      {{-- <h5 style=" color:#53A798; display: inline-block; margin-right: 10px;margin-top:20px;margin-left:10px">Welcome back,  {{ session('name') }}</h5> --}}
  </div>
  </a>


  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->


    <!-- Sidebar Menu -->
<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-item">
      <a href="{{url('/dashboard_welcome')}}" class="nav-link">
        <i class="fas fa-home nav-icon"></i>
        <p>Dashboard</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="{{url('dashboard/users')}}" class="nav-link">
        <i class="fas fa-users nav-icon"></i>
        <p>Users</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="{{url('dashboard/categories')}}" class="nav-link">
        <i class="fas fa-th nav-icon"></i>
        <p>Categories</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="{{url('dashboard/products')}}" class="nav-link">
        <i class="fas fa-shopping-cart nav-icon"></i>
        <p>Products</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="{{url('dashboard/orders')}}" class="nav-link">
        <i class="fas fa-clipboard-list nav-icon"></i>
        <p>Orders</p>
      </a>
    </li>

    {{-- <li class="nav-item">
      <a href="{{url('dashboard/partners')}}" class="nav-link">
        <i class="fas fa-handshake nav-icon"></i>
        <p>Partners</p>
      </a>
    </li> --}}

    <li class="nav-item">
      <a href="{{url('dashboard/plans')}}" class="nav-link">
        <i class="fas fa-list nav-icon"></i>
        <p>Plans</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="{{url('dashboard/periods')}}" class="nav-link">
        <i class="fas fa-calendar nav-icon"></i>
        <p>Periods</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="{{url('dashboard/coupons')}}" class="nav-link">
        <i class="fas fa-tag nav-icon"></i>
        <p>Coupons</p>
      </a>
    </li>

    {{-- <li class="nav-item">
      <a href="{{url('dashboard/orderdetails')}}" class="nav-link">
        <i class="fas fa-shopping-bag nav-icon"></i>
        <p>Order Details</p>
      </a>
    </li> --}}

    <li class="nav-item">
      <a href="{{url('dashboard/paymentdetails')}}" class="nav-link">
        <i class="fas fa-credit-card nav-icon"></i>
        <p>Payment Details</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="{{url('dashboard/subscriptions')}}" class="nav-link">
        <i class="fas fa-receipt nav-icon"></i>
        <p>Subscription</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="fas fa-envelope nav-icon"></i>
        <p>
          Mailbox
          <i class="fas fa-angle-down right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{url('send-email')}}" class="nav-link">
            <i class="far fa-envelope nav-icon"></i>
            <p>Send</p>
          </a>
        </li>
      </ul>
    </li>
  </ul>
  <div class="container">
    <a href="{{url('dashboard_logout')}}" class="btn btn-danger" style="margin-top: 15px;margin-left: 10px">Logout</a>
  </div>
</nav>
<!-- /.sidebar-menu -->

  </div>
  <!-- /.sidebar -->
</aside>
