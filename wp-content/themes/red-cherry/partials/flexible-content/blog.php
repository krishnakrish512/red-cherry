<!--
			=====================================================
				Blog Section One
			=====================================================
			-->
<div class="blog-section-one mt-150 lg-mt-100">
    <div class="container">
        <div class="border-bottom pb-150 lg-pb-70">
            <div class="row">
                <div class="col-12">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="title-style-six xs-pb-20">
                                <h2 class="title"><?php the_sub_field('title')?></h2>
                            </div>
                        </div>
                        <!-- <div class="col-sm-6 text-sm-end text-start">
                            <a href="blogV2.html" class="theme-btn-three">Check our all news <i
                                    class="fas fa-angle-right"></i></a>
                        </div> -->
                    </div>
                    <div class="mt-100 lg-mt-10">
                        <div class="row gx-xl-5">

                            <?php $condition = array(
                                  'post_type' => 'post',
                                   'post_status' => 'publish',
                                   'posts_per_page' => '3'
                                            );
                                   $query = new WP_Query($condition);
                                 if ($query->have_posts()) {
                                while ($query->have_posts()) :
                                $query->the_post();
                                     ?>

                            <div class="col-lg-4 col-md-6 d-flex">
                                <article class="blog-meta-one feature-post lg-mt-40">
                                    <?php foreach((get_the_category()) as $category) :
                                    ?>
                                    <a href="" class="tag"><?php echo $category->cat_name?></a>
                                    <?php endforeach?>
                                    <a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a>
                                    <div class="post-info"> <span class="date"><?php the_time('jS F Y'); ?></span></div>
                                    <div class="post-footer d-flex align-items-center justify-content-between">
                                        <img src="<?php the_post_thumbnail_url('category-thumb'); ?>" alt=""
                                            class="logo">
                                        <a href="blog-detailsV3.html" class="read-more tran3s"><img
                                                src="images/icon/icon_16.svg" alt=""></a>
                                    </div> <!-- /.post-footer -->
                                </article> <!-- /.blog-meta-one -->
                            </div>
                            <?php
                             endwhile;
                          wp_reset_postdata();
                            }
                               ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- /.blog-section-one -->