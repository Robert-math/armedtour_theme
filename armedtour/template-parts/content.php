<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Armedtour
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="single__header" style="background-image: url(<?php echo get_the_post_thumbnail_url();?>) no-repeat;" >
		<div class="single__header__wrapper" >
		<div class="single__header__container">
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;
				
				?>	
				<p><?php echo get_the_excerpt();?></p>	
			</div>
		</div>
		
	</div><!-- .entry-header -->
	<div class="single__container">
	<?php the_title( '<h2 class="entry-title-mini">', '</h2>' ); ?>
	<?php
	if ( 'post' === get_post_type() ) :
		?>
		<div class="entry-meta">
			<span class="single__date">
			<?php
			echo get_the_date();
			?>
			</span>
			<span class="entry-meta__slesh"> / </span>
			<?php
			armedtour_posted_by();
			?>
		</div><!-- .entry-meta -->
	<?php endif; ?>
	
		<?php armedtour_post_thumbnail();?>
	<div class="single-entry-content">
		<?php
		the_content();

		
		?>
	</div><!-- .entry-content -->
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
