<section id="service-section" class="services-area home-services">

	<div class="<?php if(esc_attr(get_theme_mod('drilling_services_service_section_width','Box Width')) == 'Full Width'){ ?>container-fluid pd-0 <?php } elseif(esc_attr(get_theme_mod('drilling_services_service_section_width','Box Width')) == 'Box Width'){ ?> container <?php }?>">
	<!-- <div class="container">  -->
		<div class="row">  

			<div class="col-lg-6 col-md-12 col-sm-12">
				<div class="h-section">
					<h3 class="section-title"><?php echo esc_html(get_theme_mod('service_heading')); ?>
					</h3>
					<p class="section-subtitle"><?php echo esc_html(get_theme_mod('service_description')); ?>
					</p>
					<div class="clearfix"></div>
				</div>
			</div>

			<div class="col-lg-6 col-md-12 col-sm-12 ">

				<div class="row">
					<?php for($p=1; $p<3; $p++) { ?>
					<?php if( get_theme_mod('Service'.$p,false)) { ?>
					<?php $querycolumns = new WP_query('page_id='.get_theme_mod('Service'.$p,true)); ?>
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

					<?php  
						$icon = get_theme_mod('service_icon'.$p,'fa fa-bookmark');
					?>
				
					<!-- Start Single Service -->
					<div class="col-md-6 col-lg-6 box-space">
						<div class="threebox box<?php echo esc_attr( $p ) ?> <?php if($p % 3 == 0) { echo "last_column"; } ?>">   
							<div class="single-service">
								<div class="imageBox">
									<div class="icon">
										<i class="<?php echo $icon; ?>" aria-hidden="true"></i>
									</div>
								</div> 

									<div class="conbx">
									<a class="serv-cont" href="<?php echo esc_url( get_permalink() ); ?>">

										<h3 class="title"><?php the_title_attribute(); ?></h3>
										</a>

										<div class="description"><?php the_excerpt(); ?></div>
										
										<div class="clearfix"></div>
									</div>
								
								<div class="clearfix"></div>
							</div>

						</div>
					</div>
					<!-- / End Single Service -->

					<?php endwhile;
					wp_reset_postdata(); ?>
					<?php } } ?>
				</div>
			</div>
		</div>

			<div class="row">

			<?php for($p=3; $p<7; $p++) { ?>
	        <?php if( get_theme_mod('Service'.$p,false)) { ?>
	        <?php $querycolumns = new WP_query('page_id='.get_theme_mod('Service'.$p,true)); ?>
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

			<?php  
				$icon = get_theme_mod('service_icon'.$p,'fa fa-bookmark');
	        ?>
	       
			<!-- Start Single Service -->
			<div class="col-md-6 col-lg-3 box-space">
				<div class="threebox box<?php echo esc_attr( $p ) ?> <?php if($p % 3 == 0) { echo "last_column"; } ?>">   
					<div class="single-service">
						<div class="imageBox">
	                		<div class="icon">
								<i class="<?php echo $icon; ?>" aria-hidden="true"></i>
							</div>
	                	</div> 

							<div class="conbx">
							<a class="serv-cont" href="<?php echo esc_url( get_permalink() ); ?>">

								<h3 class="title"><?php the_title_attribute(); ?></h3>
								</a>

								<div class="description"><?php the_excerpt(); ?></div>
								
								<div class="clearfix"></div>
							</div>
						
						<div class="clearfix"></div>
					</div>

              	</div>
			</div>
			<!-- / End Single Service -->

			<?php endwhile;
           wp_reset_postdata(); ?>
        <?php } } ?>
        <div class="clear"></div> 
			
		</div>
	<!-- </div> -->
	</div>
</section>
