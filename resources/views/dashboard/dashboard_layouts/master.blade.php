<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


 @include('dashboard.dashboard_layouts.head')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  {{-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src=" {{ asset('assets/img/logo.png') }}" alt="AdminLTELogo" height="60" width="60">

  </div> --}}

  @include('dashboard.dashboard_layouts.main-headerbar')

  @include('dashboard.dashboard_layouts.main-sidebar')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">

            <h1 class="m-0" style="font-size: 24px; color: #333; display: inline-block;">Dashboard</h1>
        </div>


          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">@yield('title_page1')</a></li>
              <li class="breadcrumb-item active">@yield('title_page2')</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    @yield('content')
  </div>
  <!-- /.content-wrapper -->
  @include('dashboard.dashboard_layouts.footer')
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('dashboard.dashboard_layouts.footer-scripts')
</body>
</html>
