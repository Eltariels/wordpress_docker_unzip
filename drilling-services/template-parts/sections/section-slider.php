<section id="slider-section" class="slider-area home-slider">
   
  <!-- start of hero --> 
    <section class="hero-slider hero-style">
        <div class="drilling_servicesswiper-container">
            <div class="swiper-wrapper">
              <?php for($p=1; $p<6; $p++) { ?>
              <?php if( get_theme_mod('slider'.$p,false)) { ?>
              <?php $querycolumns = new WP_query('page_id='.get_theme_mod('slider'.$p,true)); ?>
              <?php while( $querycolumns->have_posts() ) : $querycolumns->the_post(); 
                $image = wp_get_attachment_image_src(get_post_thumbnail_id() , true); ?>
              <?php 
                if(has_post_thumbnail()){
                  $img = esc_url($image[0]);
                }
                if(empty($image)){
                  $img = get_template_directory_uri().'/assets/images/default.png';
                }

              ?>
                <div class="drilling_servicesswiper-slide">
                    <div class="drilling_servicesslide-inner slide-bg-image">
                        <img class="slide-mainimg slidershape1" src="<?php echo esc_url($img); ?>" alt="<?php the_title_attribute(); ?>">
                        <div class="slideinning"></div>
                        <!-- <div class="slidersvg2">               -->
                            <div class="slidercontent">
                                <div class="slide-title">
                                    <h2><?php the_title_attribute(); ?></h2>   
                                </div>    
                                <div class="slide-text" >
                                    <?php the_excerpt(); ?>
                                </div>
                                <div class="slide-btns">
                                   <a class="ReadMore" href="<?php echo esc_url( get_permalink() ); ?>"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i><?php esc_html_e('Discover More','drilling-services'); ?></a>
                                </div>
                            </div>
                          <div class="clearfix"></div>
                        <!-- </div> -->
                    </div>
                </div>
              <?php endwhile;
                 wp_reset_postdata(); ?>
              <?php } } ?>
                <div class="clear"></div> 

            </div>
           <!-- swipper controls -->
            <div class="drilling_servicesswiper-pagination"></div>
            <!-- <div class="drilling_servicesswiper-button-next"><i class="fa fa-angle-right"></i></div>
            <div class="drilling_servicesswiper-button-prev"><i class="fa fa-angle-left"></i></div> -->
        </div>
        <div class="slast">
          <?php 
                $slast_image = get_theme_mod('slast_image');
                if(!empty($slast_image)){
                  echo '<img alt="'. esc_html(get_the_title()) .'" src="'.esc_url($slast_image).'" class="img-responsive secondry-bg-img" />';
                }else{
                  echo '<img src="'.get_template_directory_uri().'/assets/images/slide-btm.png" class="img-responsive" />';
                }
              ?>
        </div>
         <div class="slast-brd">
    </section>
  <!-- end of hero slider -->
</section>
