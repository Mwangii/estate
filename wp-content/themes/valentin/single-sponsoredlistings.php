<?php acf_form_head(); ?>
<?php get_header(); ?>






		
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<!-- Цикл WordPress -->
	<?php /*the_title()*/ ?> 
	<?php /*the_content()*/ ?>

						<?php

						$id=get_the_ID();	
						$fields = get_field_objects($id);
		
						foreach ($fields as $field) {
							${$field['name']}=$field['value'];					
							//echo($field[name].'='.$field[value].'<br>');
						}						

						?>	
	
      <section class="sponsoredlist container">
            <h2 class="sponsoredtext text-center"><?php echo $project_name ?></h2>
            <div class="grid">
                <!-- HEADER -->
                <a href="">
                    <div class="grid-header">
                        <p class="h-picture">Picture</p>
                        <p class="h-projectname">Project Name</p>
                        <p class="h-country">Country</p>
                        <p class="h-city">City</p>
                        <p class="h-newold">New/Old</p>
                        <p class="h-price">Price</p>
                        <p class="h-pricesqft">Price/Sqft</p>
                        <p class="h-sqft">Sqft</p>
                        <p class="h-rooms">Rooms</p>
                        <p class="h-baths">Baths</p>
                        <p class="h-website">Website</p>
                        <p class="h-contact">Contact</p>
                        <p class="h-phone">Phone</p>
                    </div>
                </a>
                <!-- ROW -->
                <a href="">
                    <div class="grid-main" id="special">
                        <p class="picture"></p>
                        <p class="projectname"></p>
                        <p class="country"></p>
                        <p class="city"></p>
                        <p class="newold"></p>
                        <p class="price"></p>
                        <p class="pricesqft"></p>
                        <p class="sqft"></p>
                        <p class="rooms"></p>
                        <p class="baths"></p>
                        <p class="website"></p>
                        <p class="contact"></p>
                        <p class="phone"></p>
                    </div>
                </a>
		
				


						<a href="<?php the_permalink(); ?>">
							<div class="grid-main">
								<img class="picture" src="<?php echo get_stylesheet_directory_uri() ?>/dist/assets/lay1.png" alt="Project Picture">
								<p class="projectname"><span class="mobile-toggle"><b>Project Name</b><br /></span><?php echo $project_name ?></p>
								<p class="country"><span class="mobile-toggle"><b>Country</b><br /></span><?php echo $country ?></p>
								<p class="city"><span class="mobile-toggle"><b>City</b><br /></span><?php echo $city ?></p>
								<p class="newold"><span class="mobile-toggle"><b>New/Old</b><br /></span><?php echo $newold ?></p>
								<p class="price"><span class="mobile-toggle"><b>Price</b><br /></span>$<?php echo $price ?></p>
								<p class="pricesqft"><span class="mobile-toggle"><b>Price/Sqft</b><br /></span>$<?php echo $pricesqft ?></p>
								<p class="sqft"><span class="mobile-toggle"><b>Sqft</b><br /></span><?php echo $sqft ?></p>
								<p class="rooms"><span class="mobile-toggle"><b>Rooms</b><br /></span><?php echo $rooms ?></p>
								<p class="baths"><span class="mobile-toggle"><b>Baths</b><br /></span><?php echo $baths ?></p>
								<p class="website"><span class="mobile-toggle"><b>Website</b><br /></span><?php echo $website ?></p>
								<p class="contact"><span class="mobile-toggle"><b>Contact</b><br /></span><?php echo $contact ?></p>
								<p class="phone"><span class="mobile-toggle"><b>Phone</b><br /></span><?php echo $phone ?></p>
							</div>
						</a>	
						


            </div>

        </section>
	
	
	
	
		<?php /*$options = array(
			'post_id' => get_the_ID(),
			'field_groups' => array(27),
			'form' => true, 
			'return' => add_query_arg( 'updated', 'true', get_permalink() ), 
			'html_before_fields' => '',
			'html_after_fields' => '',
			'submit_value' => 'Update' 
			);
			acf_form( $options );
		*/?>
	
	
<?php endwhile; else : ?>
	<p>Записей нет.</p>
<?php endif; ?>






		
<?php get_footer(); ?>