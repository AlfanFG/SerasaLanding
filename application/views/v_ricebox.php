<?php
$this->load->view('parts/header');
$this->load->view('parts/navigation');
?>


<div class="container-fluid bg">
    <div class="row">
        <div class="col align-center">
            <div class="container mt-5">
                <h1 class="text-center title">Rice Box</h1>
            </div>
            <div class="container mt-4 align-center">
                <div class="row text-center">
                    <div class="col-sm-4 mt-4">
                        <div class="card" style="width: 15rem;">
                            <img src="<?php echo base_url('assets/images/kategori_menu/beefricebox.jpg'); ?>" class="card-img-top" alt="..." height="150px">
                            <div class="card-body">
                                <h4 class="card-title">US Beef Rice Box</h4>
                                <h5 class="card-title"> 28K </h5>
                                <p class="card-text">Rice Box<br>Beef Rice Box dengan rasa beef khas dari Kurasa Coffe and Meal</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-4">

                        <div class="card" style="width: 15rem;">
                            <a class="link" href="/">
                                <img src="<?php echo base_url('assets/images/kategori_menu/chickenkatsu.jpg'); ?>" class="card-img-top" alt="..." height="150px">
                                <div class="card-body">
                                    <h4 class="card-title">Chicken Katsu Rice Box</h4>
                                    <h5 class="card-title"> 24K </h5>
                                    <p class="card-text">Rice Box<br>Chicken Katsu dengan rasa katsu yang khas dari Kurasa Coffe and Meal</p>
                                </div>
                            </a>
                        </div>

                    </div>
                    
                </div>

            </div>
        </div>
    </div>

    <div class="row space">

    </div>
</div>

<script src="<?php echo base_url('assets/bootstrap/jquery/jquery.min.js'); ?>"> </script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"> </script>



<?php
$this->load->view('parts/footer');
?>