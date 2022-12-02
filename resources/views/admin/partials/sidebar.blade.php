



<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('admin.views') ? 'active' : '' }}" href="/admin/views">
            <i class="uil uil-file-alt"></i>
            Kelola Ekskul
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('admin.user') ? 'active' : '' }}" href="/admin/user">
            <i class="uil uil-user"></i>
            Kelola User
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('admin.pendaftar') ? 'active' : '' }}" href="/admin/pendaftar">
            <i class="uil uil-user"></i>
            Kelola Pendaftar 
          </a>
        </li>
      </ul>
    </div>
  </nav> 