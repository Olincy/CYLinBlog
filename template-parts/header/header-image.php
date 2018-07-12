<?php
/**
 * Displays header media
 *
 * @package WordPress
 * @subpackage CYLinBlog
 * @since 1.0
 * @version 1.0
 */

?>
<div class="custom-header">

		<!-- <div class="custom-header-media"> -->
		<div class="custom-header-media1">
			<?php the_custom_header_markup();?>
		</div>

	<?php get_template_part('template-parts/header/site', 'branding');?>

</div><!-- .custom-header -->
