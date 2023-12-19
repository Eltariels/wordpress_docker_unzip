<?php if ( get_header_image() ) : ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="custom-header" rel="home">
		<img src="<?php esc_url(header_image()); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr(get_bloginfo( 'title' )); ?>">
	</a>	
<?php endif;  ?>
<!-- Header Area -->

	<?php 

		$stickyheader = esc_attr(drillingservices_sticky_menu());
		$topheader_emailtext = esc_attr(get_theme_mod('topheader_emailtext','info@yourmail.com'));
		$topheader_phonetext = esc_attr(get_theme_mod('topheader_phonetext','1-222-2333-33'));

	?>
<div class="main">
    <header class="main-header site-header <?php echo esc_attr(drillingservices_sticky_menu()); ?>">
		<!-- <div class="container-fluid"> -->
		<!-- <div class="container"> -->
			<div class="header-section">
				<div class="headfer-content ">
					<div class="row m-rl">
						<div class="col-lg-4 col-md-5 col-sm-6  pd-0 logo-box">
							<div class="site-logo">
								<?php
								if(has_custom_logo())
									{	
										the_custom_logo();
									}
									else { 
								?>
								<a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>">	
									<?php 
										echo esc_html(bloginfo('name'));
									?>
								</a>	
								<?php 						
									}
								?>
							</div>
							<div class="box-info">
								<?php
									$drillingservices_site_desc = get_bloginfo( 'description');
									if ($drillingservices_site_desc) : ?>
										<p class="site-description"><?php echo esc_html($drillingservices_site_desc); ?></p>
								<?php endif; ?>
							</div>
						</div>
						
						<div class="col-lg-8 col-md-7 col-sm-6  topheadbx pd-0">
							<div class="tophead">
								<div class="row">
									<div class="col-lg-4 col-md-12 col-sm-12 h-mail">
										<?php if ($topheader_emailtext) { ?>
											<a href="mailto:<?php echo apply_filters('drillingservices_header', $topheader_emailtext); ?>">
												<i class="fa fa-envelope-o" aria-hidden="true"></i>
												<span><?php echo apply_filters('drillingservices_header', $topheader_emailtext); ?></span>
											</a>
										<?php } ?>
									</div>
									<div class="col-lg-4 col-md-12 col-sm-12 h-phn">
										<?php if ($topheader_phonetext) { ?>
										<a  href="tel:<?php echo apply_filters('drillingservices_header', $topheader_phonetext); ?>">
											<i class="fa fa-phone" aria-hidden="true"></i>
											<span><?php echo apply_filters('drillingservices_header', $topheader_phonetext); ?></span>
										</a>
										<?php } ?>
									</div>
									<div class="col-lg-4 col-md-12 col-sm-12">
										<div class="social-icons">		
											<a title="<?php esc_attr_e('facebook','drilling-services'); ?>" target="_blank" href="<?php echo esc_url(get_theme_mod('topheader_fblink')); ?>"><i class="fa fa-facebook"></i></a> 
												
											<a title="<?php esc_attr_e('twitter','drilling-services'); ?>" target="_blank" href="<?php echo esc_url(get_theme_mod('topheader_twitterlink')); ?>"><i class="fa fa-twitter"></i></a>

											<a title="<?php esc_attr_e('instagram', 'drilling-services'); ?>" target="_blank" href="<?php echo esc_url(get_theme_mod('topheader_instagramlink')); ?>"><i class="fa fa-instagram"></i></a>

											<a title="<?php esc_attr_e('linkedin', 'drilling-services'); ?>" target="_blank" href="<?php echo esc_url(get_theme_mod('topheader_linkedin')); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="bottomhead">
								<div class="row">
									<div class="col-lg-9 col-md-12 col-sm-12">
										<div class="menu">
											<button class="toggle nav-toggle mobile-nav-toggle" data-toggle-target=".menu-modal"  data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
												<span class="toggle-inner">
													<span class="toggle-icon">
														<i class="fa fa-bars"></i>
													</span>
												</span>
											</button><!-- .nav-toggle -->
											<div class="header-navigation-wrapper">

											<?php
											if ( has_nav_menu( 'primary_menu' ) || ! has_nav_menu( 'expanded' ) ) {
											?>

												<nav class="primary-menu-wrapper" aria-label="<?php echo esc_attr_x( 'Horizontal', 'menu', 'drilling-services' ); ?>">

													<ul class="primary-menu reset-list-style">

													<?php
													if ( has_nav_menu( 'primary_menu' ) ) {

														wp_nav_menu(
															array(
																'container'  => '',
																'items_wrap' => '%3$s',
																'theme_location' => 'primary_menu',
															)
														);

													} elseif ( ! has_nav_menu( 'expanded' ) ) {

														wp_list_pages(
															array(
																'match_menu_classes' => true,
																'show_sub_menu_icons' => true,
																'title_li' => false,
																'walker'   => new DrillingServices_Walker_Page(),
															)
														);

													}
													?>
													</ul>
												</nav><!-- .primary-menu-wrapper -->

											<?php } ?>
											</div><!-- .header-navigation-wrapper -->
											<?php
											// Output the menu modal.
											get_template_part( 'template-parts/sections/modal-menu' );
											?>

										</div>
										
									</div>
									<div class="col-lg-3 col-md-12 col-sm-12 ">
										<?php if (get_theme_mod('topheader_btntext')) {?>
										<div class="mb-n">
											<div class="hbtn">
												<a class="btn" href="<?php echo esc_html(get_theme_mod('topheader_btnlink')); ?>"><?php echo esc_html(get_theme_mod('topheader_btntext')); ?></a>
											</div>
										</div>
										<?php } ?>
									</div>
								</div>	
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- </div> -->

    </header>
	<div class="clearfix"></div>
</div>

