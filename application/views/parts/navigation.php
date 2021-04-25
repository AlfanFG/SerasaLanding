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
                    <a class="nav-link active" aria-current="page" href="<?php echo base_url('') ?>">Home</a>
                    <a class="nav-link" href="#">Profile</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Category Menu
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="<?php echo base_url('c_menu_kategori/CoffeeFlavour') ?>">Coffee Flavour</a></li>
                            <li><a class="dropdown-item" href="#">Dimsum Goreng</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('c_menu_kategori/DimsumKukus') ?>">Dimsum Kukus</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('c_menu_kategori/EspressoBased') ?>">Espresso Based</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('c_menu_kategori/ManualBrew') ?>">Manual Brew</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('c_menu_kategori/meal') ?>">Meal</a></li>
                            <li><a class="dropdown-item" href="#">Non Coffee</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('c_menu_kategori/MilkBased') ?>">Milk Based</a></li>
                            <li><a class="dropdown-item" href="#">Rice Box</a></li>
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