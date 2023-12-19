<?php
/**
 * side bar template
 *
 * @package Drilling Services
 */
?>
<?php if ( ! is_active_sidebar( 'drilling-services-woocommerce-sidebar' ) ) {	return; } ?>
<div class="col-lg-4 pl-lg-4 my-5 order-0">
	<div class="sidebar">
		<?php dynamic_sidebar('drilling-services-woocommerce-sidebar'); ?>
	</div>
</div>