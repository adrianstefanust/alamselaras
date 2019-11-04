
        <!-- Breacrumb Area -->
        <div class="breadcrumb-area" data-black-overlay="7" id="bg-product">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                        <div class="cr-breadcrumb text-center">
                            <h1>License</h1>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Breacrumb Area -->

        <!-- Page Content -->
        <main class="page-content">

          

            <!-- Services Area -->
            <section class="services-area section-padding-lg bg-white">
                <div class="container">
                <div class="row">
                        <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-12 offset-0">
                            <div class="section-title text-center">
                                <!-- <h6>Believe In Work</h6> -->
                                <h2>
                                Kami adalah pemegang lisensi untuk karakter disney untuk tissue produk di Indonesia.                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-12 offset-0">
                            <div class="section-title text-center">
                                <!-- <h6>Believe In Work</h6> -->
                               
                                
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center row justify-content-center service-slider-active cr-slider-dots-1">

                        <!-- Signle Service -->
                        <?php if (isset($disney)): ?>
                            
                         <?php foreach ($disney as $key): ?>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="service service-style-5">
                                    <div class="service-image">
                                        <img src="<?php echo base_url();?>assets/images/<?php echo $key['page_image_path']; ?>" alt="Service Thumb" style="height:300px">
                                    </div>
                                    <div class="service-content">
                                    
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                        <?php endif ?>
                        <!--// Signle Service -->

                       

                    </div>
                </div>
            </section>
            <!--// Services Area -->

  <!-- Services Area -->            <!--// Services Area -->
         
     

            

        </main>
        <!--// Page Content -->
