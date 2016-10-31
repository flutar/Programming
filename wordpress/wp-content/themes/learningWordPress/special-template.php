
<?php 
/*
 Template Name: Special Template
 */

get_header();
if (have_posts()) :
	while (have_posts()) : the_post(); ?>
		<article class="post page">
			<h2><?php the_title(); ?></h2>
				<div class="info-box">
					<h4>Disclaimer</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore </p>
				</div>
			<?php the_content(); ?>
		</article>
	<?php endwhile; 

	else :
		echo "<p>No content found</p>"; 
	endif;
	get_footer(); 
 ?>
