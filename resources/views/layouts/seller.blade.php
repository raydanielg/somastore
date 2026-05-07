<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name', 'Somastore') }} | Seller Panel</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
  
  <style>
    :root {
      --primary-color: #12d1a5;
      --secondary-color: #0fb994;
    }
    body {
        font-size: 0.85rem;
    }
    .main-sidebar, .main-header, .content-wrapper, .main-footer {
        font-size: 0.85rem;
    }
    .sidebar-dark-primary .nav-sidebar > .nav-item > .nav-link.active,
    .sidebar-light-primary .nav-sidebar > .nav-item > .nav-link.active {
      background-color: var(--primary-color) !important;
    }
    .btn-primary {
      background-color: var(--primary-color) !important;
      border-color: var(--primary-color) !important;
      font-size: 0.8rem;
    }
    .btn-primary:hover {
      background-color: var(--secondary-color) !important;
      border-color: var(--secondary-color) !important;
    }
    .brand-link {
        background-color: #ffffff !important;
        color: #333 !important;
        padding: 0.8rem 0.5rem !important;
        border-bottom: 1px solid #eee !important;
        display: flex;
        align-items: center;
        gap: 10px;
    }
    .brand-link .brand-image {
        margin-left: 0.5rem;
        max-height: 33px;
        width: auto;
    }
    .brand-link .brand-text {
        font-size: 1.1rem !important;
        color: #111 !important;
        letter-spacing: 0.5px;
    }
    .user-panel {
        padding: 1rem 0.5rem !important;
        margin-bottom: 1rem !important;
        border-bottom: 1px solid rgba(255,255,255,0.1) !important;
    }
    .user-panel .image {
        padding-left: 0.8rem !important;
    }
    .user-panel .info a {
        font-weight: 600;
        color: #c2c7d0;
    }
    .user-panel .info a:hover {
        color: #fff;
    }
    .nav-sidebar .nav-link {
        padding: 0.4rem 0.8rem !important;
    }
    .nav-sidebar .nav-icon {
        font-size: 0.9rem !important;
    }
    .content-header h1 {
        font-size: 1.25rem !important;
    }
    .small-box h3 {
        font-size: 1.5rem !important;
    }
    .small-box p {
        font-size: 0.8rem !important;
    }
    .card-title {
        font-size: 0.95rem !important;
    }
    .table th, .table td {
        padding: 0.5rem !important;
        font-size: 0.8rem !important;
    }
    .badge {
        font-size: 0.7rem !important;
    }
    .products-list .product-info {
        margin-left: 50px !important;
    }
    .products-list .product-title {
        font-size: 0.85rem !important;
    }
    .products-list .product-description {
        font-size: 0.75rem !important;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">View Store</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&color=7F9CF5&background=EBF4FF" class="user-image img-circle shadow" alt="User Image">
          <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header bg-primary">
            <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&color=7F9CF5&background=EBF4FF" class="img-circle shadow" alt="User Image">
            <p>
              {{ Auth::user()->name }}
              <small>Member since {{ Auth::user()->created_at->format('M. Y') }}</small>
            </p>
          </li>
          <!-- Menu Footer-->
          <li class="user-footer">
            <a href="#" class="btn btn-default btn-flat">Profile</a>
            <a href="#" class="btn btn-default btn-flat float-right" 
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign out</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('seller.dashboard') }}" class="brand-link">
      <span class="brand-text font-weight-bold">SOMASTORE</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&color=7F9CF5&background=EBF4FF" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{ route('seller.dashboard') }}" class="nav-link {{ Route::is('seller.dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('seller.subscription.index') }}" class="nav-link {{ Route::is('seller.subscription.index') ? 'active' : '' }}">
              <i class="nav-icon fas fa-id-card"></i>
              <p>My Subscription</p>
            </a>
          </li>
          <li class="nav-header">MY CONTENT</li>
          <li class="nav-item">
            <a href="{{ route('seller.materials.upload') }}" class="nav-link {{ Route::is('seller.materials.upload') ? 'active' : '' }}">
              <i class="nav-icon fas fa-file-upload"></i>
              <p>Upload Material</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('seller.materials.index') }}" class="nav-link {{ Route::is('seller.materials.index') ? 'active' : '' }}">
              <i class="nav-icon fas fa-book"></i>
              <p>My Materials</p>
            </a>
          </li>
          <li class="nav-header">SALES & EARNINGS</li>
          <li class="nav-item">
            <a href="{{ route('seller.sales.index') }}" class="nav-link {{ Route::is('seller.sales.index') ? 'active' : '' }}">
              <i class="nav-icon fas fa-chart-line"></i>
              <p>Sales Report</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('seller.sales.withdrawals') }}" class="nav-link {{ Route::is('seller.sales.withdrawals') ? 'active' : '' }}">
              <i class="nav-icon fas fa-wallet"></i>
              <p>Withdrawals</p>
            </a>
          </li>
          <li class="nav-header">SETTINGS</li>
          <li class="nav-item">
            <a href="{{ route('seller.settings.profile') }}" class="nav-link {{ Route::is('seller.settings.profile') ? 'active' : '' }}">
              <i class="nav-icon fas fa-user-cog"></i>
              <p>Profile Settings</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <strong>Copyright &copy; 2026 <a href="/">Somastore</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@stack('scripts')

</body>
</html>
