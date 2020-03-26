<?php 
if(isset($_GET['countries'])){
$countries=$_GET['countries'];
setcookie('countries',$countries,time() + (864000 * 30), "/");
}else if(isset($_COOKIE['countries'])) {
$countries=$_COOKIE['countries'];
}else{
$countries='';
}
if(isset($_GET['cities'])){
$cities=$_GET['cities'];
setcookie('cities', $cities, time() + (864000 * 30), "/");
} else if (isset($_COOKIE['cities'])) {
$cities=$_COOKIE['cities'];
} else {
$cities='';
}
if(isset($_GET['propertyage'])){
$propertyage=$_GET['propertyage'];
setcookie('propertyage', $propertyage, time() + (864000 * 30), "/");
} else if (isset($_COOKIE['propertyage'])) {
$propertyage=$_COOKIE['propertyage'];
} else {
$propertyage='';
}
if(isset($_GET['minprice'])){
$minprice=$_GET['minprice'];
setcookie('minprice', $minprice, time() + (864000 * 30), "/");
} else if (isset($_COOKIE['minprice'])) {
$minprice=$_COOKIE['minprice'];
} else {
$minprice='';
}
if(isset($_GET['maxprice'])){
$maxprice=$_GET['maxprice'];
setcookie('maxprice', $maxprice, time() + (864000 * 30), "/");
} else if (isset($_COOKIE['maxprice'])) {
$maxprice=$_COOKIE['maxprice'];
} else {
$maxprice='';
}
if(isset($_GET['pricesqft'])){
$pricesqft=$_GET['pricesqft'];
setcookie('pricesqft', $pricesqft, time() + (864000 * 30), "/");
} else if (isset($_COOKIE['pricesqft'])) {
$pricesqft=$_COOKIE['pricesqft'];
} else {
$pricesqft='';
}
if(isset($_GET['minsqft'])){
$minsqft=$_GET['minsqft'];
setcookie('minsqft', $minsqft, time() + (864000 * 30), "/");
} else if (isset($_COOKIE['minsqft'])) {
$minsqft=$_COOKIE['minsqft'];
} else {
$minsqft='';
}
if(isset($_GET['maxsqft'])){
$maxsqft=$_GET['maxsqft'];
setcookie('maxsqft', $maxsqft, time() + (864000 * 30), "/");
} else if (isset($_COOKIE['maxsqft'])) {
$maxsqft=$_COOKIE['maxsqft'];
} else {
$maxsqft='';
}
if(isset($_GET['rooms'])){
$rooms=$_GET['rooms'];
setcookie('rooms', $rooms, time() + (864000 * 30), "/");
} else if (isset($_COOKIE['rooms'])) {
$rooms=$_COOKIE['rooms'];
} else {
$rooms='';
}
if(isset($_GET['baths'])){
$baths=$_GET['baths'];
setcookie('baths', $baths, time() + (864000 * 30), "/");
} else if (isset($_COOKIE['baths'])) {
$baths=$_COOKIE['baths'];
} else {
$baths='';
}
?>

<!doctype html>
<html lang="en" dir="ltr">
<head>
	<?php 
	if(get_post_type()=='sponsoredlistings' || get_post_type()=='freelistings'){
		$title = get_field("project_name");
		$country = get_field("country");
		$city = get_field("city");
		$keywords=$title.' '.$country.' '.$city;
		?>
	<?php } else { 
		$title = wp_get_document_title(); 
	}
	?>
    <title><?php echo $title;?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1">
	<?php if(isset($keywords)){?>
	<meta name="keywords" content="<?php echo $keywords;?>">
	<?php }?>
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/dist/css/main.css?id=<?php echo rand();?>" type="text/css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/style.css" type="text/css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header">
        <div class="nav-menu">
            <div class="menu-toggle" id="menu-toggle">
                <span></span>
            </div>
            <div class="nav-bar" style="justify-content: space-between;">
				<div class="main-logobox" style="max-height: 100px;">
				<?php 
				$custom_logo_id = get_theme_mod('custom_logo');
				$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
				if ( has_custom_logo() ) {
				echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '" style="height: 100%;">';
				} else {
				echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
				}
				echo "</div>";
				 $defaults = array(
						'container'       => '',
						'items_wrap'      => '<ul>%3$s</ul>',
						'theme_location'  => 'header_menu',
					);

					wp_nav_menu( $defaults );
					
				?>				

            </div>
        </div>			
		<h3>We Display Homes In A Table Format</h3>
        <div class="intro-text">

            <img src="<?php echo get_stylesheet_directory_uri() ?>/dist/assets/intro-text.png" alt="For Those Who Love It, Find your desired property">
        </div>
    </header>
    <main>
        <section class="main-search">
            <div class="container">
				<form action="#">	
                <div class="search">
                    <input name="countries" class="countries" type="search" list="countries" placeholder="Country" value="<?php echo $countries;?>">
                    <datalist id="countries">
                        <option value="Saint Helena" <?php if($countries=="Saint Helena"){ echo "selected";}?>>Saint Helena</option>
                        <option value="Saint Kitts and Nevis" <?php if($countries=="Saint Kitts and Nevis"){ echo "selected";}?>>Saint Kitts and Nevis</option>
                        <option value="Saint Lucia" <?php if($countries=="Saint Lucia"){ echo "selected";}?>>Saint Lucia</option>
                        <option value="Saint Pierre" <?php if($countries=="Saint Pierre"){ echo "selected";}?>>Saint Pierre</option>
                        <option value="Saint Vincent" <?php if($countries=="Saint Vincent"){ echo "selected";}?>>Saint Vincent</option>
                    </datalist>
                    <input name="cities" class="cities" type="search" list="cities" placeholder="City" value="<?php echo $cities;?>">
                    <datalist id="cities">
                        <option value="Helena" <?php if($cities=="Helena"){ echo "selected";}?>>Helena</option>
                        <option value="Kitts and Nevis" <?php if($cities=="Kitts and Nevis"){ echo "selected";}?>>Kitts and Nevis</option>
                        <option value="Lucia" <?php if($cities=="Lucia"){ echo "selected";}?>>Lucia</option>
                        <option value="Pierre" <?php if($cities=="Pierre"){ echo "selected";}?>>Pierre</option>
                        <option value="Vincent" <?php if($cities=="Vincent"){ echo "selected";}?>>Vincent</option>
                    </datalist>
                    <input name="propertyage" class="propertyAge" type="search" list="propertyAge" placeholder="Property Age" value="<?php echo $propertyage;?>">
                    <datalist id="propertyAge">
                        <option value="5" <?php if($propertyage==5){ echo "selected";}?>>5</option>
                        <option value="10" <?php if($propertyage==10){ echo "selected";}?>>10</option>
                        <option value="15" <?php if($propertyage==15){ echo "selected";}?>>15</option>
                        <option value="20" <?php if($propertyage==20){ echo "selected";}?>>20</option>
                        <option value="25" <?php if($propertyage==25){ echo "selected";}?>>25</option>
                    </datalist>
                    <input class="minprice" type="number" name="minprice" min="0" placeholder="Min Price" value="<?php echo $minprice;?>">
                    <input class="maxprice" type="number" name="maxprice" min="0" placeholder="Max Price" value="<?php echo $maxprice;?>">
                    <input class="pricesqft" type="number" name="pricesqft" min="0" placeholder="Price/Sqft" value="<?php echo $pricesqft;?>">
                    <input class="minsqft" type="number" name="minsqft" min="0" placeholder="Min Sqft" value="<?php echo $minsqft;?>">
                    <input class="maxsqft" type="number" name="maxsqft" min="0"  placeholder="Max Sqft" value="<?php echo $maxsqft;?>">
                    <input class="rooms" type="number" name="rooms" min="0" placeholder="Rooms" value="<?php echo $rooms;?>">
                    <input class="baths" type="number" name="baths" min="0"  placeholder="Baths" value="<?php echo $baths;?>">
                    <button class="submit" type="submit">FILTER</button>
                </div>
				</form>
                <div class="take-a-email">
                    <div class="email-text">
                        <h3 class="email-big-text">Can't find the result you seek?</h3>
                        <h6 class="email-small-text">SET EMAIL ALERTS FOR YOUR PREFERRED FILTER</h6>
                    </div>
                    <div class="email-submit">
                        <input class="enteremail" type="text" name="enteremail" placeholder="Enter Your Email...">
                        <button class="email-submit-btn">SET FILTER</button>
                    </div>
                </div>
            </div>
        </section>
		
