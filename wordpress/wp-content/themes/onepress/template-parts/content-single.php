<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package OnePress
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php onepress_posted_on(); ?>
		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

		<?php /* Check the authors' other posts*/ ?>

		<?php $otherAuthorPosts = new WP_Query(array(
			'author' => get_the_author_meta('ID'), 
			'posts_per_page' => 3, 
			'post__not_in' => array(get_the_ID())
		)); ?>

		<div class="about-author clearfix">
		 	<div class="about-author-image">
		 		<?php echo get_avatar(get_the_author_meta('ID'), 512) ?>
		 		<?php echo get_the_author_meta('nickname') ?>
		 	</div>
		 	<div class="about-author-text">
		 		<?php echo wpautop(get_the_author_meta('description')) ?>
					<ul>
						<?php while ($otherAuthorPosts->have_posts()) {
							$otherAuthorPosts->the_post(); ?>
							<li><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
						<?php } ?>
					</ul>
		 	</div>
		</div>



	<footer class="entry-footer">
		<?php onepress_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

