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
			<?php onepress_posted_on()                                                 ; ?>
		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	<div class="post-thumbnail">
		<?php the_post_thumbnail('onepress-medium') ?>
	</div>

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

		<?php /* Check the authors' other posts*/ ?>

		<?php $otherAuthorPosts = new WP_Query(array(
			'author' => get_the_author_meta('ID'), 
			'posts_per_page' => 2, 
			'post__not_in' => array(get_the_ID())
		)); ?>

		<div class="about-author clearfix">
		 	<div class="about-author-image">
		 		<?php echo get_avatar(get_the_author_meta('ID'), 512) ?>
		 		<p><?php echo get_the_author_meta('nickname') ?></p>
		 	</div>
		 	<div class="about-author-text">
		 		<h6>About the Author</h6>
		 		<p><?php echo wpautop(get_the_author_meta('description')) ?></p>
					
					<?php if($otherAuthorPosts->have_posts()) { ?>
						<div class="other-posts-by"> 
							<h6>Other posts by <?php echo get_the_author_meta('nickname') ?></h6>
							<ul>
								<?php while ($otherAuthorPosts->have_posts()) {
									$otherAuthorPosts->the_post(); ?>
									<li><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
								<?php } ?>
							</ul>
						</div> 
					<?php } wp_reset_postdata() ?>
					
					<?php if (count_user_posts(get_the_author_meta('ID')) > 2) { ?>
						<a class="btn btn-danger" href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>"><?php echo get_the_author_meta('nickname') ?>'s other <?php echo count_user_posts(get_the_author_meta('ID')) - 1 ?> posts</a>
					<?php } ?>
		 	</div>
		</div>

	<footer class="entry-footer">
		<?php onepress_entry_footer(); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->

