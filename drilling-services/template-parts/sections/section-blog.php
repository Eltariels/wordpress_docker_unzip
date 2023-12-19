<?php  
	$drillingservices_hs_blog 			= esc_attr(get_theme_mod('hs_blog','1'));
	$drillingservices_blog_title 		= esc_attr(get_theme_mod('blog_title'));
	$drillingservices_blog_subtitle		= esc_attr(get_theme_mod('blog_subtitle')); 
	$drillingservices_blog_description	= esc_attr(get_theme_mod('blog_description'));
	$drillingservices_blog_num			= esc_attr(get_theme_mod('blog_display_num','3'));
	if($drillingservices_hs_blog=='1'):
?>

<section id="blog-section" class="blog-area home-blog">

	<div class="container">
		<div class="row justify-content-center text-center ">
			<div class="h-section">
				<h3 class="section-title"><?php echo esc_html(get_theme_mod('blog_heading')); ?>
				</h3>			
			</div>
		 </div> 
<!-- 		</?php if(!empty($drillingservices_blog_title) || !empty($drillingservices_blog_subtitle) || !empty($drillingservices_blog_description)): ?>
			<div class="title">
				</?php if(!empty($drillingservices_blog_title)): ?>
					<h6></?php echo wp_kses_post($drillingservices_blog_title); ?></h6>
				</?php endif; ?>
				
				</?php if(!empty($drillingservices_blog_subtitle)): ?>
					<h2></?php echo wp_kses_post($drillingservices_blog_subtitle); ?></h2>
					<span class="shap"></span>
				</?php endif; ?>
				
				</?php if(!empty($drillingservices_blog_description)): ?>
					<p></?php echo wp_kses_post($drillingservices_blog_description); ?></p>
				</?php endif; ?>
			</div>
		</?php endif; ?>  -->

			<div class="row">
			<?php 	
				$drillingservices_blogs_args = array( 'post_type' => 'post', 'posts_per_page' => $drillingservices_blog_num,'post__not_in'=>get_option("sticky_posts")) ; 	
				$drillingservices_blog_wp_query = new WP_Query($drillingservices_blogs_args);
				if($drillingservices_blog_wp_query)
				{	
				while($drillingservices_blog_wp_query->have_posts()):$drillingservices_blog_wp_query->the_post(); ?>
				<div class="col-lg-4 col-md-6 col-sm-12 ">
					<div class="blogbx">
							<?php if (has_post_thumbnail( $post->ID ) ): ?>
							<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
							<a href="<?php echo esc_url( get_permalink() ); ?>">	
								<div class="blog-image" style="background-image: url('<?php echo esc_url($image[0]); ?>')">
									
									<div class="date">
										<!-- <a href="<?php echo esc_url( get_permalink() ); ?>"> -->
											<li class="num"><?php echo get_the_date( 'j' ); ?> </li>
											<li><?php echo get_the_date( 'F Y' ); ?></li>
										<!-- </?php echo get_the_date( 'Y' ); ?></a>  -->
									</div>
								</div>
							</a>
							
							<?php else: 
								$img = get_template_directory_uri().'/assets/images/default.png';
								?>
								<!-- <a href="<//?php echo esc_url( get_permalink() ); ?>">
									<div class="blog-image" style="background-image: url('<//?php echo esc_url($img); ?>')">
										

									</div>
								</a> -->

							<?php endif; ?>

						<div class="clearfix"></div>
						<div class="blog-content">
							
							<div class="box-admin">
								<div class="row m-0">
									<div class="col-md-6 col-sm-6 auth pl-0"><i class="fa fa-user" aria-hidden="true"></i><a href="<?php echo esc_url( get_permalink() ); ?>"><?php esc_html_e('By','drilling-services'); ?> <?php echo get_the_author(); ?></a>
									</div> 
									<div class="col-md-6 col-sm-6 comm pl-0"><i class="fa fa-comment-o" aria-hidden="true"></i><a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_html(get_comments_number($post->ID)); ?> </a>
									</div>
								</div>
							</div>
							<?php 
								if ( is_single() ) :
									
								the_title('<h6 class="post-title">', '</h6>' );
								
								else:
								
								the_title( sprintf( '<h6 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h6>' );
								
								endif; 
							?> 
							<p><?php echo wp_trim_words(get_the_content(), 35);	?></p>
									
							<div class="blog-btn">
								
								<a href="<?php echo esc_url( get_permalink() ); ?>"><i class="fa fa-chevron-circle-right" ></i> <?php esc_html_e('READ MORE','drilling-services'); ?>
									<div class="btn-brd"></div>
								</a>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>

			<?php endwhile; 
				}
				wp_reset_postdata();
			?>
			</div>

	</div>

</section>
<?php endif; ?>