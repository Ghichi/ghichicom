<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<div class="entry-sub-title"><?php the_field('page-subtitle'); ?></div>
		<div class="entry-header-2">
			<div class="entry-lead" ><?php the_field('page-lead'); ?></div>		
			<?php
				/*
				 * アイキャッチ画像が入ります。
				 */
				if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
					echo '<div class="single-featured-image-header">';
					echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
					echo '</div><!-- .single-featured-image-header -->';
				endif;
				?>
		</div><!-- .entry-header-2 -->
<?php twentyseventeen_edit_link( get_the_ID() ); ?>
	</header><!-- .entry-header -->
	<div class="entry-content">

<?php
// コンテンツ
if( have_rows('page-section') ):
 	// loop through the rows of data
    while ( have_rows('page-section') ) : the_row(); ?>
<section class="<?php        // 位置を決める
		the_sub_field('location'); ?>">
	<div class="entry-content-first">
	<?php        // 初めのコンテンツ（テキスト）
		the_sub_field('entry-content-first'); ?>	
	</div>
	<div class="entry-content-second">
		<?php        // 次のコンテンツ（画像）
		the_sub_field('entry-content-second'); ?>
		</div>
</section>

<?php endwhile;
else :
    // no rows found
endif;
?>




		
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
