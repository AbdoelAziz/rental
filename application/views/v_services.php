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
                                <li class="active"><a href="<?php echo base_url().'services'?>">Layanan Kami</a></li>
                                <li><a href="<?php echo base_url().'cars'?>">List Mobil</a>
                                    <ul>
                                        <li><a href="<?php echo base_url().'cars'?>">List Mobil</a></li>
                                        <li><a href="index2.html">Galeri</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo base_url().'blog'?>">Artikel</a>
                                </li>
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
                        <h2>Our Services</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Service Tentang Ricko Rent Car Lubuk Linggau.</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Service Page Content Start ==-->
    <section id="service-page-wrapper" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Single Services Start -->
                    <div class="single-service-item">
                        <div class="service-item-thumb ser-thumb-bg-1" style="background-image: url(assets/img/car/papajero.jpg)"></div>
                        <div class="service-item-content">

                            <h3>RENTAL MOBIL</h3>
                            <p>Berbekal pengalaman lebih dari 10 Tahun di bidang Jasa trasportasi pariwisata Domestik dan Manca Negara di Lubuk Linggau, Kami Rental Mobil Di Lubuk Linggau dibawah naungan perusahaan Ricko Rental Car hadir dengan komitmen tinggi untuk memberikan layanan terbaik di bidang jasa sewa mobil murah dengan harga yang reasonable, berkualitas, dan bergaransi resmi di Lubuk Linggau.</p>
                        </div>
                    </div>
                    <!-- Single Services End -->

                    <!-- Single Services Start -->
                    <div class="single-service-item">
                        <div class="service-item-thumb ser-thumb-bg-2 d-lg-none" class="d-md-block ")></div>
                        <div class="service-item-content">
                            <h3>Jaminan dan Keuntungan</h3>
                            <p>Kami memberikan Jaminan dan Keuntungan kepada setiap pelanggan kami untuk setiap layanan mobil pilihan seperti armada mobil sewaan yang terawat, prima, bersih, dengan jaminan asuransi kecelakaan All Risks, harga sewa mobil yang murah rasional dan didukung oleh staff-staff pelayanan kami yang ramah dan selalu siap membantu pelanggan selama 24 Jam setiap hari. Semua ini untuk sebuah nilai lebih akan rasa aman dan kenyamanan berkendara di Lubuk Linggau kepada setiap pelanggan jasa persewaan mobil kami di Lubuk Linggau.</p>
                        </div>
                        <div class="service-item-thumb ser-thumb-bg-2 d-none d-lg-block d-md-none" style="background-image: url(assets/img/car/pajero2.jpg)"></div>
                    </div>
                    <!-- Single Services End -->

                    <!-- Single Services Start -->
                    <div class="single-service-item">
                        <div class="service-item-thumb ser-thumb-bg-3" style="background-image: url(assets/img/car/pajero3.jpg)"></div>
                        <div class="service-item-content">
                            <h3>Jenis Mobil</h3>
                            <p>Beraneka-ragam jenis armada mobil rental kami sediakan baik mobil sewa berbertransmisi manual maupun automatic. Mulai dari city car seperti Kami menawarkan untuk Anda seperti: Toyota Avanza, Daihatsu Xenia, Mitsubishi Pajero, Toyota Yaris, Toyota Innova Reborn. tersedia untuk dipilih dan disesuaikan dengan kebutuhan transport setiap pelanggan kami di Bengkulu</p>
                        </div>
                    </div>
                    <!-- Single Services End -->

                    <!-- Single Services Start -->
                    <div class="single-service-item">
                        <div class="service-item-thumb ser-thumb-bg-4 d-lg-none d-md-block"></div>
                        <div class="service-item-content">
                            <h3>Jenis Layanan</h3>
                            <p>Berbagai jenis layanan sewa mobil kami siapkan untuk dipilih sebagai berikut:
                            <ul>
                                <li>Layanan Sewa Mobil Setir Sendiri (selfdrive)</li>
                                <li>Layanan Sewa Mobil dengan Supir Non BBM (Tanpa Bahan Bakar)</li>
                                <li>Layanan Sewa Mobil dengan Supir dengan BBM</li>
                            </ul>
                            </p>
                        </div>
                        <div class="service-item-thumb ser-thumb-bg-2 d-none d-lg-block d-md-none" style="background-image: url(assets/img/car/alpard.jpeg)"></div>
                    </div>
                    <!-- Single Services End -->
                </div>
            </div>
        </div>
    </section>
    <!--== Service Page Content End ==-->
        <?php $this->load->view('v_testimonial');?>
    <!--== Testimonials Area Start ==-->
    

        <?php $this->load->view('v_footer');?>