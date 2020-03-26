<?php get_header(); ?>

<?php /*
       ini_set("default_socket_timeout","05");
       set_time_limit(5);
       $f=fopen("https://css-tricks.com","r");
       $r=fread($f,1000);
       fclose($f);
       if(strlen($r)>1) {
       echo("<span class='online'>Online</span>");
       }
       else {
       echo("<span class='offline'>Offline</span>");
       }
*/ ?>

		
        <section class="sponsoredlist free">
		
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<!-- Цикл WordPress -->
	<?php /*the_title()*/ ?>
	<?php the_content() ?>
<?php endwhile; else : ?>
	<p>Записей нет.</p>
<?php endif; ?>

		</section>
	
	
		
        <section class="sponsoredlist free">
            <h2 class="sponsoredtext text-center">Sponsored Listings</h2>
            <a href="/PROPERTIESTABLE.COM/add-sponsored-listing/"><button class="sponsored-btn text-center" type="submit">ADD SPONSORED LISTING FOR <b style="font-family: sans-serif;">$99</b></button></a>	

			
			
			
<table id="myTable2" class="tablesorter">
<thead>
<tr>

                        <th>Picture</th>
                        <th>Project Name</th>
                        <th>Country</th>
                        <th>City</th>
                        <th>New/Old</th>
                        <th>Price</th>
                        <th>Price/Sqft</th>
                        <th>Sqft</th>
                        <th>Rooms</th>
                        <th>Baths</th>
                        <th>Website</th>
                        <th>Contact</th>
                        <th>Phone</th>

</tr>
</thead>
<tbody>


				
						<?php

						$args = array( 
						  'post_type' => 'sponsoredlistings',
			  
						);				
						$j=1;
						$display_none='';
						$newarray=array();
						$freelistings_query = new WP_Query($args);
						if ( $freelistings_query->have_posts() ) :while ( $freelistings_query->have_posts() ) :
						$freelistings_query->the_post();
						$id=get_the_ID();
						$fields = get_field_objects($id);
						
						
						
		
						foreach ($fields as $field) {
							${$field['name']}=$field['value'];					
							//echo($field[name].'='.$field[value].'<br>');
						}

						if(isset($_GET['countries']) && $_GET['countries'] !=''){
							if($country != $_GET['countries']){
								continue;
							}
						}
						if(isset($_GET['cities']) && $_GET['cities'] !=''){
							if($city != $_GET['cities']){
								continue;
							}
						}
						if(isset($_GET['propertyage']) && $_GET['propertyage'] !=''){
							if($city != $_GET['propertyage']){
								continue;
							}
						}
						if(isset($_GET['minprice']) && $_GET['minprice'] !=''){
							if($price<$_GET['minprice'] || $price==''){
								continue;
							}
						}
						if(isset($_GET['maxprice']) && $_GET['maxprice'] !=''){
							if($price>$_GET['maxprice'] || $price==''){
								continue;
							}
						}
						if(isset($_GET['pricesqft']) && $_GET['pricesqft'] !=''){
							if($_GET['pricesqft'] !=$pricesqft){
								continue;
							}
						}
						if(isset($_GET['minsqft']) && $_GET['minsqft'] !=''){
							if($sqft<$_GET['minsqft']){
								continue;
							}
						}
						if(isset($_GET['maxsqft']) && $_GET['maxsqft'] !=''){
							if($sqft>$_GET['maxsqft']){
								continue;
							}
						}
						if(isset($_GET['rooms']) && $_GET['rooms'] !=''){
							if($_GET['rooms'] !=$rooms){
								continue;
							}
						}
						if(isset($_GET['baths']) && $_GET['baths'] !=''){
							if($_GET['baths'] !=$baths){
								continue;
							}
						}
						
						if($j>5){
							$display_none="viewmorelisting display_none";
						}

						$newarray[]='<tr class="open_newtab" data-newtab="'. get_permalink() .'" class="sponsoredlistings_items">
								<td class="star sponsored_listimgbox">
								<p class="pricestart">$'. $price .'</p>
								<img class="picture" src="'. $picture .'" alt="'. $project_name .'"></td>
								<td>'. $project_name .'</td>
								<td>'. $country .'</td>
								<td>'. $city .'</td>
								<td>'. $newold .'</td>
								<td>$'. $price .'</td>
								<td>$'. $pricesqft .'</td>
								<td>'. $sqft .'</td>
								<td>'. $rooms .'</td>
								<td>'. $baths .'</td>
								<td>'. $website .'</td>
								<td>'. $contact .'</td>
								<td>'. $phone .'</td>

						</tr>';

						?>
						
						

						<tr class="open_newtab" data-newtab="<?php echo get_permalink() ?>" class="sponsoredlistings_items <?php echo $display_none;?>">
								<td class="star sponsored_listimgbox">
								<p class="pricestart">$<?php echo $price ?></p>
								<img class="picture" src="<?php echo $picture ?>" alt="<?php echo $project_name ?>"></td>
								<td><?php echo $project_name ?></td>
								<td><?php echo $country ?></td>
								<td><?php echo $city ?></td>
								<td><?php echo $newold ?></td>
								<td>$<?php echo $price ?></td>
								<td>$<?php echo $pricesqft ?></td>
								<td><?php echo $sqft ?></td>
								<td><?php echo $rooms ?></td>
								<td><?php echo $baths ?></td>
								<td><?php echo $website ?></td>
								<td><?php echo $contact ?></td>
								<td><?php echo $phone ?></td>

						</tr>
						
						<?php
						$j++;
						endwhile;endif;?>		


</tbody>
</table>
<div class="text-center"><button type="button" class="sponsored-btn" id="sponsored_listing">View More</button></div> 
			
			

		



        </section>




		
        <hr>
		
		
        <section class="sponsoredlist free">
            <h2 class="sponsoredtext text-center">Free Listings</h2>
            <a href="/PROPERTIESTABLE.COM/add-free-listing/"><button class="sponsored-btn text-center" type="submit">ADD FREE LISTING</button></a>			

			
			
			
<table id="myTable" class="tablesorter">
<thead>
<tr>

                        <th>Picture</th>
                        <th>Project Name</th>
                        <th>Country</th>
                        <th>City</th>
                        <th>New/Old</th>
                        <th>Price</th>
                        <th>Price/Sqft</th>
                        <th>Sqft</th>
                        <th>Rooms</th>
                        <th>Baths</th>
                        <th>Website</th>
                        <th>Contact</th>
                        <th>Phone</th>

</tr>
</thead>
<tbody>


				
						<?php

						$args = array( 
						  'post_type' => 'freelistings', 
						  'posts_per_page' => -1,
			  
						);	
						$k=1;
						$l=10;
						$jjk=5;
						$freelistings_query = new WP_Query($args);
						if ( $freelistings_query->have_posts() ) :while ( $freelistings_query->have_posts() ) :
						$freelistings_query->the_post();
						$id=get_the_ID();	
						$fields = get_field_objects($id);
		
						foreach ($fields as $field) {
							${$field['name']}=$field['value'];					
							//echo($field[name].'='.$field[value].'<br>');
						}

						if(isset($_GET['countries']) && $_GET['countries'] !=''){
							if($country != $_GET['countries']){
								continue;
							}
						}
						if(isset($_GET['cities']) && $_GET['cities'] !=''){
							if($city != $_GET['cities']){
								continue;
							}
						}
						if(isset($_GET['propertyage']) && $_GET['propertyage'] !=''){
							if($city != $_GET['propertyage']){
								continue;
							}
						}
						if(isset($_GET['minprice']) && $_GET['minprice'] !=''){
							if($price<$_GET['minprice'] || $price==''){
								continue;
							}
						}
						if(isset($_GET['maxprice']) && $_GET['maxprice'] !=''){
							if($price>$_GET['maxprice'] || $price==''){
								continue;
							}
						}
						if(isset($_GET['pricesqft']) && $_GET['pricesqft'] !=''){
							if($_GET['pricesqft'] !=$pricesqft){
								continue;
							}
						}
						if(isset($_GET['minsqft']) && $_GET['minsqft'] !=''){
							if($sqft<$_GET['minsqft']){
								continue;
							}
						}
						if(isset($_GET['maxsqft']) && $_GET['maxsqft'] !=''){
							if($sqft>$_GET['maxsqft']){
								continue;
							}
						}
						if(isset($_GET['rooms']) && $_GET['rooms'] !=''){
							if($_GET['rooms'] !=$rooms){
								continue;
							}
						}
						if(isset($_GET['baths']) && $_GET['baths'] !=''){
							if($_GET['baths'] !=$baths){
								continue;
							}
						}
						
						

						?>

						<tr class="open_newtab" data-newtab="<?php echo get_permalink() ?>">
								<td class="sponsored_listimgbox"><img class="picture" src="<?php echo $picture ?>" alt="<?php echo $project_name ?>"></td>
								<td><?php echo $project_name ?></td>
								<td><?php echo $country ?></td>
								<td><?php echo $city ?></td>
								<td><?php echo $newold ?></td>
								<td>$<?php echo $price ?></td>
								<td>$<?php echo $pricesqft ?></td>
								<td><?php echo $sqft ?></td>
								<td><?php echo $rooms ?></td>
								<td><?php echo $baths ?></td>
								<td><?php echo $website ?></td>
								<td><?php echo $contact ?></td>
								<td><?php echo $phone ?></td>

						</tr>
						
						<?php 
						if($k==$l){
						if(isset($newarray) && count($newarray)>0){
						$nj=0;
						 foreach($newarray as $row){
						  if($nj<$jjk){
							echo $row;
						  $nj++;}
						 }
						}
							$l=$l+10;
							$jjk=$jjk+5;
						}


						$k++;
						endwhile;endif;?>		


</tbody>
</table>			
			
			

		



        </section>



<script>
jQuery('#sponsored_listing').click(function(){
	if(jQuery(this).hasClass('active')){
		jQuery('.viewmorelisting').addClass('display_none');
		jQuery(this).removeClass('active');
		jQuery(this).text('View More');
	} else {
		jQuery('.viewmorelisting').removeClass('display_none');
		jQuery(this).addClass('active');
		jQuery(this).text('Less');
	}
});
jQuery('.sponsored_listimgbox img').click(function(event){
event.preventDefault();
var imagepth=jQuery(this).attr('src');
window.open(imagepth,'_blank');
});
jQuery('.open_newtab').click(function(event){
event.preventDefault();
var grturl=jQuery(this).data('newtab');
window.open(grturl,'_blank');
});


</script>


		
		
<?php get_footer(); ?>