

		<!--  Main Banner Start Here-->
		<div class="main-banner banner_up">
			<div id="rev_slider_34_1_wrapper" class="rev_slider_wrapper" data-alias="news-gallery34">
				<!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
				<div id="rev_slider_34_1" class="rev_slider" data-version="5.0.7">
					<ul>
						<?php
					 $no=129;
					 foreach ($gambar as $key) {

						// $id=$key->id_gambar;
				 ?>
						<!-- SLIDE  -->
						<li data-index="rs-<?php echo $no;?>" >
							<!-- MAIN IMAGE -->
							<img src="<?php echo base_url()?>assets/foto/<?php echo $key->image_file;?>"  alt=""  class="rev-slidebg" >
							<!-- LAYERS -->
							<!-- LAYER NR. 2 -->
							<div class="tp-caption Newspaper-Title tp-resizeme "
							id="slide-<?php echo $no;?>-layer-1"
							data-x="['left','left','left','left']" data-hoffset="['100','50','50','30']"
							data-y="['top','top','top','center']" data-voffset="['230','135','50','0']"
							data-fontsize="['50','50','50','30']"
							data-lineheight="['55','55','55','35']"
							data-width="['700','700','700','420']"
							data-height="none"
							data-whitespace="normal"
							data-transform_idle="o:1;"
							data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
							data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
							data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
							data-mask_out="x:0;y:0;s:inherit;e:inherit;"
							data-start="1000"
							data-splitin="none"
							data-splitout="none"
							data-responsive_offset="on" >
								<div class="banner-text">
									<!-- <span class="sub-text">we are here to help you</span> -->
									<h2><?php echo $key->image_name;?></h2>
									<p>
										<?php echo $key->image_desc;?>
									</p>
									<a class="btn-text" href="#"> Read More</a>
								</div>
							</div>
						</li>
						<?php
						  $no++;
					}
				?>
						<!-- SLIDE  -->
					</ul>
					<div class="tp-bannertimer tp-bottom"></div>
				</div>
			</div>
		</div>
		<!--  Main Banner End Here-->

		<!-- About -->
		<section class="padding ptb-xs-40">
			<div class="container">
				<div class="row pb-30">
					<div class="col-md-4 d-flex align-items-center">
						<div class="section_tit">
							<h2>Desa Laywo</h2>
							<span class="b-line l-left sm-l-center"></span>
						</div>
					</div>

					<div class="col-md-8 mt-xs-30 text-center text-md-left">
						<p>
							<!-- Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the 's standard dummy text. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum is simply dummy text. -->
						</p>
						<p>
							<!-- Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the 's standard dummy text. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum is simply dummy text. -->
						</p>
					</div>
				</div>


			</div>
		</section>
		<!-- About -->

		<!-- Service_Section -->
		<section class="padding ptb-xs-40 gray-bg service_sec">
			<div class="container">
				<div class="row text-center mb-xs-30">
					<div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
						<div class="section-title_home">
							<h2>Kegiatan Desa</h2>
							<span class="b-line"></span>
							<p>
								<!-- Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the 's standard dummy text. -->
							</p>
						</div>
					</div>
				</div>

				<div class="row">

					<div class="col-md-12">
						<div class="service_slider_home next_btn_style">
							<?php
						 $no=1;
						 foreach ($semua as $key1) {


					 	?>
							<div class="service_box">
								<figure>
									<img src="<?php echo base_url()?>assets/foto_kegiatan/<?php echo $key1->image_file;?>" alt="" height="250" />
								</figure>
								<h3><a href="#"><?php echo $key1->image_name;?></a></h3>
								<!--p>
									<?php echo $key1->image_desc;?>
								</p-->
							</div>
							<?php
						}
							?>

						</div>
					</div>

				</div>

			</div>
		</section>
		<!-- Service_Section_End -->



		<!-- Counter_Section -->
		<section class="padding ptb-xs-40 counter_sec">
			<div class="container">
				<div class="row text-center light-color mb-40 mb-xs-30">
					<div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
						<div class="section-title_home">
							<h2>Perangkat Desa</h2>
							<span class="b-line"></span>
							<p>
								<!-- Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the 's standard dummy text.
 -->							</p>
						</div>
					</div>
				</div>

			</div>
		</section>

		<section class="counter_box">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1">
						<div class="row bg_withe">
							<div class="col-lg-3 col-md-6">
								<div class="single-fact">

									<span class="counter" data-count="3">0</span>
									<p>
									 Kepala Dusun
									</p>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 mt-xs-30">
								<div class="single-fact">

									<span class="counter" data-count="3">0</span>
									<p>
										Kepala Urusan
									</p>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 mt-sm-30 mt-xs-30">
								<div class="single-fact">

									<span class="counter" data-count="3">0</span>
									<p>
										Kepala Seksi
									</p>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 mt-sm-30 mt-xs-30">
								<div class="single-fact">

									<span class="counter" data-count="3">0</span>
									<p>
										Kepala Keagamaan
									</p>
								</div>
							</div>


						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Counter_Section_End -->

		<!-- Work Section -->
		<section id="work" class="padding ptb-xs-40">
			<div class="container">
				<div class="row text-center mb-40 mb-xs-30">
					<div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
						<div class="section-title_home">
							<h2>Berita Terkini</h2>
							<span class="b-line"></span>
							<p>
								<!-- Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the 's standard dummy text. -->
							</p>
						</div>
					</div>
				</div>

				<div class="row container-grid nf-col-3">

				<?php
				 $no=1;
				 foreach ($terkini as $key2) {
				?>
					<div class="nf-item branding coffee spacing">
						<div class="item-box">
							<a> <img alt="1" src="<?php echo base_url();?>assets/berita/<?php echo $key2->news_image;?>" class="item-container"> </a>
							<div class="link-zoom">
								<a href="<?php echo site_url("detail-berita-desa?id=".$key2->news_id);?>" class="project_links same_style"> <i class="fa fa-link"> </i> </a>
								<a href="<?php echo base_url();?>assets/berita/<?php echo $key2->news_image;?>" class="fancylight popup-btn same_style" data-fancybox-group="light" > <i class="fa fa-search-plus"></i> </a>
								<div class="gallery-heading">
									<h4><a href="#"><?php echo $key2->news_title;?></a></h4>

								</div>
							</div>

						</div>
					</div>
					<?php
					 $no++;
				 }
					?>

				</div>

			</div>
		</section>
		<!-- End Work Section -->
