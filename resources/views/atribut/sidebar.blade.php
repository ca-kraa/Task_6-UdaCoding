<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="" class="brand-link">
      <img src="{{ asset('assets/AdminLTE') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Dashboard Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="https://64.media.tumblr.com/d6281926c7a3929d7d43388e92d0a2d1/3f31a6b37ae6f5b5-11/s1280x1920/ccade35c0cd40628acaca91ba489dc6120714992.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a class="d-block"> {{ Auth::user()->name }}
            <p>{{ Auth::user()->email }}</p>
          </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <!-- Item "Barang" without submenu -->
          <li class="nav-item">
            <a href="/barang" class="nav-link">
              <i class="ml-1 fa-solid fa-boxes-packing"></i>
              <p class="ml-2">Barang</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="/transaksi" class="nav-link">
              <i class="nav-icon fas fa-wallet"></i>
              <p>
                Transaksi
              </p>
            </a>
            <li class="nav-item">
              <a href="/arsip" class="nav-link">
                  <i class="nav-icon fas fa-archive"></i>
                  <p>
                      Arsip
                  </p>
              </a>
          </li>
          <!-- Logout Button -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>
