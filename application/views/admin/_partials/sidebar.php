<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Overview</span>
        </a>
    </li>
    <li class="nav-item <?php echo $this->uri->segment(2) == 'products' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/products') ?>">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Produk</span>
        </a>
    </li>
    <li class="nav-item <?php echo $this->uri->segment(2) == 'services' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/services') ?>">
            <i class="fas fa-fw fa-car"></i>
            <span>Jasa</span>
        </a>
    </li>
    <li class="nav-item <?php echo $this->uri->segment(2) == 'recordservices' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/recordservices') ?>">
            <i class="fas fa-fw fa-book-open"></i>
            <span>Record Jasa</span>
        </a>
    </li>
    <li class="nav-item <?php echo $this->uri->segment(2) == 'absents' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/absents') ?>">
            <i class="fas fa-fw fa-user"></i>
            <span>Absensi</span>
        </a>
    </li>

    <!--
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'products' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Produk</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin/products') ?>">Lihat semua produk</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/products/add') ?>">Tambah Produk</a>
        </div>
    </li>
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'services' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-car"></i>
            <span>Jasa Layanan</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin/services') ?>">Lihat semua jasa</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/services/add') ?>">Tambah Jasa Layanan</a>
        </div>
    </li>
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'recordservices' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-book-open"></i>
            <span>Record Jasa</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin/recordservices') ?>">Lihat record</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/recordservices/add') ?>">Tambah record</a>
        </div>
    </li>
    -->
</ul>