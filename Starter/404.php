<?php get_header(); ?>
	
	<div class="eight columns">
		<div class="alert-box error">404!</div>
		<h1>Oops</h1>
		<p>Sorry, We can find what you are looking for!</p>
	<?php get_search_form(); ?>
	<a href="<?php echo home_url( '/' ); ?>">&larr; Go Home?</a>
	</div>
<?php get_sidebar(); ?>
		
<?php get_footer(); ?>