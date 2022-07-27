		<!-- 
			=============================================
				Theme Hero Banner
			============================================== 
			-->
		<div class="hero-banner-six">
		    <!-- <div class="social-elemnet">
		        <ul class="style-none d-flex align-items-center">
		            <li><a href="#" class="tran3s text-white">Fb.</a></li>
		            <li><a href="#" class="tran3s text-white">Tw.</a></li>
		            <li><a href="#" class="tran3s text-white">Inst.</a></li>
		        </ul>
		    </div> -->
		    <div class="scroll-bar"><span>Scroll</span></div>
		    <div class="shop-hero-slider-one ">
		        <?php while (have_rows('banner_repeater')):
                the_row()
                ?>

		        <div class="item bg-cover " style="background-image: url('<?php the_sub_field('image_url')?>');">
		            <div class="container">
		                <div class="row align-items-end">
		                    <div class="col-xl-8 col-md-6">
		                        <div class="product-text text-white">

		                            <h2 class="font-recoleta display-3 lh-base text-white"><?php the_sub_field('title');?>
		                            </h2>
		                            <p class="text-lg mb-50 lg-mb-30"><?php the_sub_field('sub_title');?>
		                            </p>
		                            <a href="<?php the_sub_field('button_url');?>" class="theme-btn-seven ripple-btn">SHOW
		                                NOW</a>
		                        </div> <!-- /.product-text -->
		                    </div>
		                </div>
		            </div>
		            <div class="section-no"><?php the_sub_field('section_number')?></div>
		        </div>
		        <?php endwhile;?>

		    </div> <!-- /.hero-banner-six -->