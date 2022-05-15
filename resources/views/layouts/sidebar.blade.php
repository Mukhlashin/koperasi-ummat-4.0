<div class="col-md-2 col-6 bg-custom-1 p-0" id="navbarToggleExternalContent">
        <ul class="nav flex-column" style="margin-top: 50px;">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard.index') }}">
              <div class="row">
                <div class="col-md-3 nav-icon">
                  <i class="fa-solid fa-house" ></i>
                </div>
                <div class="col-md-9 nav-text">
                  <p>Dashboard</p>
                </div>
              </div>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="#">Manajemen Kategori Produk</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="{{ route('product.index') }}">
              <div class="row">
                <div class="col-md-3 nav-icon">
                  <i class="fa-solid fa-cubes"></i>
                </div>
                <div class="col-md-9 nav-text">
                  <p>Manajemen Stok</p>
                </div>
              </div>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('journal.index') }}">
              <div class="row">
                <div class="col-md-3 nav-icon">
                  <i class="fa-solid fa-clipboard"></i>
                </div>
                <div class="col-md-9 nav-text">
                  <p>Jurnal</p>
                </div>
              </div>
            </a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="Pengaturan-profile.html">
              <div class="row">
                <div class="col-md-3 nav-icon">
                  <i class="fa-solid fa-user-large"></i>
                </div>
                <div class="col-md-9 nav-text">
                  <p>Pengaturan profile</p>
                </div>
              </div>
            </a>
          </li>
          </ul>
      </div>
      <div class="col-md-10 p-0" id ="uiNavbar">
        <div class="main-toolbar bg-custom-2 ">
          <i class="bi bi-justify fs-1 text-white" id="demo" onclick="closeNav()"></i>
        </div>