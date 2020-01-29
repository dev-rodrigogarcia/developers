<?php
    /*
    * Template Name: Modelo default
    */
?>

<?php get_header(); ?>

<div class="section is-hero img1 is-subpage">
    <div class="container">
		<div data-w-id="41174ade-f098-d525-84e7-186e4fb18c7e" class="col block-centered text-align-center lg-7 md-12">
			<h1>Hosting Made Simple, Fast and Convenient</h1>
			<div class="padding-left padding-right margin-bottom">We deliver to you a sustainable future by helping you define where and how you wish to grow.  And then we make that happen, together with you.</div>
		</div>
    </div>
</div>


<div class="<?php echo hestia_layout(); ?>">
	<?php
	$class_to_add = '';
	if ( class_exists( 'WooCommerce', false ) && ! is_cart() ) {
		$class_to_add = 'blog-post-wrapper';
	}
	?>
	<div class="blog-post <?php echo esc_attr( $class_to_add ); ?>">
		<div class="container">
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content-fullwidth', 'page' );
				endwhile;
				else :
					get_template_part( 'template-parts/content', 'none' );
			endif;
				?>
		</div>
	</div>


<?php get_footer(); ?>