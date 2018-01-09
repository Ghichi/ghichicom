<?php
/**
 * Displays header media
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="custom-header">

		<div class="custom-header-media">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/ghichi-branding-secondpage.jpg">

		</div>

	<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>

</div><!-- .custom-header -->
