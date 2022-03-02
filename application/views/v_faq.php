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
                                <li><a href="<?php echo base_url().'about'?>">Tentang kami</a></li>
                                <li><a href="<?php echo base_url().'services'?>">layanan kami</a></li>
                                <li><a>list mobil</a>
                                    <ul>
                                        <li><a href="<?php echo base_url().'cars'?>">List Mobil</a></li>
                                        <li><a href="index2.html">Galeri</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo base_url().'blog'?>">artikel</a>
                                </li>
                                <li class="active"><a href="<?php echo base_url().'faq'?>">FAQ</a>
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
                        <h2>FAQ's</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Pertanyaan yang sering ditanyakan</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== FAQ Area Start ==-->
    <section id="faq-page-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- FAQ Content Start -->
				<div class="col-lg-8">
					<div class="faq-details-content">
						<!-- Single FAQ Subject  Start -->
						<div class="single-faq-sub">
							<h3>FAQ</h3>
							<div class="single-faq-sub-content">
								<div id="accordion">
									<!-- Single FAQ Start -->
									<div class="card">
										<div class="card-header" id="headingOne">
											<h5 class="mb-0"><button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
												<span>Apa itu Ricko Rent Car Lubuk Linggau ?</span>
												<i class="fa fa-angle-down"></i>
												<i class="fa fa-angle-up"></i>
											</button></h5>
										</div>

										<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
											<div class="card-body">
												Ricko Rent Car Lubuk Linggau adalah sebuah perusahaan yang bergerak di bidang jasa Sewa Mobil yang berada di Lubuk Linggau.
											</div>
										</div>
									</div>
									<!-- Single FAQ End -->
									
									<!-- Single FAQ Start -->
									<div class="card">
										<div class="card-header" id="headingTwo">
											<h5 class="mb-0"><button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									  			<span>Sudah Berapa Lama Rental Ini Berdiri ?</span>
												<i class="fa fa-angle-down"></i>
												<i class="fa fa-angle-up"></i>
									  		</button></h5>
										</div>
										<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
											<div class="card-body">
												Perusahaan kami sudah berdiri selama 10 Tahun.
											</div>
										</div>
									</div>
									<!-- Single FAQ Start -->
									
									<!-- Single FAQ End -->
									<div class="card">
										<div class="card-header" id="headingThree">
											<h5 class="mb-0"><button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									  			<span>Apa sih yang utama dari Rental Kita ?</span>
												<i class="fa fa-angle-down"></i>
												<i class="fa fa-angle-up"></i>
											</button></h5>
										</div>
										<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
											<div class="card-body">
												Yang utama dari Perusahaan kami ini adalah jasa Rental Mobil, karena kami sudah sangat berpengalaman dan berbagai jenis penyewaan sudah kami jalan kan.
											</div>
										</div>
									</div>
									<!-- Single FAQ End -->

									<!-- Single FAQ Start -->
									<div class="card">
										<div class="card-header" id="heading4">
											<h5 class="mb-0"><button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
												<span>Jika Ada Panggilan Apakah Bisa ?</span>
												<i class="fa fa-angle-down"></i>
												<i class="fa fa-angle-up"></i>
											</button></h5>
										</div>

										<div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion">
											<div class="card-body">
												Untuk panggilan kami siap untuk Wilayah Bengkulu, antar kota dan lintas provinsi. 
											</div>
										</div>
									</div>
									<!-- Single FAQ End -->

									<!-- Single FAQ End -->
									<div class="card">
										<div class="card-header" id="headingFive">
											<h5 class="mb-0"><button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
									  			<span>Sering Ada Promo Gak Nih ?</span>
												<i class="fa fa-angle-down"></i>
												<i class="fa fa-angle-up"></i>
											</button></h5>
										</div>
										<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
											<div class="card-body">
												Tentu saja, kami sering memberikan Discount potongan harga bagi anda yang ingin menggunakan Jasa Sewa & Rental Mobil Bengkulu kami.
											</div>
										</div>
									</div>
									<!-- Single FAQ End -->
								</div>
							</div>
						</div>
						<!-- Single FAQ Subject End -->
					</div>
				</div>
                <!-- FAQ Content End -->

                <!-- Sidebar Area Start -->
                <div class="col-lg-4">
                    <div class="sidebar-content-wrap m-t-50">
                        <!-- Single Sidebar Start -->
                        <div class="single-sidebar">
                            <h3>Informasi lebih lanjut, Hubungi</h3>

                            <div class="sidebar-body">
                                <p><i class="fa fa-mobile"></i> +62 812-7846-355</p>
                                <p><i class="fa fa-clock-o"></i> Buka setiap hari 24 jam</p>
                            </div>
                        </div>
                        <!-- Single Sidebar End -->

                        <!-- Single Sidebar Start -->
                        <div class="single-sidebar">
                            <h3>Rental Tips</h3>

                            <div class="sidebar-body">
                                <ul class="recent-tips">
                                    <li class="single-recent-tips">
                                        <div class="recent-tip-thum">
                                            <a href="#"><img src="assets/img/we-do/service1-img.png" alt="JOSFT"></a>
                                        </div>
                                        <div class="recent-tip-body">
                                            <h4><a href="#">How to Enjoy Losses Angeles Car Rentals</a></h4>
                                            <span class="date">February 5, 2018</span>
                                        </div>
                                    </li>

                                    <li class="single-recent-tips">
                                        <div class="recent-tip-thum">
                                            <a href="#"><img src="assets/img/we-do/service3-img.png" alt="JOSFT"></a>
                                        </div>
                                        <div class="recent-tip-body">
                                            <h4><a href="#">How to Enjoy Losses Angeles Car Rentals</a></h4>
                                            <span class="date">February 5, 2018</span>
                                        </div>
                                    </li>

                                    <li class="single-recent-tips">
                                        <div class="recent-tip-thum">
                                            <a href="#"><img src="assets/img/we-do/service2-img.png" alt="JOSFT"></a>
                                        </div>
                                        <div class="recent-tip-body">
                                            <h4><a href="#">How to Enjoy Losses Angeles Car Rentals</a></h4>
                                            <span class="date">February 5, 2018</span>
                                        </div>
                                    </li>

                                    <li class="single-recent-tips">
                                        <div class="recent-tip-thum">
                                            <a href="#"><img src="assets/img/we-do/service3-img.png" alt="JOSFT"></a>
                                        </div>
                                        <div class="recent-tip-body">
                                            <h4><a href="#">How to Enjoy Losses Angeles Car Rentals</a></h4>
                                            <span class="date">February 5, 2018</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Single Sidebar End -->

                        <!-- Single Sidebar Start -->
                        <div class="single-sidebar">
                            <h3>Sosial Media Kami</h3>

                            <div class="sidebar-body">
                                <div class="social-icons text-center">
                                    <a href="https://www.facebook.com/rickorencarlubuklinggau" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.instagram.com/ricko_rentalmobil_lubuklinggau/" target="_blank"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Sidebar End -->
                    </div>
                </div>
                <!-- Sidebar Area End -->
            </div>
        </div>
    </section>
    <!--== FAQ Area End ==-->
        <?php $this->load->view('v_footer');?>