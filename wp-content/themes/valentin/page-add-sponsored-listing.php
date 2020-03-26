<?php 
if(!is_user_logged_in()){
	wp_redirect('log-in');
}
acf_form_head(); ?>
<?php get_header(); ?>

        <section class="sponsoredlist container">
		
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<!-- Цикл WordPress -->
	<h2><?php the_title() ?></h2> 
	<?php the_content() ?>
	
	<?php
	
	acf_form(array(
		'post_id'		=> 'new_post',
		'post_title'	=>   $_POST['acf[field_5d9c43ef6a404]'],
		'post_content'	=> false,
		'new_post'		=> array(
			'post_type'		=> 'sponsoredlistings',
			'post_status'	=> 'pending'
		),
	  //'return'		=> home_url('contact-form-thank-you'),
		'submit_value'	=> 'Publish'
	));
	
	?>	
	
	
<?php endwhile; else : ?>
	<p>Записей нет.</p>
<?php endif; ?>

		</section>
		
<?php get_footer(); ?>