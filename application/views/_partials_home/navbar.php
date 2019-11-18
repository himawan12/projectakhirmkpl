<nav class="navbar navbar-expand navbar-dark bg-success static-top">

	<a href="<?php echo site_url('welcome') ?>"><img src="<?php echo base_url('img/logo.png') ?>"></a>
    <a class="navbar-brand mr-1" href="<?php echo site_url('welcome') ?>"><?php echo SITE_NAME ?></a>

    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0"></form>
    
    <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="<?php echo site_url('welcome/about') ?>" role="button">Tentang Kami</a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="<?php echo site_url('login') ?>" role="button">Login</a>
        </li>
    </ul>

</nav>