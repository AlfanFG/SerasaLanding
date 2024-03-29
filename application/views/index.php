<?php
$this->load->view('parts/header');
$this->load->view('parts/navigation');
?>

<div class="container-fluid bg">
    <div class="row">
        <div class="col-fluid slide">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo base_url('assets/images/1.jpeg') ?>" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo base_url('assets/images/2.jpeg') ?>" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                    </div>
                </div>
                <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button> -->
            </div>
        </div>


    </div>
    <div class="row">
        <span class="col-md-7 coffee">
            <div class="card mb-6" style="max-width: 1600px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="assets/images/CoffeeH1.jpeg" alt="">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body col-md-11" style="margin-left: 50px; margin-top:150px; font-family: 'Roboto', sans-serif; font-size: 1.3rem; text-align: justify;">

                            <p>KURASA Coffee & Meal adalah coffee shop yang mengutamakan kepuasan konsumen dalam hal rasa dan kenikmatan serta memberikan kenyamanan terhadap konsumen sehingga KURASA Coffee & Meal dapat digemari oleh para penikmat kopi dan diterima oleh semua kalangan.</p>
                        </div>
                    </div>
                </div>
            </div>




        </span>



    </div>
    <div class="row">
        <div class="col-lg-9 work">
            <img src="assets/images/work.jpeg" alt="">
        </div>
    </div>



</div>

<?php
$this->load->view('parts/footer');
?>