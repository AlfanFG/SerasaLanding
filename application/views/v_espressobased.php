<?php
$this->load->view('parts/header');
$this->load->view('parts/navigation');
?>



<div class="container-fluid bg clearfix">
    <div class="row">
        <div class="col">
            <div class="container mt-5">
                <h1 class="text-center title">Espresso Based</h1>
            </div>
            <div class="container-lg align-center">
                <div class="row text-center">
                    <div class="col-sm-4 mt-5">
                        <div class="card" style="width: 15rem;">
                            <img src="<?php echo base_url('assets/images/menu_kategori/americano.jpeg'); ?>" class="card-img-top" alt="..." height="150px">
                            <div class="card-body">
                                <h4 class="card-title">Americano</h4>
                                <h5 class="card-title"> 17K </h5>
                                <p class="card-text">Ice/hot americano</p>
                            </div>
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