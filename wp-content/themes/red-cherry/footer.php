<!--
			=====================================================
				Vcamp Fancy Banner Eleven
			=====================================================
			-->
<div class="fancy-banner-eleven dark-style " style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/testimonial-bg-2.jpeg');">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7" data-aos="fade-right">
                <div class="title-style-thirteen white-vr">
                    <div class="upper-title">Subscirbe Now</div>
                    <h2 class="title fw-bold">Subscribe to Our newsletter.</h2>
                </div> <!-- /.title-style-thirteen -->
            </div>
            <div class="col-lg-5" data-aos="fade-left">
                <div class="form-wrapper">
                    <form action="#" class="position-relative">
                        <input type="email" placeholder="Email address">
                        <button><i class="bi bi-envelope"></i></button>
                    </form>
                    <div class="info">Already a member? <a href="sign-in.html">Sign in.</a></div>
                </div> <!-- /.form-wrapper -->
            </div>
        </div>
    </div>
</div> <!-- /.fancy-banner-eleven -->



<!--
			=====================================================
				Footer
			=====================================================
			-->

<?php
$Footer = get_field('footer', 'option');?>
<footer class="vcamp-footer-seven">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-3 mb-40">
                <h2 class="intro font-zen"><?= $Footer['footer_heading'] ?></h2>
                <ul class="d-flex social-icon style-none">
                    <li><a href="<?= $Footer['facebook_url'] ?>"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="<?= $Footer['twitter_url'] ?>"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="<?= $Footer['linkedin_url'] ?>"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 mb-40">
                <h5 class="title font-zen">Links</h5>
                <?php
                               wp_nav_menu(array(
                                   'theme_location' => 'primary',
                                    // 'container' => 'navbar-nav',
                                    'menu_class' => 'footer-list style-none',
                                 )); ?>
            </div>
            <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6 mb-40">
                <h5 class="title font-zen">Legal</h5>
                <?php
                            wp_nav_menu([

                                'theme_location' => 'footer',

                                 'menu_class' => 'footer-list style-none',


                            ]); ?>

            </div>
            <div class="col-xxl-4 col-xl-3 col-lg-4 col-md-5 mb-40">
                <div class="address ps-xxl-5 ms-xxl-5">
                    <h5 class="title font-zen">Contact</h5>
                    <p><?= $Footer['address'] ?></p>
                    <a href="mailto:<?= $Footer['email'] ?>" class="email tran3s"><?= $Footer['email'] ?></a>
                    <h5 class="title sm font-zen">Call us at</h5>
                    <a href="tel:<?= $Footer['phone_number'] ?>" class="call tran3s"><?= $Footer['phone_number'] ?></a>
                </div> <!-- /.address -->
            </div>
        </div>
    </div>
    <div class="container">
        <div class="bottom-footer">
            <div class="row align-items-center justify-content-between">
                <!-- <div class="col-lg-4 order-lg-1 mb-15">
							<div class="logo text-center text-lg-start"><a href="index.html"></div>
						</div> -->
                <div class="col-lg-4 order-lg-3 mb-15">
                    <ul class="d-flex justify-content-center justify-content-lg-end footer-nav style-none">
                        <li><a href="#">Privacy &amp; Terms.</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 order-lg-2 mb-15">
                    <p class="copyright text-center">Copyright @<?php echo date('Y'); ?> Red Cherry Coffee Roastery</p>
                </div>
            </div>
        </div>
    </div>
</footer> <!-- /.vcamp-footer-seven -->


<button class="scroll-top">
    <i class="bi bi-arrow-up-short"></i>
</button>





<?php wp_footer(); ?>
</body>

</html>