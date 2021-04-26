<?php
$this->load->view('parts/header');
$this->load->view('parts/navigation');
?>

<div class="container-fluid bg">
    <div class="row">
        <div class="col-fluid slide">

            <div class="container mt-5">
                <h1 class="text-center title">Meal</h1>
            </div>
            <div class="container mt-4 align-center">
                <div class="row ml-4">
                    <div class="col-sm-4 mt-5">
                        <div class="card" style="width: 15rem;">
                            <img src="<?php echo base_url(); ?>assets/images/springroll.jpg">
                            <div class="card-body">
                                <h5 class="card-title">Springroll</h5>
                                <p class="card-title">18k</p>
                                <p class="card-text">Spring roll berisi sayuran segar dan kulitnya bening transparan dengan tekstur yang lebih kenyal. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-5">
                        <div class="card" style="width: 15rem;">
                            <img src="<?php echo base_url(); ?>assets/images/snack.jfif">
                            <div class="card-body">
                                <h5 class="card-title">SnackBucket</h5>
                                <p class="card-title">28k</p>
                                <p class="card-text">Snackbucket disini berbagai macam makanan seperti kentang sosis cireng makanan cemilan yang dijadikan satu.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-5">
                        <div class="card" style="width: 15rem;">
                            <img src="<?php echo base_url(); ?>assets/images/tahu.jpg">
                            <div class="card-body">
                                <h5 class="card-title">Tahu Lada Garam</h5>
                                <p class="card-title">18k</p>
                                <p class="card-text">Tahu Lada Garam makanan yang enak buat ngemil dimana tahu dibalut dan dimasak dengan bumbu lada garam yang lezat.</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-4 mt-5">
                        <div class="card" style="width: 15rem;">
                            <img src="<?php echo base_url(); ?>assets/images/kentang.jpg">
                            <div class="card-body">
                                <h5 class="card-title">French Fries </h5>
                                <p class="card-title">16k</p>
                                <p class="card-text">Fench Fries yang best seller dengan kelezatan yang maksimal.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-5">
                        <div class="card" style="width: 15rem;">
                            <img src="<?php echo base_url(); ?>assets/images/campur.jpg">
                            <div class="card-body">
                                <h5 class="card-title">French Fries & Sausage</h5>
                                <p class="card-title">23k</p>
                                <p class="card-text">Kentang Goreng Beserta Sosis Goreng dengan topping sauce mayonaise yang lezat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-5">
                        <div class="card" style="width: 15rem;">
                            <img src="<?php echo base_url(); ?>assets/images/cireng.jpg">
                            <div class="card-body">
                                <h5 class="card-title">Cireng</h5>
                                <p class="card-title">18k</p>
                                <p class="card-text">Cireng adalah makanan yang sangat enak untuk ngemil yang ditemanai dengan sauce bumbu rujak yang unik dan lezat.</p>
                            </div>
                        </div>

                    </div>
                    <div class="row space">

                    </div>

                </div>

                <script src="<?php echo base_url('assets/bootstrap/jquery/jquery.min.js'); ?>"> </script>
                <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"> </script>

                </body>

                </html>

            </div>
        </div>




    </div>

    <?php
    $this->load->view('parts/footer');
    ?>