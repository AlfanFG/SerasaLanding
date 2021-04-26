<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo base_url('') ?>">
                <img src="<?= base_url('assets/images/logo.png') ?>">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto header__links">
                    <a aria-current="page" href="<?php echo base_url('') ?>" <?php if ($this->uri->segment(1) == '') {
                                                                                    echo 'class="nav-link active"';
                                                                                } else {
                                                                                    echo 'class="nav-link"';
                                                                                } ?>>Home</a>
                    <a class="nav-link" href="#">Profile</a>
                    <li class="nav-item dropdown">
                        <a href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" <?php if ($this->uri->segment(1) == 'c_menu_kategori') {
                                                                                                                                    echo 'class="nav-link dropdown-toggle active"';
                                                                                                                                } else {
                                                                                                                                    echo 'class="nav-link dropdown-toggle"';
                                                                                                                                } ?>>
                            Category Menu
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a href="<?php echo base_url('c_menu_kategori/CoffeeFlavour') ?>" <?php if ($this->uri->segment(2) == "CoffeeFlavour") {
                                                                                                        echo 'class="dropdown-item active"';
                                                                                                    } else {
                                                                                                        echo 'class="dropdown-item"';
                                                                                                    } ?>>Coffee Flavour</a></li>
                            <li><a href="<?php echo base_url('c_menu_kategori/DimsumGoreng') ?>" <?php if ($this->uri->segment(2) == "DimsumGoreng") {
                                                                                                        echo 'class="dropdown-item active"';
                                                                                                    } else {
                                                                                                        echo 'class="dropdown-item"';
                                                                                                    } ?>>Dimsum Goreng</a></li>
                            <li><a href="<?php echo base_url('c_menu_kategori/DimsumKukus') ?>" <?php if ($this->uri->segment(2) == "DimsumKukus") {
                                                                                                    echo 'class="dropdown-item active"';
                                                                                                } else {
                                                                                                    echo 'class="dropdown-item"';
                                                                                                } ?>>Dimsum Kukus</a></li>
                            <li><a href="<?php echo base_url('c_menu_kategori/EspressoBased') ?>" <?php if ($this->uri->segment(2) == "EspressoBased") {
                                                                                                        echo 'class="dropdown-item active"';
                                                                                                    } else {
                                                                                                        echo 'class="dropdown-item"';
                                                                                                    } ?>>Espresso Based</a></li>
                            <li><a href="<?php echo base_url('c_menu_kategori/ManualBrew') ?>" <?php if ($this->uri->segment(2) == "ManualBrew") {
                                                                                                    echo 'class="dropdown-item active"';
                                                                                                } else {
                                                                                                    echo 'class="dropdown-item"';
                                                                                                } ?>>Manual Brew</a></li>
                            <li><a href="<?php echo base_url('c_menu_kategori/meal') ?>" <?php if ($this->uri->segment(2) == "meal") {
                                                                                                echo 'class="dropdown-item active"';
                                                                                            } else {
                                                                                                echo 'class="dropdown-item"';
                                                                                            } ?>>Meal</a></li>
                            <li><a href="<?php echo base_url('c_menu_kategori/NonCoffee') ?>" <?php if ($this->uri->segment(2) == "NonCoffee") {
                                                                                                    echo 'class="dropdown-item active"';
                                                                                                } else {
                                                                                                    echo 'class="dropdown-item"';
                                                                                                } ?>>Non Coffee</a></li>
                            <li><a href="<?php echo base_url('c_menu_kategori/MilkBased') ?>" <?php if ($this->uri->segment(2) == "MilkBased") {
                                                                                                    echo 'class="dropdown-item active"';
                                                                                                } else {
                                                                                                    echo 'class="dropdown-item"';
                                                                                                } ?>>Milk Based</a></li>
                            <li><a href="<?php echo base_url('c_menu_kategori/RiceBox') ?>" <?php if ($this->uri->segment(2) == "RiceBox") {
                                                                                                echo 'class="dropdown-item active"';
                                                                                            } else {
                                                                                                echo 'class="dropdown-item"';
                                                                                            } ?>>Rice Box</a></li>
                        </ul>
                    </li>
                    <a class="nav-link" href="#">Order</a>
                    <a class="nav-link" href="#">Contacts</a>
                </div>
            </div>

            <div class="nav-icon" href="">
                <a class="nav-icon-item" href="https://www.instagram.com/kurasa.coffee/">
                    <img src="<?= base_url('assets/images/instagram.png') ?>">
                </a>

                <a class="nav-icon-item" href="#">
                    <img src="<?= base_url('assets/images/twitter.png') ?>">
                </a>

                <a class="nav-icon-item" href="#">
                    <img src="<?= base_url('assets/images/facebook.png') ?>">
                </a>
            </div>

    </nav>