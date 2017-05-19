<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.1
 */

get_header();
global $post;
$categories = get_the_category($post->ID);
$cat_link = get_category_link($categories[0]->cat_ID);
?>



<div class="topo-title topo-image" style="background-image: url( <?php the_post_thumbnail_url( $size = 'destaque-page' ) ?> );">
	<div class="container">
		<div class="row">

			<h2 class="page-title col-xs-12 text-center">Para sua empresa</h2>

		</div>
	</div>
</div>
<?php
				// Start the Loop.
		while ( have_posts() ) : the_post(); ?>

<div id="primary" class="container">
	<main id="main-content" class="site-main row" role="main">

		<div class="col-xs-12 call-action text-center">
			<?php the_content( ); ?>
		</div


	</div>

	<div class="col-xs-12 col-sm-6 col-sm-10 col-md-6 col-sm-offset-1 col-md-offset-3 entry-content formulario">
		
		<article class="box-category box-line">				
			
			<?php echo do_shortcode('[formidable id=7]'); ?>

		</article>



	
</div>

<?php  endwhile;
	?>
</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
