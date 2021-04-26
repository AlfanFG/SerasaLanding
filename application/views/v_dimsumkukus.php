<?php
$this->load->view('parts/header');
$this->load->view('parts/navigation');
?>

<div class="container-fluid bg">
    <div class="row">
        <div class="col-fluid slide">

            <div class="container mt-5">
                <h1 class="text-center title">Dimsum Kukus</h1>
            </div>
            <div class="container mt-4 align-center">
                <div class="row ml-4">
                    <div class="col-sm-4 mt-5">
                        <div class="card" style="width: 15rem;">
                            <img src="<?php echo base_url(); ?>assets/images/hakau.jpg">
                            <div class="card-body">
                                <h5 class="card-title">Dimsum Hakau</h5>
                                <p class="card-title">16k</p>
                                <p class="card-text">Hakau adalah dimsum dengan kulitnya yang transparan dan bentuknya yang mungil serta diisi dengan udang rasanya enak banget.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-5">
                        <div class="card" style="width: 15rem;">
                            <img src="<?php echo base_url(); ?>assets/images/kulit.jpg">
                            <div class="card-body">
                                <h5 class="card-title">Dimsum Kulit Tahu Ayam</h5>
                                <p class="card-title">15k</p>
                                <p class="card-text">Dimsum Kulit Tahu Ayam adalah suatu dimsum yang dibalut oleh kulit tahu yang berisi racikan ayam yang dihalurskan dengan bumbu khas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-5">
                        <div class="card" style="width: 15rem;">
                            <img src="<?php echo base_url(); ?>assets/images/moza.jfif">
                            <div class="card-body">
                                <h5 class="card-title">Dimsum Mozarella</h5>
                                <p class="card-title">16k</p>
                                <p class="card-text">Dimsum mozarella adalah isian dimsum ayam yang diberi topping keju mozarella yang melted sekali.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-5">
                        <div class="card" style="width: 15rem;">
                            <img src="<?php echo base_url(); ?>assets/images/ayam.jpg">
                            <div class="card-body">
                                <h5 class="card-title">Dimsum Ayam</h5>
                                <p class="card-title">15k</p>
                                <p class="card-text">Dimsum Ayam suatu racikan dari ayam yang dihaluskan secara kasar dengan bumbu dimsum dan bisa dinikmati denga chilli oil.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-5">
                        <div class="card" style="width: 15rem;">
                            <img src="<?php echo base_url(); ?>assets/images/dumpling.jpg">
                            <div class="card-body">
                                <h5 class="card-title">Dumpling Ayam Udang</h5>
                                <p class="card-title">14k</p>
                                <p class="card-text">Dumpling jenis dimsum yang berisi ayam dan udang tentunya beda dengan dimsum ayam biasa, rasanya enak.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-5">
                        <div class="card" style="width: 15rem;">
                            <img src="<?php echo base_url(); ?>assets/images/nori.jpg">
                            <div class="card-body">
                                <h5 class="card-title">Dimsum Nori</h5>
                                <p class="card-title">15k</p>
                                <p class="card-text">Dimsum nori adalah paduan dari dimsum ayam yang diberi topping nori yang gurih.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row space">

                </div>

            </div>
        </div>
    </div>




</div>
<script src="<?php echo base_url('assets/bootstrap/jquery/jquery.min.js'); ?>"> </script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"> </script>

</body>

</html>



<?php
$this->load->view('parts/footer');
?>