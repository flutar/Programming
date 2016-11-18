<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * I did not add anything new.
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package OnePress & Michael 
 */

get_header();

?>

	<div class="row">
		<div class="col-md-8 offset-md-2">
			<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-3">Fluid jumbotron</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
  </div>
</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-8 offset-md-2">
		  <div class="col-md-4">
				<div class="card">
				  <div class="card-header">
				    Featured
				  </div>
				  <div class="card-block">
				    <h4 class="card-title">Special title treatment</h4>
				    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
				    <a href="#" class="btn btn-primary">Go somewhere</a>
				  </div>
				</div>
			</div>

			  <div class="col-md-4">
				<div class="card">
				  <div class="card-header">
				    Featured
				  </div>
				  <div class="card-block">
				    <h4 class="card-title">Special title treatment</h4>
				    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
				    <a href="#" class="btn btn-primary">Go somewhere</a>
				  </div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card">
				  <div class="card-header">
				    Featured
				  </div>
				  <div class="card-block">
				    <h4 class="card-title">Special title treatment</h4>
				    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
				    <a href="#" class="btn btn-primary">Go somewhere</a>
				  </div>
				</div>
			</div>

		</div>
	</div>


<?php get_footer(); ?>
