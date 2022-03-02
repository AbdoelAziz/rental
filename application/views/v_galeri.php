<?php $this->load->view('v_header');?>

        <!--== Header Bottom Start ==-->
        <div id="header-bottom">
            <div class="container">
                <div class="row">
                    <!--== Logo Start ==-->
                    <div class="col-lg-4">
                        <a href="home" class="logo">
                            <img src="assets/img/logo.png" alt="JSOFT">
                        </a>
                    </div>
                    <!--== Logo End ==-->

                    <!--== Main Menu Start ==-->
                    <div class="col-lg-8 d-none d-xl-block">
                        <nav class="mainmenu alignright">
                            <ul>
                                <li><a href="<?php echo base_url().'home'?>">Home</a>
                                </li>
                                <li><a href="<?php echo base_url().'about'?>">Tentang Kami</a></li>
                                <li><a href="<?php echo base_url().'services'?>">Layanan Kami</a></li>
                                <li class="active"><a href="#">Mobil</a>
                                    <ul>
                                        <li><a href="<?php echo base_url().'cars'?>">List Mobil</a></li>
                                        <li><a href="<?php echo base_url().'galeri'?>">Galeri Mobil</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo base_url().'blog'?>">Artikel</a>
                                <li><a href="<?php echo base_url().'faq'?>">FAQ</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!--== Main Menu End ==-->
                </div>
            </div>
        </div>
        <!--== Header Bottom End ==-->
    </header>
    <!--== Header Area End ==-->

    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Galeri Mobil</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Koleksi Mobil Nyaman dan Berkualitas Kami</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Gallery Page Content Start ==-->
    <section id="gallery-page-content" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="popular-cars-wrap">


                        <div class="row popular-car-gird">
                            <!-- Single Popular Car Start -->
                            <?php   
                            foreach ($data->result_array() as $row) : 
                                $judul_gallery=$row['judul_gallery'];
                                $post_image=$row['gambar_gallery'];
                            ?>
                            <div class="col-lg-4 col-md-6 con suv mpv">
                                <div class="single-popular-car">
                                    <div class="p-car-thumbnails">
                                        <a class="car-hover" href="<?php echo base_url().'assets/img/car/'.$post_image;?>">
                                          <img src="<?php echo base_url().'assets/img/car/'.$post_image;?>" alt="JSOFT">
                                       </a>
                                    </div>

                                    
                                </div>
                            </div>
                            <?php endforeach;?>
                            <!-- Single Popular Car End -->

                        </div>
                    </div>
                    <!-- Page Pagination Start -->

                    <!-- Page Pagination End -->
                </div>
            </div>
        </div>
    </section>
    <!--== Gallery Page Content End ==-->
        <?php $this->load->view('v_footer');?>