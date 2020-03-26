<?php get_header(); ?>



		
        <section class="sponsoredlist container">
		
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<!-- Цикл WordPress -->
	<h2><?php the_title() ?></h2> 
	<?php the_content() ?>
<?php endwhile; else : ?>
	<p>Записей нет.</p>
<?php endif; ?>

		</section>
		
		
		
        <section class="sponsoredlist container">
            <h2 class="sponsoredtext text-center">Sponsored Listings</h2>
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
                <a href="">
                    <div class="grid-main">
                        <img class="picture" src="<?php echo get_stylesheet_directory_uri() ?>/dist/assets/lay1.png" alt="Project Picture">
                        <p class="projectname"><span class="mobile-toggle"><b>Project Name</b><br /></span>Godrej Properties</p>
                        <p class="country"><span class="mobile-toggle"><b>Country</b><br /></span>India</p>
                        <p class="city"><span class="mobile-toggle"><b>City</b><br /></span>Delhi</p>
                        <p class="newold"><span class="mobile-toggle"><b>New/Old</b><br /></span>New</p>
                        <p class="price"><span class="mobile-toggle"><b>Price</b><br /></span>$20.5L</p>
                        <p class="pricesqft"><span class="mobile-toggle"><b>Price/Sqft</b><br /></span>$200.00</p>
                        <p class="sqft"><span class="mobile-toggle"><b>Sqft</b><br /></span>3.000</p>
                        <p class="rooms"><span class="mobile-toggle"><b>Rooms</b><br /></span>3</p>
                        <p class="baths"><span class="mobile-toggle"><b>Baths</b><br /></span>2</p>
                        <p class="website"><span class="mobile-toggle"><b>Website</b><br /></span>www.godrejproperties.com</p>
                        <p class="contact"><span class="mobile-toggle"><b>Contact</b><br /></span>(873) 297-6426</p>
                        <p class="phone"><span class="mobile-toggle"><b>Phone</b><br /></span>(248)566-5637</p>
                    </div>
                </a>
                <a href="">
                    <div class="grid-main">
                        <img class="picture" src="<?php echo get_stylesheet_directory_uri() ?>/dist/assets/lay2.png" alt="Project Picture">
                        <p class="projectname"><span class="mobile-toggle"><b>Project Name</b><br /></span>Kalpataru Group</p>
                        <p class="country"><span class="mobile-toggle"><b>Country</b><br /></span>Colombia</p>
                        <p class="city"><span class="mobile-toggle"><b>City</b><br /></span>Pimouth</p>
                        <p class="newold"><span class="mobile-toggle"><b>New/Old</b><br /></span>Old</p>
                        <p class="price"><span class="mobile-toggle"><b>Price</b><br /></span>$20.5L</p>
                        <p class="pricesqft"><span class="mobile-toggle"><b>Price/Sqft</b><br /></span>$200.00</p>
                        <p class="sqft"><span class="mobile-toggle"><b>Sqft</b><br /></span>3.000</p>
                        <p class="rooms"><span class="mobile-toggle"><b>Rooms</b><br /></span>3</p>
                        <p class="baths"><span class="mobile-toggle"><b>Baths</b><br /></span>2</p>
                        <p class="website"><span class="mobile-toggle"><b>Website</b><br /></span>www.godrejproperties.com</p>
                        <p class="contact"><span class="mobile-toggle"><b>Contact</b><br /></span>(873) 297-6426</p>
                        <p class="phone"><span class="mobile-toggle"><b>Phone</b><br /></span>(248)566-5637</p>
                    </div>
                </a>
                <a href="">
                    <div class="grid-main">
                        <img class="picture" src="<?php echo get_stylesheet_directory_uri() ?>/dist/assets/lay3.png" alt="Project Picture">
                        <p class="projectname"><span class="mobile-toggle"><b>Project Name</b><br /></span>VTP Reality</p>
                        <p class="country"><span class="mobile-toggle"><b>Country</b><br /></span>Curacao</p>
                        <p class="city"><span class="mobile-toggle"><b>City</b><br /></span>Egiocaster</p>
                        <p class="newold"><span class="mobile-toggle"><b>New/Old</b><br /></span>New</p>
                        <p class="price"><span class="mobile-toggle"><b>Price</b><br /></span>$20.5L</p>
                        <p class="pricesqft"><span class="mobile-toggle"><b>Price/Sqft</b><br /></span>$200.00</p>
                        <p class="sqft"><span class="mobile-toggle"><b>Sqft</b><br /></span>3.000</p>
                        <p class="rooms"><span class="mobile-toggle"><b>Rooms</b><br /></span>3</p>
                        <p class="baths"><span class="mobile-toggle"><b>Baths</b><br /></span>2</p>
                        <p class="website"><span class="mobile-toggle"><b>Website</b><br /></span>www.godrejproperties.com</p>
                        <p class="contact"><span class="mobile-toggle"><b>Contact</b><br /></span>(873) 297-6426</p>
                        <p class="phone"><span class="mobile-toggle"><b>Phone</b><br /></span>(248)566-5637</p>
                    </div>
                </a>
                <a href="">
                    <div class="grid-main">
                        <img class="picture" src="<?php echo get_stylesheet_directory_uri() ?>/dist/assets/lay4.png" alt="Project Picture">
                        <p class="projectname"><span class="mobile-toggle"><b>Project Name</b><br /></span>Lokha Group</p>
                        <p class="country"><span class="mobile-toggle"><b>Country</b><br /></span>South Africa</p>
                        <p class="city"><span class="mobile-toggle"><b>City</b><br /></span>Blifshire</p>
                        <p class="newold"><span class="mobile-toggle"><b>New/Old</b><br /></span>New</p>
                        <p class="price"><span class="mobile-toggle"><b>Price</b><br /></span>$20.5L</p>
                        <p class="pricesqft"><span class="mobile-toggle"><b>Price/Sqft</b><br /></span>$200.00</p>
                        <p class="sqft"><span class="mobile-toggle"><b>Sqft</b><br /></span>3.000</p>
                        <p class="rooms"><span class="mobile-toggle"><b>Rooms</b><br /></span>3</p>
                        <p class="baths"><span class="mobile-toggle"><b>Baths</b><br /></span>2</p>
                        <p class="website"><span class="mobile-toggle"><b>Website</b><br /></span>www.godrejproperties.com</p>
                        <p class="contact"><span class="mobile-toggle"><b>Contact</b><br /></span>(873) 297-6426</p>
                        <p class="phone"><span class="mobile-toggle"><b>Phone</b><br /></span>(248)566-5637</p>
                    </div>
                </a>
                <a href="">
                    <div class="grid-main">
                        <img class="picture" src="<?php echo get_stylesheet_directory_uri() ?>/dist/assets/lay5.png" alt="Project Picture">
                        <p class="projectname"><span class="mobile-toggle"><b>Project Name</b><br /></span>Kanakia Spaces Realty</p>
                        <p class="country"><span class="mobile-toggle"><b>Country</b><br /></span>Azerbaijan</p>
                        <p class="city"><span class="mobile-toggle"><b>City</b><br /></span>Posey</p>
                        <p class="newold"><span class="mobile-toggle"><b>New/Old</b><br /></span>Old</p>
                        <p class="price"><span class="mobile-toggle"><b>Price</b><br /></span>$20.5L</p>
                        <p class="pricesqft"><span class="mobile-toggle"><b>Price/Sqft</b><br /></span>$200.00</p>
                        <p class="sqft"><span class="mobile-toggle"><b>Sqft</b><br /></span>3.000</p>
                        <p class="rooms"><span class="mobile-toggle"><b>Rooms</b><br /></span>3</p>
                        <p class="baths"><span class="mobile-toggle"><b>Baths</b><br /></span>2</p>
                        <p class="website"><span class="mobile-toggle"><b>Website</b><br /></span>www.godrejproperties.com</p>
                        <p class="contact"><span class="mobile-toggle"><b>Contact</b><br /></span>(873) 297-6426</p>
                        <p class="phone"><span class="mobile-toggle"><b>Phone</b><br /></span>(248)566-5637</p>
                    </div>
                </a>
                <a href="">
                    <div class="grid-main">
                        <img class="picture" src="<?php echo get_stylesheet_directory_uri() ?>/dist/assets/lay6.png" alt="Project Picture">
                        <p class="projectname"><span class="mobile-toggle"><b>Project Name</b><br /></span>Ashoka Developers<br> And Builders</p>
                        <p class="country"><span class="mobile-toggle"><b>Country</b><br /></span>Liberia</p>
                        <p class="city"><span class="mobile-toggle"><b>City</b><br /></span>Ubison</p>
                        <p class="newold"><span class="mobile-toggle"><b>New/Old</b><br /></span>New</p>
                        <p class="price"><span class="mobile-toggle"><b>Price</b><br /></span>$20.5L</p>
                        <p class="pricesqft"><span class="mobile-toggle"><b>Price/Sqft</b><br /></span>$200.00</p>
                        <p class="sqft"><span class="mobile-toggle"><b>Sqft</b><br /></span>3.000</p>
                        <p class="rooms"><span class="mobile-toggle"><b>Rooms</b><br /></span>3</p>
                        <p class="baths"><span class="mobile-toggle"><b>Baths</b><br /></span>2</p>
                        <p class="website"><span class="mobile-toggle"><b>Website</b><br /></span>www.godrejproperties.com</p>
                        <p class="contact"><span class="mobile-toggle"><b>Contact</b><br /></span>(873) 297-6426</p>
                        <p class="phone"><span class="mobile-toggle"><b>Phone</b><br /></span>(248)566-5637</p>
                    </div>
                </a>
                <a href="">
                    <div class="grid-main">
                        <img class="picture" src="<?php echo get_stylesheet_directory_uri() ?>/dist/assets/lay7.png" alt="Project Picture">
                        <p class="projectname"><span class="mobile-toggle"><b>Project Name</b><br /></span>Damac Properties UAE</p>
                        <p class="country"><span class="mobile-toggle"><b>Country</b><br /></span>Puerto Rico</p>
                        <p class="city"><span class="mobile-toggle"><b>City</b><br /></span>Trila</p>
                        <p class="newold"><span class="mobile-toggle"><b>New/Old</b><br /></span>Old</p>
                        <p class="price"><span class="mobile-toggle"><b>Price</b><br /></span>$20.5L</p>
                        <p class="pricesqft"><span class="mobile-toggle"><b>Price/Sqft</b><br /></span>$200.00</p>
                        <p class="sqft"><span class="mobile-toggle"><b>Sqft</b><br /></span>3.000</p>
                        <p class="rooms"><span class="mobile-toggle"><b>Rooms</b><br /></span>3</p>
                        <p class="baths"><span class="mobile-toggle"><b>Baths</b><br /></span>2</p>
                        <p class="website"><span class="mobile-toggle"><b>Website</b><br /></span>www.godrejproperties.com</p>
                        <p class="contact"><span class="mobile-toggle"><b>Contact</b><br /></span>(873) 297-6426</p>
                        <p class="phone"><span class="mobile-toggle"><b>Phone</b><br /></span>(248)566-5637</p>
                    </div>
                </a>
                <a href="">
                    <div class="grid-main">
                        <img class="picture" src="<?php echo get_stylesheet_directory_uri() ?>/dist/assets/lay8.png" alt="Project Picture">
                        <p class="projectname"><span class="mobile-toggle"><b>Project Name</b><br /></span>Gadrej Properties</p>
                        <p class="country"><span class="mobile-toggle"><b>Country</b><br /></span>Mauritania</p>
                        <p class="city"><span class="mobile-toggle"><b>City</b><br /></span>Akaham</p>
                        <p class="newold"><span class="mobile-toggle"><b>New/Old</b><br /></span>New</p>
                        <p class="price"><span class="mobile-toggle"><b>Price</b><br /></span>$20.5L</p>
                        <p class="pricesqft"><span class="mobile-toggle"><b>Price/Sqft</b><br /></span>$200.00</p>
                        <p class="sqft"><span class="mobile-toggle"><b>Sqft</b><br /></span>3.000</p>
                        <p class="rooms"><span class="mobile-toggle"><b>Rooms</b><br /></span>3</p>
                        <p class="baths"><span class="mobile-toggle"><b>Baths</b><br /></span>2</p>
                        <p class="website"><span class="mobile-toggle"><b>Website</b><br /></span>www.godrejproperties.com</p>
                        <p class="contact"><span class="mobile-toggle"><b>Contact</b><br /></span>(873) 297-6426</p>
                        <p class="phone"><span class="mobile-toggle"><b>Phone</b><br /></span>(248)566-5637</p>
                    </div>
                </a>
            </div>
            <button class="sponsored-btn text-center" type="submit">ADD SPONSORED LISTING FOR <b>$99</b></button>
        </section>
        <hr>
        <section class="sponsoredlist free">
            <h2 class="sponsoredtext text-center">Free Listings</h2>
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
                <a href="">
                    <div class="grid-main">
                        <img class="picture" src="<?php echo get_stylesheet_directory_uri() ?>/dist/assets/lay1.png" alt="Project Picture">
                        <p class="projectname"><span class="mobile-toggle"><b>Project Name</b><br /></span>Godrej Properties</p>
                        <p class="country"><span class="mobile-toggle"><b>Country</b><br /></span>India</p>
                        <p class="city"><span class="mobile-toggle"><b>City</b><br /></span>Delhi</p>
                        <p class="newold"><span class="mobile-toggle"><b>New/Old</b><br /></span>New</p>
                        <p class="price"><span class="mobile-toggle"><b>Price</b><br /></span>$20.5L</p>
                        <p class="pricesqft"><span class="mobile-toggle"><b>Price/Sqft</b><br /></span>$200.00</p>
                        <p class="sqft"><span class="mobile-toggle"><b>Sqft</b><br /></span>3.000</p>
                        <p class="rooms"><span class="mobile-toggle"><b>Rooms</b><br /></span>3</p>
                        <p class="baths"><span class="mobile-toggle"><b>Baths</b><br /></span>2</p>
                        <p class="website"><span class="mobile-toggle"><b>Website</b><br /></span>www.godrejproperties.com</p>
                        <p class="contact"><span class="mobile-toggle"><b>Contact</b><br /></span>(873) 297-6426</p>
                        <p class="phone"><span class="mobile-toggle"><b>Phone</b><br /></span>(248)566-5637</p>
                    </div>
                </a>
                <a href="">
                    <div class="grid-main">
                        <img class="picture" src="<?php echo get_stylesheet_directory_uri() ?>/dist/assets/lay2.png" alt="Project Picture">
                        <p class="projectname"><span class="mobile-toggle"><b>Project Name</b><br /></span>Kalpataru Group</p>
                        <p class="country"><span class="mobile-toggle"><b>Country</b><br /></span>Colombia</p>
                        <p class="city"><span class="mobile-toggle"><b>City</b><br /></span>Pimouth</p>
                        <p class="newold"><span class="mobile-toggle"><b>New/Old</b><br /></span>Old</p>
                        <p class="price"><span class="mobile-toggle"><b>Price</b><br /></span>$20.5L</p>
                        <p class="pricesqft"><span class="mobile-toggle"><b>Price/Sqft</b><br /></span>$200.00</p>
                        <p class="sqft"><span class="mobile-toggle"><b>Sqft</b><br /></span>3.000</p>
                        <p class="rooms"><span class="mobile-toggle"><b>Rooms</b><br /></span>3</p>
                        <p class="baths"><span class="mobile-toggle"><b>Baths</b><br /></span>2</p>
                        <p class="website"><span class="mobile-toggle"><b>Website</b><br /></span>www.godrejproperties.com</p>
                        <p class="contact"><span class="mobile-toggle"><b>Contact</b><br /></span>(873) 297-6426</p>
                        <p class="phone"><span class="mobile-toggle"><b>Phone</b><br /></span>(248)566-5637</p>
                    </div>
                </a>
                <a href="">
                    <div class="grid-main">
                        <img class="picture" src="<?php echo get_stylesheet_directory_uri() ?>/dist/assets/lay3.png" alt="Project Picture">
                        <p class="projectname"><span class="mobile-toggle"><b>Project Name</b><br /></span>VTP Reality</p>
                        <p class="country"><span class="mobile-toggle"><b>Country</b><br /></span>Curacao</p>
                        <p class="city"><span class="mobile-toggle"><b>City</b><br /></span>Egiocaster</p>
                        <p class="newold"><span class="mobile-toggle"><b>New/Old</b><br /></span>New</p>
                        <p class="price"><span class="mobile-toggle"><b>Price</b><br /></span>$20.5L</p>
                        <p class="pricesqft"><span class="mobile-toggle"><b>Price/Sqft</b><br /></span>$200.00</p>
                        <p class="sqft"><span class="mobile-toggle"><b>Sqft</b><br /></span>3.000</p>
                        <p class="rooms"><span class="mobile-toggle"><b>Rooms</b><br /></span>3</p>
                        <p class="baths"><span class="mobile-toggle"><b>Baths</b><br /></span>2</p>
                        <p class="website"><span class="mobile-toggle"><b>Website</b><br /></span>www.godrejproperties.com</p>
                        <p class="contact"><span class="mobile-toggle"><b>Contact</b><br /></span>(873) 297-6426</p>
                        <p class="phone"><span class="mobile-toggle"><b>Phone</b><br /></span>(248)566-5637</p>
                    </div>
                </a>
                <a href="">
                    <div class="grid-main">
                        <img class="picture" src="<?php echo get_stylesheet_directory_uri() ?>/dist/assets/lay4.png" alt="Project Picture">
                        <p class="projectname"><span class="mobile-toggle"><b>Project Name</b><br /></span>Lokha Group</p>
                        <p class="country"><span class="mobile-toggle"><b>Country</b><br /></span>South Africa</p>
                        <p class="city"><span class="mobile-toggle"><b>City</b><br /></span>Blifshire</p>
                        <p class="newold"><span class="mobile-toggle"><b>New/Old</b><br /></span>New</p>
                        <p class="price"><span class="mobile-toggle"><b>Price</b><br /></span>$20.5L</p>
                        <p class="pricesqft"><span class="mobile-toggle"><b>Price/Sqft</b><br /></span>$200.00</p>
                        <p class="sqft"><span class="mobile-toggle"><b>Sqft</b><br /></span>3.000</p>
                        <p class="rooms"><span class="mobile-toggle"><b>Rooms</b><br /></span>3</p>
                        <p class="baths"><span class="mobile-toggle"><b>Baths</b><br /></span>2</p>
                        <p class="website"><span class="mobile-toggle"><b>Website</b><br /></span>www.godrejproperties.com</p>
                        <p class="contact"><span class="mobile-toggle"><b>Contact</b><br /></span>(873) 297-6426</p>
                        <p class="phone"><span class="mobile-toggle"><b>Phone</b><br /></span>(248)566-5637</p>
                    </div>
                </a>
                <a href="">
                    <div class="grid-main">
                        <img class="picture" src="<?php echo get_stylesheet_directory_uri() ?>/dist/assets/lay5.png" alt="Project Picture">
                        <p class="projectname"><span class="mobile-toggle"><b>Project Name</b><br /></span>Kanakia Spaces Realty</p>
                        <p class="country"><span class="mobile-toggle"><b>Country</b><br /></span>Azerbaijan</p>
                        <p class="city"><span class="mobile-toggle"><b>City</b><br /></span>Posey</p>
                        <p class="newold"><span class="mobile-toggle"><b>New/Old</b><br /></span>Old</p>
                        <p class="price"><span class="mobile-toggle"><b>Price</b><br /></span>$20.5L</p>
                        <p class="pricesqft"><span class="mobile-toggle"><b>Price/Sqft</b><br /></span>$200.00</p>
                        <p class="sqft"><span class="mobile-toggle"><b>Sqft</b><br /></span>3.000</p>
                        <p class="rooms"><span class="mobile-toggle"><b>Rooms</b><br /></span>3</p>
                        <p class="baths"><span class="mobile-toggle"><b>Baths</b><br /></span>2</p>
                        <p class="website"><span class="mobile-toggle"><b>Website</b><br /></span>www.godrejproperties.com</p>
                        <p class="contact"><span class="mobile-toggle"><b>Contact</b><br /></span>(873) 297-6426</p>
                        <p class="phone"><span class="mobile-toggle"><b>Phone</b><br /></span>(248)566-5637</p>
                    </div>
                </a>
                <a href="">
                    <div class="grid-main">
                        <img class="picture" src="<?php echo get_stylesheet_directory_uri() ?>/dist/assets/lay6.png" alt="Project Picture">
                        <p class="projectname"><span class="mobile-toggle"><b>Project Name</b><br /></span>Ashoka Developers<br> And Builders</p>
                        <p class="country"><span class="mobile-toggle"><b>Country</b><br /></span>Liberia</p>
                        <p class="city"><span class="mobile-toggle"><b>City</b><br /></span>Ubison</p>
                        <p class="newold"><span class="mobile-toggle"><b>New/Old</b><br /></span>New</p>
                        <p class="price"><span class="mobile-toggle"><b>Price</b><br /></span>$20.5L</p>
                        <p class="pricesqft"><span class="mobile-toggle"><b>Price/Sqft</b><br /></span>$200.00</p>
                        <p class="sqft"><span class="mobile-toggle"><b>Sqft</b><br /></span>3.000</p>
                        <p class="rooms"><span class="mobile-toggle"><b>Rooms</b><br /></span>3</p>
                        <p class="baths"><span class="mobile-toggle"><b>Baths</b><br /></span>2</p>
                        <p class="website"><span class="mobile-toggle"><b>Website</b><br /></span>www.godrejproperties.com</p>
                        <p class="contact"><span class="mobile-toggle"><b>Contact</b><br /></span>(873) 297-6426</p>
                        <p class="phone"><span class="mobile-toggle"><b>Phone</b><br /></span>(248)566-5637</p>
                    </div>
                </a>
                <a href="">
                    <div class="grid-main">
                        <img class="picture" src="<?php echo get_stylesheet_directory_uri() ?>/dist/assets/lay7.png" alt="Project Picture">
                        <p class="projectname"><span class="mobile-toggle"><b>Project Name</b><br /></span>Damac Properties UAE</p>
                        <p class="country"><span class="mobile-toggle"><b>Country</b><br /></span>Puerto Rico</p>
                        <p class="city"><span class="mobile-toggle"><b>City</b><br /></span>Trila</p>
                        <p class="newold"><span class="mobile-toggle"><b>New/Old</b><br /></span>Old</p>
                        <p class="price"><span class="mobile-toggle"><b>Price</b><br /></span>$20.5L</p>
                        <p class="pricesqft"><span class="mobile-toggle"><b>Price/Sqft</b><br /></span>$200.00</p>
                        <p class="sqft"><span class="mobile-toggle"><b>Sqft</b><br /></span>3.000</p>
                        <p class="rooms"><span class="mobile-toggle"><b>Rooms</b><br /></span>3</p>
                        <p class="baths"><span class="mobile-toggle"><b>Baths</b><br /></span>2</p>
                        <p class="website"><span class="mobile-toggle"><b>Website</b><br /></span>www.godrejproperties.com</p>
                        <p class="contact"><span class="mobile-toggle"><b>Contact</b><br /></span>(873) 297-6426</p>
                        <p class="phone"><span class="mobile-toggle"><b>Phone</b><br /></span>(248)566-5637</p>
                    </div>
                </a>
                <a href="">
                    <div class="grid-main">
                        <img class="picture" src="<?php echo get_stylesheet_directory_uri() ?>/dist/assets/lay8.png" alt="Project Picture">
                        <p class="projectname"><span class="mobile-toggle"><b>Project Name</b><br /></span>Gadrej Properties</p>
                        <p class="country"><span class="mobile-toggle"><b>Country</b><br /></span>Mauritania</p>
                        <p class="city"><span class="mobile-toggle"><b>City</b><br /></span>Akaham</p>
                        <p class="newold"><span class="mobile-toggle"><b>New/Old</b><br /></span>New</p>
                        <p class="price"><span class="mobile-toggle"><b>Price</b><br /></span>$20.5L</p>
                        <p class="pricesqft"><span class="mobile-toggle"><b>Price/Sqft</b><br /></span>$200.00</p>
                        <p class="sqft"><span class="mobile-toggle"><b>Sqft</b><br /></span>3.000</p>
                        <p class="rooms"><span class="mobile-toggle"><b>Rooms</b><br /></span>3</p>
                        <p class="baths"><span class="mobile-toggle"><b>Baths</b><br /></span>2</p>
                        <p class="website"><span class="mobile-toggle"><b>Website</b><br /></span>www.godrejproperties.com</p>
                        <p class="contact"><span class="mobile-toggle"><b>Contact</b><br /></span>(873) 297-6426</p>
                        <p class="phone"><span class="mobile-toggle"><b>Phone</b><br /></span>(248)566-5637</p>
                    </div>
                </a>
            </div>
            <a href="/PROPERTIESTABLE.COM/add-free-listing/"><button class="sponsored-btn text-center" type="submit">ADD FREE LISTING</button></a>
        </section>
		
		
<?php get_footer(); ?>