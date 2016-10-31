<?php
/**
 * @package gravit
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">

		<div class="post-symbol">
			<i title="<?php echo _e('Standard Post', 'gravit') ?>" class="fa fa-thumb-tack"></i>
		</div>

		<h1 class="entry-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h1>
		
		<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta">
				written by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>"><?php the_author(); ?></a>
				on <?php gravit_posted_on(); ?> 
			</div><!-- .entry-meta -->
		<?php endif; ?>

	</header><!-- .entry-header -->

	<div class="entry-content">
		
		<?php the_excerpt( __( 'Continue reading <span class="meta-nav"><i class="fa fa-chevron-circle-right"></i></span>', 'gravit' ) ); ?>

				<div class="entry-meta">
					<?php
						/* translators: used between list items */
						$category_list = get_the_category_list( __( ' ', 'gravit' ) );
						/* translators: used between list items */
						$tag_list = get_the_tag_list( '', __( ' ', 'gravit' ) );
						
							if ( ! gravit_categorized_blog() ) {
								// This blog only has 1 category so we just need to worry about tags in the meta text
								if ( '' != $tag_list ) {
									$meta_text = __( 'Tags: <span class="sep">%2$s</span>', 'gravit' );
								} else {
									$meta_text = __( '', 'gravit' );
								}
								
							} else {
								// But this blog has loads of categories so we should probably display them here
								if ( '' != $tag_list ) {
									$meta_text = __( 'Categories: <span class="sep">%1$s</span> <div class="sep-line">Tags: <span class="sep">%2$s</span></div>', 'gravit' );
								} else {
									$meta_text = __( 'Categories: <span class="sep">%1$s</span>', 'gravit' );
								}
							} // end check for categories on this blog
						
						printf(
							$meta_text,
							$category_list,
							$tag_list,
							get_permalink()
						);
					?>
			</div><!-- .entry-meta additional -->

		<?php wp_link_pages( array(
				'before' => '<div class="page-links"><div class="intro">Pages:</div>',
				'after'  => '</div>',
				'nextpagelink'     => __( '<i class="fa fa-angle-double-right"></i>' ),
				'previouspagelink' => __( '<i class="fa fa-angle-double-left"></i>' ),
				'link_before'      => '<span>',
				'link_after'       => '</span>',
		) ); ?>

	</div><!-- .entry-content -->

	

</article><!-- #post-## -->
