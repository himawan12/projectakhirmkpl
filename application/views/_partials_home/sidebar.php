<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('user') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Overview</span>
        </a>
    </li>
    <li class="nav-item <?php echo $this->uri->segment(2) == 'products' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('user/products') ?>" role="button">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Produk</span>
        </a>
    </li>
    <li class="nav-item <?php echo $this->uri->segment(2) == 'services' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('user/services') ?>" role="button">
            <i class="fas fa-fw fa-car"></i>
            <span>Jasa Layanan</span>
        </a>
    </li>
</ul>