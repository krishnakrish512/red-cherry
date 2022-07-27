<!-- 
			=============================================
				Inside Page Banner
			============================================== 
			-->
<div class="inside-hero-one hero-spacing">
    <div class="container">
        <h2 class="page-title font-recoleta"><?php the_sub_field('title')?></h2>
        <p><?php the_sub_field('sub_title')?></p>
    </div>
</div> <!-- /.inside-hero-one -->



<!-- 
			=============================================
				Contact Section Four
			============================================== 
			-->
<div class="contact-section-four mt-120 lg-mt-100">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="address-block-one text-center mb-40">
                    <div class="icon d-flex align-items-center justify-content-center m-auto"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon_17.svg" alt="">
                    </div>
                    <h5 class="title">Our Address</h5>
                    <p><?php the_sub_field('contact_address')?></p>
                </div> <!-- /.address-block-one -->
            </div>
            <div class="col-md-4">
                <div class="address-block-one text-center mb-40">
                    <div class="icon d-flex align-items-center justify-content-center m-auto"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon_18.svg" alt="">
                    </div>
                    <h5 class="title">Contact Info</h5>
                    <p>Open a chat or give us call at <br><a href="tel:<?php the_sub_field('contact_number')?>"
                            class="call"><?php the_sub_field('contact_number')?></a></p>
                </div> <!-- /.address-block-one -->
            </div>
            <div class="col-md-4">
                <div class="address-block-one text-center mb-40">
                    <div class="icon d-flex align-items-center justify-content-center m-auto"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/icon_19.svg" alt="">
                    </div>
                    <h5 class="title">Live Support</h5>
                    <p>live chat service <br><a href="<?php the_sub_field('live_chat')?>"
                            class="webaddress"><?php the_sub_field('live_chat')?></a></p>
                </div> <!-- /.address-block-one -->
            </div>
        </div>
    </div>


    <div class="map-area-one mt-150 mb-90 lg-mt-100 lg-mb-50">
        <div class="box-layout">
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe class="gmap_iframe"
                        src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=dhaka collage&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                </div>
            </div>
        </div>
    </div>
</div> <!-- /.contact-section-four -->