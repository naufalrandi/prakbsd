<aside id="sidebar-wrapper">
  <div class="sidebar-brand">
    <a href="">{{ env('APP_NAME') }}</a>
  </div>
  <div class="sidebar-brand sidebar-brand-sm">
    <a href="#">{{ strtoupper(substr(env('APP_NAME'), 0, 2)) }}</a>
  </div>
  <ul class="sidebar-menu">
    <li class="menu-header">Menu</li>
    <li class="{{ request()->is('/') ? 'active' : '' }}"><a class="nav-link" href="{{ url('/') }}"><i class="fas fa-columns"></i> <span>Dashboard</span></a></li>
    <li class="{{ request()->is('/customer') ? 'active' : '' }}"><a class="nav-link" href="{{ url('/customer') }}"><i class="fas fa-columns"></i> <span>Customer</span></a></li>
    <li class="{{ request()->is('/barang') ? 'active' : '' }}"><a class="nav-link" href="{{ url('/barang') }}"><i class="fas fa-columns"></i> <span>Barang</span></a></li>
    <li class="{{ request()->is('/transaksi') ? 'active' : '' }}"><a class="nav-link" href="{{ url('/transaksi') }}"><i class="fas fa-columns"></i> <span>Transaksi</span></a></li>
  </ul>
</aside>
